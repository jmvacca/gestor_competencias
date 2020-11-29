<?php

namespace App\Controller;

use App\Entity\Participante;
use App\Form\ParticipanteType;
use App\Repository\ParticipanteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * @Route("/participante")
 */
class ParticipanteController extends AbstractController
{
    /**
     * @Route("/", name="participante_index", methods={"GET"})
     */
    public function index(ParticipanteRepository $participanteRepository)
    {
        return $this->render('participante/index.html.twig', [
            'participantes' => $participanteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="participante_new", methods={"GET","POST"})
     */
    public function new(Request $request)
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
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($participante);
            $entityManager->flush();

            return $this->redirectToRoute('participante_index');
        }

        return $this->render('participante/new.html.twig', [
            'participante' => $participante,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="participante_show", methods={"GET"})
     */
    public function show(Participante $participante)
    {
        return $this->render('participante/show.html.twig', [
            'participante' => $participante,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="participante_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Participante $participante)
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
     * @Route("/{id}", name="participante_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Participante $participante)
    {
        if ($this->isCsrfTokenValid('delete'.$participante->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($participante);
            $entityManager->flush();
        }

        return $this->redirectToRoute('participante_index');
    }
}
