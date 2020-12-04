<?php

namespace App\Controller;

use App\Entity\CompetenciaDeportiva;
use App\Entity\Disponibilidad;
use App\Entity\Estado;
use App\Entity\Fecha;
use App\Entity\LugarDeRealizacion;
use App\Entity\Participante;
use App\Entity\Partido;
use App\Entity\Resultado;
use App\Entity\Usuario;
use App\Form\CompetenciaDeportivaType;
use App\Form\ResultadoType;
use App\Repository\CompetenciaDeportivaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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


            /*
             * dump($competenciaDeportiva);
             */

            $nombreMayusculas = $competenciaDeportiva -> getNombre();
            $nombreMayusculas = strtoupper($nombreMayusculas);
            $competenciaDeportiva -> setNombre($nombreMayusculas);

            /*
             * dump($nombreMayusculas);
            dump($competenciaDeportiva);
            die()
            */

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
        $repositorio = $this->getDoctrine()->getRepository(get_class(new Participante()));
        $listaParticipantes = $repositorio->findByCompetencia($competenciaDeportiva->getId());
        return $this->render('competencia_deportiva/show.html.twig', [
            'competencia_deportiva' => $competenciaDeportiva,
            'lista_participantes' => $listaParticipantes,

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
        $estado = $competenciaDeportiva->getEstado();
        if($estado->getId() == 1 or $estado->getId() == 2){
            if(sizeof($competenciaDeportiva->getParticipante())%2 == 1){
                $participanteAux = new Participante();
                $participanteAux->setNombre("NADIE");
                $participanteAux->setEmail("participanteAux@correo.com");
                $competenciaDeportiva->addParticipante($participanteAux);
            }
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
        $lista_disponibilidades = $competenciaDeportiva->getDisponibilidades();
        $repositorio = $em->getRepository(get_class(new Disponibilidad()));
        foreach ($lista_disponibilidades as $disponibilidad){
            $lista_disponibilidades_load[] = $repositorio->find($disponibilidad->getId());
        }
        $repositorio = $em->getRepository(get_class(new LugarDeRealizacion()));
        foreach ($lista_disponibilidades_load as $disponibilidad){
            $lugar_vacio = $disponibilidad->getLugar();
            $disponibilidad->setLugar($repositorio->find($lugar_vacio->getId()));
            //dump($competenciaDeportiva);
            //die();
        }
        //$lista_disponibilidades_load = $lista_disponibilidades_load->toArray();
        $cantidadParticipantes = sizeof($lista_participantes); // = 4
        $nroFecha = 1;
        $participanteFijo = $lista_participantes->first(); // = Boca Jrs
        $lista_participantes->remove(0); // = Boca Jrs

        while($nroFecha <= $cantidadParticipantes-1){ // 1 <= 3? // 2 <= 3? // 3 <= 3? Si, ultima
            $disponibilidadUsada = 1;
            $actual = 0; //disponibilidad actual en el array
            //dump($lista_disponibilidades_load[$actual]);
            //die();
            $participanteAux = $lista_participantes->first(); // = River Plate // = Union // = Colon
            $lista_participantes->removeElement($participanteAux); // = River Plate // = Union // = Colon
            $nuevaFecha = new Fecha($nroFecha);
            $nuevoPartido = new Partido($participanteFijo,$participanteAux,($lista_disponibilidades_load[$actual])->getLugar());
            $nuevaFecha->addPartidos($nuevoPartido);
            $index_local = $lista_participantes->indexOf($lista_participantes->first());
            $index_visitante = $lista_participantes->indexOf($lista_participantes->last()); // 1
            while ($index_local<$index_visitante){
                if($disponibilidadUsada > $lista_disponibilidades_load[$actual]->getDisponibilidad()){
                    $actual++;
                    $disponibilidadUsada=1;
                }
                $nuevoPartido = new Partido($lista_participantes[$index_local],$lista_participantes[$index_visitante],$lista_disponibilidades_load[$actual]->getLugar());
                $nuevaFecha->addPartidos($nuevoPartido);
                $index_local++; // 1
                $index_visitante--; // 0
                $disponibilidadUsada++; //2
            }
            $lista_participantes->add($participanteAux); // = River Plate // = Union
            $nroFecha++; // 2 // 3
            $competenciaDeportiva->addFecha($nuevaFecha);
        }
        $lista_participantes->add($participanteFijo);
    }

    /**
     * @Route("/{id}/fixture/mostrar", name="competencia_deportiva_fixture_index")
     */
    public function indexFixtureLiga(CompetenciaDeportiva $competenciaDeportiva){
        $repositorio = $this->getDoctrine()->getRepository(get_class(new Fecha(0)));
        return $this->render('competencia_deportiva/fixture/index.html.twig',
            [
                'fechas' => $repositorio->findByCompetencia($competenciaDeportiva->getId()),
                'id_competencia' => $competenciaDeportiva->getId(),
            ]);
    }

    /**
     * @Route("/{id_competencia}/fixture/{id_partido}/resultado", name="competencia_deportiva_fixture_partido_resultado_gestionar", methods={"GET","POST"})
     */
    public function gestionarResultado($id_partido, $id_competencia, Request $request){
        $em = $this->getDoctrine()->getManager();

        $repositorio = $em->getRepository(CompetenciaDeportiva::class);
        $competenciaDeportiva = $repositorio->find($id_competencia);

        $repositorio = $em->getRepository(Partido::class);
        $partido = $repositorio->find($id_partido);


        if ($partido->getResultado())   //EDITAR UN RESULTADO EXISTENTE
        {
            $resultado = $partido->getResultado();
            $form = $this->createForm(ResultadoType::class, $resultado);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('competencia_deportiva_fixture_index', ['id' => $competenciaDeportiva->getId()]);
            }
            return $this->render('competencia_deportiva/fixture/edit.html.twig',
                [
                    'form' => $form->createView(),
                    'partido' => $partido,
                    'resultado' => $resultado,
                    'competencia' => $competenciaDeportiva,
                ]);
        }else{                          //CREAR UN RESULTADO
            $resultado = new Resultado();

            $form = $this->createForm(ResultadoType::class, $resultado);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $partido->addResultado($resultado);
                $em->persist($partido);
                $em->flush();
                return $this->redirectToRoute('competencia_deportiva_fixture_index', ['id' => $competenciaDeportiva->getId()]);

            }
            return $this->render('competencia_deportiva/fixture/new.html.twig',
                [
                    'form' => $form->createView(),
                    'partido' => $partido,
                    'resultado' => $resultado,
                    'competencia' => $competenciaDeportiva,
                ]);
        }


    }
}
