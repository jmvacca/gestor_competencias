<?php

namespace App\Controller;

use App\Entity\CompetenciaDeportiva;
use App\Form\CompetenciaDeportivaType;
use App\Repository\CompetenciaDeportivaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/competencia/deportiva")
 */
class CompetenciaDeportivaController extends AbstractController
{
    /**
     * @Route("/", name="competencia_deportiva_index", methods={"GET"})
     */
    public function index(CompetenciaDeportivaRepository $competenciaDeportivaRepository): Response
    {
        return $this->render('competencia_deportiva/index.html.twig', [
            'competencia_deportivas' => $competenciaDeportivaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="competencia_deportiva_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $competenciaDeportiva = new CompetenciaDeportiva();
        $form = $this->createForm(CompetenciaDeportivaType::class, $competenciaDeportiva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($competenciaDeportiva);
            $entityManager->flush();

            return $this->redirectToRoute('competencia_deportiva_index');
        }

        return $this->render('competencia_deportiva/new.html.twig', [
            'competencia_deportiva' => $competenciaDeportiva,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="competencia_deportiva_show", methods={"GET"})
     */
    public function show(CompetenciaDeportiva $competenciaDeportiva): Response
    {
        return $this->render('competencia_deportiva/show.html.twig', [
            'competencia_deportiva' => $competenciaDeportiva,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="competencia_deportiva_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CompetenciaDeportiva $competenciaDeportiva): Response
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
    public function delete(Request $request, CompetenciaDeportiva $competenciaDeportiva): Response
    {
        if ($this->isCsrfTokenValid('delete'.$competenciaDeportiva->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($competenciaDeportiva);
            $entityManager->flush();
        }

        return $this->redirectToRoute('competencia_deportiva_index');
    }
}
