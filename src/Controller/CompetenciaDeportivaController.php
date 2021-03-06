<?php

namespace App\Controller;

use App\Entity\CompetenciaDeportiva;
use App\Entity\Disponibilidad;
use App\Entity\Estado;
use App\Entity\Fecha;
use App\Entity\HistorialResultado;
use App\Entity\LugarDeRealizacion;
use App\Entity\Participante;
use App\Entity\Partido;
use App\Entity\ResultadoFinal;
use App\Entity\ResultadoPuntuacion;
use App\Entity\ResultadoSets;
use App\Entity\Set;
use App\Entity\Usuario;
use App\Form\CompetenciaDeportivaType;
use App\Form\ParticipanteType;
use App\Form\ResultadoFinalType;
use App\Form\ResultadoPuntuacionType;
use App\Form\ResultadoSetsType;
use App\Repository\ParticipanteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @Route("/competencias")
 */
class CompetenciaDeportivaController extends AbstractController
{
    /**
     * @Route("/", name="competencia_deportiva_index", methods={"GET"})
     */
    public function index()
    {
        if ($this->getUser()){
            $competencias = ($this->getUser())->getCompetencias();
        } else {
            $entityManager = $this->getDoctrine()->getManager();
            $repositorio = $entityManager->getRepository(get_class(new Usuario()));
            $competencias = ($repositorio->find(1))->getCompetencias();
        }
        return $this->render('competencia_deportiva/index.html.twig', [
            'competencia_deportivas' => $competencias,

        ]);
    }

    /**
     * @Route("/nueva", name="competencia_deportiva_new", methods={"GET","POST"})
     */
    public function new(Request $request)
    {

        $competenciaDeportiva = new CompetenciaDeportiva();

        $form = $this->createForm(CompetenciaDeportivaType::class, $competenciaDeportiva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $repositorio = $entityManager->getRepository(get_class(new Estado()));
            $competenciaDeportiva->setEstado($repositorio->find(1));
            if ($this->getUser()){
                $competenciaDeportiva->setUsuario($this->getUser());
            } else {
                $repositorio = $entityManager->getRepository(get_class(new Usuario()));
                $competenciaDeportiva->setUsuario($repositorio->find(1));
            }
            $nombreMayusculas = $competenciaDeportiva -> getNombre();
            $nombreMayusculas = strtoupper($nombreMayusculas);
            $competenciaDeportiva -> setNombre($nombreMayusculas);

            if ($competenciaDeportiva->getCantidadMaximaSet()){
                $competenciaDeportiva->setFormaPuntuacion('TIPO_SETS');
            }elseif ($competenciaDeportiva->getPuntosPorNoPresentarse()){
                $competenciaDeportiva->setFormaPuntuacion('TIPO_PUNTUACION');
            }else{
                $competenciaDeportiva->setFormaPuntuacion('TIPO_FINAL');
            }

            $entityManager->persist($competenciaDeportiva);
            $entityManager->flush();

            return $this->redirectToRoute('participante_index', ['id_competencia' => $competenciaDeportiva->getId()]);
        }

        return $this->render('competencia_deportiva/new.html.twig', [
            'form' => $form->createView(),
            'competenciaDeportiva' => $competenciaDeportiva,
        ]);
    }

    /**
     * @Route("/{id}", name="competencia_deportiva_show", methods={"GET"})
     */
    public function show(CompetenciaDeportiva $competenciaDeportiva)
    {

        $repositorio = $this->getDoctrine()->getRepository(Participante::class);
        $lista_participantes = $repositorio->findByCompetencia($competenciaDeportiva->getId());
        $cantidadParticipantes = sizeof($lista_participantes);

        if (empty($lista_participantes)){
            $participantesBool = 0;
        } else {
            $participantesBool = 1;
        }

        $nroFecha = $competenciaDeportiva->fechaActual();
        //$nroFecha = $this->fechaActual($fechas);


        return $this->render('competencia_deportiva/show.html.twig', [

            'competencia_deportiva' => $competenciaDeportiva,
            'fechaActual' => $nroFecha,
            'participantesBool' => $participantesBool,
            'cantidadParticipantes' => $cantidadParticipantes,

        ]);
    }

    /**
     * @Route("/{id}/edit", name="competencia_deportiva_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CompetenciaDeportiva $competenciaDeportiva)
    {
        $form = $this->createForm(CompetenciaDeportivaType::class, $competenciaDeportiva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('competencia_deportiva_index');
        }

        return $this->render('competencia_deportiva/edit.html.twig', [
            'competencia_deportiva' => $competenciaDeportiva,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="competencia_deportiva_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CompetenciaDeportiva $competenciaDeportiva)
    {
        if ($this->isCsrfTokenValid('delete'.$competenciaDeportiva->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($competenciaDeportiva);
            $entityManager->flush();
        }

        return $this->redirectToRoute('competencia_deportiva_index');
    }

    /**
     * @Route("/{id}/fixture/generate", name="competencia_deportiva_fixture_generate", methods={"GET","POST"})
     */
    public function generarFixture(CompetenciaDeportiva $competenciaDeportiva)
    {

        $em = $this->getDoctrine()->getManager();
        $this->borrarFixtureActual($competenciaDeportiva);
        $estado = $competenciaDeportiva->getEstado();

        if($estado->getId() == 1 or $estado->getId() == 2){
            $this->generarFixtureLiga($competenciaDeportiva);
            $repositorio = $em->getRepository(get_class(new Estado()));
            $competenciaDeportiva->setEstado($repositorio->find(2));
            $em->persist($competenciaDeportiva);
            $em->flush();

            return $this->redirectToRoute('competencia_deportiva_show',['id'=>$competenciaDeportiva->getId()]);
        }
    }

    private function generarFixtureLiga(CompetenciaDeportiva $competenciaDeportiva){

        $em = $this->getDoctrine()->getManager();

        $lista_participantes = $competenciaDeportiva->getParticipante();
        $participantes_shuffle =  $lista_participantes->toArray();
        shuffle($participantes_shuffle);
        $lista_participantes_shuffle = new ArrayCollection();
        foreach ($participantes_shuffle as $participante){
            $lista_participantes_shuffle->add($participante);
        }
        $lista_disponibilidades = $competenciaDeportiva->getDisponibilidades();
        $repositorio = $em->getRepository(get_class(new Disponibilidad()));
        foreach ($lista_disponibilidades as $disponibilidad){
            $lista_disponibilidades_load[] = $repositorio->find($disponibilidad->getId());
        }
        $repositorio = $em->getRepository(get_class(new LugarDeRealizacion()));
        foreach ($lista_disponibilidades_load as $disponibilidad){
            $lugar_vacio = $disponibilidad->getLugar();
            $disponibilidad->setLugar($repositorio->find($lugar_vacio->getId()));
        }

        if(sizeof($lista_participantes_shuffle)%2 == 1){
            $participanteAux = new Participante();
            $participanteAux->setNombre("NADIE");
            $participanteAux->setEmail("participanteAux@correo.com");
            $participanteFijo = $participanteAux; // = Boca Jrs
            $cantidadParticipantes = sizeof($lista_participantes_shuffle) + 1; // = 3 + 1
        }else{
            $cantidadParticipantes = sizeof($lista_participantes_shuffle); // = 4
            $participanteFijo = $lista_participantes_shuffle->first(); // = Boca Jrs
            $lista_participantes_shuffle->remove(0); // = Boca Jrs
        }

        $nroFecha = 1;

        while($nroFecha <= $cantidadParticipantes-1){ // 1 <= 3? // 2 <= 3? // 3 <= 3? Si, ultima
            $disponibilidadUsada = 1;
            $actual = 0; //disponibilidad actual en el array
            //dump($lista_disponibilidades_load[$actual]);
            //die();
            $participanteAux = $lista_participantes_shuffle->first(); // = River Plate // = Union // = Colon
            $lista_participantes_shuffle->removeElement($participanteAux); // = River Plate // = Union // = Colon
            $nuevaFecha = new Fecha($nroFecha);
            if($participanteFijo->getNombre() != "NADIE"){
                $nuevoPartido = new Partido($participanteFijo,$participanteAux,($lista_disponibilidades_load[$actual])->getLugar());
                $nuevaFecha->addPartidos($nuevoPartido);
            }
            $index_local = $lista_participantes_shuffle->indexOf($lista_participantes_shuffle->first());
            $index_visitante = $lista_participantes_shuffle->indexOf($lista_participantes_shuffle->last()); // 1
            while ($index_local<$index_visitante){
                if($disponibilidadUsada > $lista_disponibilidades_load[$actual]->getDisponibilidad()){
                    $actual++;
                    $disponibilidadUsada=1;
                }
                $nuevoPartido = new Partido($lista_participantes_shuffle[$index_local],$lista_participantes_shuffle[$index_visitante],$lista_disponibilidades_load[$actual]->getLugar());
                $nuevaFecha->addPartidos($nuevoPartido);
                $index_local++; // 1
                $index_visitante--; // 0
                $disponibilidadUsada++; //2
            }
            $lista_participantes_shuffle->add($participanteAux); // = River Plate // = Union
            $nroFecha++; // 2 // 3
            $competenciaDeportiva->addFecha($nuevaFecha);
        }
        $lista_participantes_shuffle->add($participanteFijo);

    }

    public function borrarFixtureActual(CompetenciaDeportiva $competenciaDeportiva)
    {
        $em = $this->getDoctrine()->getManager();
        $fechas = $competenciaDeportiva->getFecha();

        foreach ($fechas as $fecha) {
            $em->remove($fecha);
            $em->flush();
        }
    }

    /**
     * @Route("/{id}/fixture/mostrar", name="competencia_deportiva_fixture_index")
     */
    public function indexFixtureLiga(CompetenciaDeportiva $competenciaDeportiva){
        $formaPuntuacion = $competenciaDeportiva->getFormaPuntuacion();
        $fechas = $competenciaDeportiva->getFecha();

        return $this->render('competencia_deportiva/fixture/index.html.twig',
            [
                'fechas' => $fechas,
                'id_competencia' => $competenciaDeportiva->getId(),
                'competencia' => $competenciaDeportiva,
                'formaPuntuacion' => $formaPuntuacion,
                'cantidadSets'    => $competenciaDeportiva-> getCantidadMaximaSet(),
            ]);
    }

    /**
     * @Route("/{id_competencia}/fixture/{id_partido}/resultado", name="competencia_deportiva_fixture_partido_resultado_gestionar", methods={"GET","POST"})
     */
    public function gestionarResultado($id_partido, $id_competencia){
        $em = $this->getDoctrine()->getManager();

        $repositorio = $em->getRepository(CompetenciaDeportiva::class);
        $competenciaDeportiva = $repositorio->find($id_competencia);

        $repositorio = $em->getRepository(Partido::class);
        $partido = $repositorio->find($id_partido);

        $puntuacion = $competenciaDeportiva->getFormaPuntuacion();

        if ($partido->getResultado() == NULL)   //CREA UN RESULTADO
        {
            if($puntuacion == 'TIPO_FINAL'){
                $resultado = new ResultadoFinal();
            }elseif ($puntuacion == 'TIPO_PUNTUACION'){
                $resultado = new ResultadoPuntuacion();
            }elseif ($puntuacion == 'TIPO_SETS'){
                $resultado = new ResultadoSets();
                $contador = 1;
                $maximo = $competenciaDeportiva->getCantidadMaximaSet();
                while ($contador <= $maximo){
                    $resultado->addSet(new Set($contador));
                    $contador++;
                }
            }
            $partido->addResultado($resultado);
            $this->getDoctrine()->getManager()->persist($partido);
            $this->getDoctrine()->getManager()->flush();
        }
        $resultado = ($this->getDoctrine()->getRepository(Partido::class))->find($id_partido)->getResultado();

        if($puntuacion == 'TIPO_FINAL'){
            return $this->redirectToRoute('competencia_deportiva_fixture_partido_resultado_gestionar_final',
                [
                    'id_competencia' => $competenciaDeportiva->getId(),
                    'id_partido' => $partido->getId(),
                    'id' => $resultado->getId(),
                ]);
        }elseif ($puntuacion == 'TIPO_PUNTUACION'){
            return $this->redirectToRoute('competencia_deportiva_fixture_partido_resultado_gestionar_puntuacion',
                [
                    'id_competencia' => $competenciaDeportiva->getId(),
                    'id_partido' => $partido->getId(),
                    'id' => $resultado->getId(),
                ]);
        }elseif ($puntuacion == 'TIPO_SETS'){
            return $this->redirectToRoute('competencia_deportiva_fixture_partido_resultado_gestionar_sets',
                [
                    'id_competencia' => $competenciaDeportiva->getId(),
                    'id_partido' => $partido->getId(),
                    'id' => $resultado->getId(),
                    'competencia_deportiva' => $competenciaDeportiva,

                ]);
        }

    }

    /**
     * @Route("/{id_competencia}/fixture/{id_partido}/resultado/{id}/sets", name="competencia_deportiva_fixture_partido_resultado_gestionar_sets", methods={"GET","POST"})
     */
    public function gestionarResultadoSets($id_partido, $id_competencia, Request $request, ResultadoSets $resultadoSets){
        $em = $this->getDoctrine()->getManager();

        $repositorio = $em->getRepository(CompetenciaDeportiva::class);
        $competenciaDeportiva = $repositorio->find($id_competencia);

        $repositorio = $em->getRepository(Partido::class);
        $partido = $repositorio->find($id_partido);
        $resultado = $partido->getResultado();
        $ausenteLocal = $resultado->getAusenteLocal();
        $ausenteVisitante  = $resultado->getAusenteVisitante();
        $sets = $resultado -> getSets();
        $cantidadSets = sizeof($sets);

        if ($ausenteLocal == 0 ) {
            $ausenteLocal = 0;
        }
        if ($ausenteVisitante == 0 ) {
            $ausenteVisitante = 0;
        }

        $form = $this->createForm(ResultadoSetsType::class, $resultadoSets);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $historialResultado = new HistorialResultado();
            $resultadoSets->addHistorial($historialResultado);
            $contador = 1;
            while($contador <= sizeof($resultadoSets->getSets()) ){
                $historialSet = new Set($contador);
                $historialResultado->addSet($historialSet);
                $contador++;
            }

            if ($form->get('ausenteLocal')->getData() == true) {
                $resultadoSets->setAusenteLocal(true);
                $resultadoSets->setAusenteVisitante(false);
            } elseif ($form->get('ausenteVisitante')->getData() == true) {
                $resultadoSets->setAusenteLocal(false);
                $resultadoSets->setAusenteVisitante(true);
            } else {
                $resultadoSets->setAusenteLocal(false);
                $resultadoSets->setAusenteVisitante(false);
            }

            $historialResultado->setAusenteLocal($resultadoSets->getAusenteLocal());
            $historialResultado->setAusenteVisitante($resultadoSets->getAusenteVisitante());

            $contador = 0;
            $resultadoSets_array = $resultadoSets->getSets()->toArray();
            foreach ($historialResultado->getSets() as $historialSet){
                $historialSet->setPuntajeLocal(($resultadoSets_array[$contador])->getPuntajeLocal());
                $historialSet->setPuntajeVisitante(($resultadoSets_array[$contador])->getPuntajeVisitante());
                $contador++;
            }
            $historialResultado->setFecha(new \DateTime());

            $repositorio = $em->getRepository(Estado::class);

            if($competenciaDeportiva->fechaActual()==-2){

                $competenciaDeportiva->setEstado($repositorio->find(4));
            }else{
                $competenciaDeportiva->setEstado($repositorio->find(3));
            }

            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('competencia_deportiva_fixture_index',
                [
                'id' => $competenciaDeportiva->getId(),
                    'competencia_deportiva' => $competenciaDeportiva,

            ]);
        }

        return $this->render('competencia_deportiva/fixture/show.html.twig',
            [
                'form' => $form->createView(),
                'partido' => $partido,
                'resultado' => $resultadoSets,
                'competencia' => $competenciaDeportiva,
                'ausenteLocal' => $ausenteLocal,
                'ausenteVisitante' => $ausenteVisitante,
                'cantidadSets' => $cantidadSets,
            ]);
    }

    /**
     * @Route("/{id_competencia}/fixture/{id_partido}/resultado/{id}/puntuacion", name="competencia_deportiva_fixture_partido_resultado_gestionar_puntuacion", methods={"GET","POST"})
     */
    public function gestionarResultadoPuntuacion($id_partido, $id_competencia, Request $request, ResultadoPuntuacion $resultadoPuntuacion){
        $em = $this->getDoctrine()->getManager();

        $repositorio = $em->getRepository(CompetenciaDeportiva::class);
        $competenciaDeportiva = $repositorio->find($id_competencia);
        $repositorio = $em->getRepository(Partido::class);
        $partido = $repositorio->find($id_partido);

        $form = $this->createForm(ResultadoPuntuacionType::class, $resultadoPuntuacion);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $historialResultado = new HistorialResultado();
            $resultadoPuntuacion->addHistorial($historialResultado);

            if ($form->get('ausenteLocal')->getData() == true) {
                $resultadoPuntuacion->setAusenteLocal(true);
                $resultadoPuntuacion->setAusenteVisitante(false);
            } elseif ($form->get('ausenteVisitante')->getData() == true) {
                $resultadoPuntuacion->setAusenteLocal(false);
                $resultadoPuntuacion->setAusenteVisitante(true);
            } else {
                $resultadoPuntuacion->setAusenteLocal(false);
                $resultadoPuntuacion->setAusenteVisitante(false);
            }
            $historialResultado->setAusenteLocal($resultadoPuntuacion->getAusenteLocal());
            $historialResultado->setAusenteVisitante($resultadoPuntuacion->getResultadoVisitante());

            $historialResultado->setResultadoLocal($resultadoPuntuacion->getResultadoLocal());
            $historialResultado->setResultadoVisitante($resultadoPuntuacion->getResultadoVisitante());

            $historialResultado->setFecha(new \DateTime());

            $repositorio = $em->getRepository(Estado::class);
            if($competenciaDeportiva->fechaActual() == -2){

                $competenciaDeportiva->setEstado($repositorio->find(4));
            }else{
                $competenciaDeportiva->setEstado($repositorio->find(3));
            }
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('competencia_deportiva_fixture_index', ['id' => $competenciaDeportiva->getId()]);
        }

        return $this->render('competencia_deportiva/fixture/show.html.twig',
            [
                'form' => $form->createView(),
                'partido' => $partido,
                'resultado' => $resultadoPuntuacion,
                'competencia' => $competenciaDeportiva,
            ]);
    }

    /**
     * @Route("/{id_competencia}/fixture/{id_partido}/resultado/{id}/final", name="competencia_deportiva_fixture_partido_resultado_gestionar_final", methods={"GET","POST"})
     */
    public function gestionarResultadoFinal($id_partido, $id_competencia, Request $request, ResultadoFinal $resultadoFinal){
        $em = $this->getDoctrine()->getManager();

        $repositorio = $em->getRepository(CompetenciaDeportiva::class);
        $competenciaDeportiva = $repositorio->find($id_competencia);

        $repositorio = $em->getRepository(Partido::class);
        $partido = $repositorio->find($id_partido);

        $form = $this->createForm(ResultadoFinalType::class, $resultadoFinal);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $historialResultado = new HistorialResultado();
            $resultadoFinal->addHistorial($historialResultado);

            if ($form->get('ausenteLocal')->getData() == true) {
                $resultadoFinal->setAusenteLocal(true);
                $resultadoFinal->setAusenteVisitante(false);
                $resultadoFinal->setGanadorLocal(false);
                $resultadoFinal->setGanadorVisitante(true);
                $resultadoFinal->setEmpate(false);
            } elseif ($form->get('ausenteVisitante')->getData() == true) {
                $resultadoFinal->setAusenteLocal(false);
                $resultadoFinal->setAusenteVisitante(true);
                $resultadoFinal->setGanadorLocal(true);
                $resultadoFinal->setGanadorVisitante(false);
                $resultadoFinal->setEmpate(false);
            } elseif (($form->get('ganadorLocal')->getData() == true)) {
                $resultadoFinal->setAusenteLocal(false);
                $resultadoFinal->setAusenteVisitante(false);
                $resultadoFinal->setGanadorLocal(true);
                $resultadoFinal->setGanadorVisitante(false);
                $resultadoFinal->setEmpate(false);
            } elseif (($form->get('ganadorVisitante')->getData() == true)) {
                $resultadoFinal->setAusenteLocal(false);
                $resultadoFinal->setAusenteVisitante(false);
                $resultadoFinal->setGanadorLocal(false);
                $resultadoFinal->setGanadorVisitante(true);
                $resultadoFinal->setEmpate(false);
            }
            if ($form->get('empate')->getData() == true){
                $resultadoFinal->setAusenteLocal(false);
                $resultadoFinal->setAusenteVisitante(false);
                $resultadoFinal->setGanadorLocal(false);
                $resultadoFinal->setGanadorVisitante(false);
                $resultadoFinal->setEmpate(true);
            }

            $historialResultado->setEmpate($resultadoFinal->getEmpate());
            $historialResultado->setGanadorLocal($resultadoFinal->getGanadorLocal());
            $historialResultado->setGanadorVisitante($resultadoFinal->getGanadorVisitante());
            $historialResultado->setAusenteLocal($resultadoFinal->getAusenteLocal());
            $historialResultado->setAusenteVisitante($resultadoFinal->getAusenteVisitante());

            $historialResultado->setFecha(new \DateTime());

            $repositorio = $em->getRepository(Estado::class);
            if($competenciaDeportiva->fechaActual()==-2){

                $competenciaDeportiva->setEstado($repositorio->find(4));
            }else{
                $competenciaDeportiva->setEstado($repositorio->find(3));
            }
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('competencia_deportiva_fixture_index', ['id' => $competenciaDeportiva->getId()]);
        }
        return $this->render('competencia_deportiva/fixture/show.html.twig',
            [
                'form' => $form->createView(),
                'partido' => $partido,
                'resultado' => $resultadoFinal,
                'competencia' => $competenciaDeportiva,

            ]);
    }

    /**
     * @package Participante Controller
     * Tiene los metodos necesarios para gestionar un participante.
     */

    /**
     * @Route("/participantes/{id_competencia}", name="participante_index", methods={"GET"})
     */
    public function participante_index(ParticipanteRepository $participanteRepository, $id_competencia)
    {

        $repositorio = $this->getDoctrine()->getRepository(CompetenciaDeportiva::class);
        $competenciaDeportiva = $repositorio->find($id_competencia);

        $estado = $competenciaDeportiva->getEstado();
        return $this->render('participante/index.html.twig', [

            'participantes' => $participanteRepository->findByCompetencia($id_competencia),
            'estado' => $estado,
            'id_competencia' => $id_competencia,

        ]);
    }

    /**
     * @Route("/participantes/new/{id_competencia}", name="participante_new", methods={"GET","POST"})
     */
    public function participante_new(Request $request, $id_competencia)
    {
        $participante = new Participante();
        $form = $this->createForm(ParticipanteType::class, $participante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imagenFile = $form->get('imagen')->getData();

            if($imagenFile){
                $originalFilename = pathinfo($imagenFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imagenFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $imagenFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                $participante->setImagenFileName($newFilename);
            }


            $nombreMayusculas = $participante -> getNombre();
            $nombreMayusculas = strtoupper($nombreMayusculas);
            $participante -> setNombre($nombreMayusculas);

            $emailMayusculas = $participante -> getEmail();
            $emailMayusculas = strtoupper($emailMayusculas);
            $participante -> setEmail($emailMayusculas);

            $entityManager = $this->getDoctrine()->getManager();
            $repositorio = $entityManager->getRepository(CompetenciaDeportiva::class);
            $competenciaDeportiva = $repositorio->find($id_competencia);
            $listaParticipante = $competenciaDeportiva->getParticipante();

            $contiene = false;
            foreach ($listaParticipante as $p){
                if (($p->getNombre() == $participante->getNombre()) or ($p->getEmail() == $participante->getEmail())) $contiene = true;
            }
            if(!$contiene){
                $competenciaDeportiva->addParticipante($participante);
                $this->borrarFixtureActual($competenciaDeportiva);
                $repositorio = $entityManager->getRepository(Estado::class);
                $competenciaDeportiva->setEstado($repositorio->find(1));

                $entityManager->persist($competenciaDeportiva);
                $entityManager->flush();
            }
            return $this->redirectToRoute('participante_index', ['id_competencia' => $id_competencia]);

        }

        return $this->render('participante/new.html.twig', [
            'participante' => $participante,
            'form' => $form->createView(),
            'id_competencia' => $id_competencia,
        ]);
    }

    /**
     * @Route("/participantes/{id}", name="participante_show", methods={"GET"})
     */
    public function participante_show(Participante $participante)
    {
        return $this->render('participante/show.html.twig', [
            'participante' => $participante,
        ]);
    }

    /**
     * @Route("/participantes/{id}/edit", name="participante_edit", methods={"GET","POST"})
     */
    public function participante_edit(Request $request, Participante $participante)
    {
        $form = $this->createForm(ParticipanteType::class, $participante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('participante_index');
        }

        return $this->render('participante/edit.html.twig', [
            'participante' => $participante,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/participantes/{id}", name="participante_delete", methods={"DELETE"})
     */
    public function participante_delete(Request $request, Participante $participante)
    {
        if ($this->isCsrfTokenValid('delete'.$participante->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($participante);
            $entityManager->flush();
        }

        return $this->redirectToRoute('participante_index');
    }

}
