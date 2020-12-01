<?php

namespace App\Controller;

use App\Entity\Disponibilidad;
use App\Form\DisponibilidadType;
use App\Repository\DisponibilidadRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/disponibilidad")
 */
class DisponibilidadController extends AbstractController
{
    /**
     * @Route("/", name="disponibilidad_index", methods={"GET"})
     */
    public function index(DisponibilidadRepository $disponibilidadRepository): Response
    {
        return $this->render('disponibilidad/index.html.twig', [
            'disponibilidads' => $disponibilidadRepository->findAll(),

        ]);
    }

    /**
     * @Route("/new", name="disponibilidad_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $disponibilidad = new Disponibilidad();
        $form = $this->createForm(DisponibilidadType::class, $disponibilidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($disponibilidad);
            $entityManager->flush();

            return $this->redirectToRoute('disponibilidad_index');
        }

        return $this->render('disponibilidad/new.html.twig', [
            'disponibilidad' => $disponibilidad,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="disponibilidad_show", methods={"GET"})
     */
    public function show(Disponibilidad $disponibilidad): Response
    {
        return $this->render('disponibilidad/show.html.twig', [
            'disponibilidad' => $disponibilidad,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="disponibilidad_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Disponibilidad $disponibilidad): Response
    {
        $form = $this->createForm(DisponibilidadType::class, $disponibilidad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('disponibilidad_index');
        }

        return $this->render('disponibilidad/edit.html.twig', [
            'disponibilidad' => $disponibilidad,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="disponibilidad_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Disponibilidad $disponibilidad): Response
    {
        if ($this->isCsrfTokenValid('delete'.$disponibilidad->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($disponibilidad);
            $entityManager->flush();
        }

        return $this->redirectToRoute('disponibilidad_index');
    }
}
