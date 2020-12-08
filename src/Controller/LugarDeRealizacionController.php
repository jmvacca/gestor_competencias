<?php

namespace App\Controller;

use App\Entity\LugarDeRealizacion;
use App\Form\LugarDeRealizacionType;
use App\Repository\LugarDeRealizacionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/lugar")
 */
class LugarDeRealizacionController extends AbstractController
{
    /**
     * @Route("/", name="lugar_de_realizacion_index", methods={"GET"})
     */
    public function index(LugarDeRealizacionRepository $lugarDeRealizacionRepository): Response
    {
        return $this->render('lugar_de_realizacion/index.html.twig', [
            'lugar_de_realizacions' => $lugarDeRealizacionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="lugar_de_realizacion_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $lugarDeRealizacion = new LugarDeRealizacion();
        $form = $this->createForm(LugarDeRealizacionType::class, $lugarDeRealizacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lugarDeRealizacion);
            $entityManager->flush();

            return $this->redirectToRoute('lugar_de_realizacion_index');
        }

        return $this->render('lugar_de_realizacion/show.html.twig', [
            'lugar_de_realizacion' => $lugarDeRealizacion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lugar_de_realizacion_show", methods={"GET"})
     */
    public function show(LugarDeRealizacion $lugarDeRealizacion): Response
    {
        return $this->render('lugar_de_realizacion/show.html.twig', [
            'lugar_de_realizacion' => $lugarDeRealizacion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="lugar_de_realizacion_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, LugarDeRealizacion $lugarDeRealizacion): Response
    {
        $form = $this->createForm(LugarDeRealizacionType::class, $lugarDeRealizacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lugar_de_realizacion_index');
        }

        return $this->render('lugar_de_realizacion/edit.html.twig', [
            'lugar_de_realizacion' => $lugarDeRealizacion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lugar_de_realizacion_delete", methods={"DELETE"})
     */
    public function delete(Request $request, LugarDeRealizacion $lugarDeRealizacion): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lugarDeRealizacion->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($lugarDeRealizacion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('lugar_de_realizacion_index');
    }
}
