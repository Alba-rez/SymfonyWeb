<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CursosController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function inicio(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/detalles", name="pagina_detalles")
     */
    public function detallesCurso(): Response
    {
        return $this->render('detalles_curso.html.twig');
    }

    /**
     * @Route("/matricula", name="pagina_matricula")
     */
    public function matriculaCurso(): Response
    {
        return $this->render('matricula_out.html.twig');
    }

    /**
     * @Route("/login", name="pagina_login")
     */
    public function login(): Response
    {
        return $this->render('login.html.twig');
    }

    // Agrega más rutas según las opciones que tengas en tu HTML
}

