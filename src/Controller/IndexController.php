<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 * @package App\Controller
 * @Route("/")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="menu")
     */
    public function menuPrincipal()
    {
        return $this->render('menu_principal/index.html.twig');
    }
}