<?php

namespace App\Controller;

use App\Repository\CursosRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CursosController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    /*public function inicio(): Response
    {
        return $this->render('home/index.html.twig');
    }*/

    public function cursosDisponibles(CursosRepository $cursosRepository): Response
    {
        $cursos = $cursosRepository->findAll(); // Esto recupera todos los cursos de la base de datos
        return $this->render('home/index.html.twig', [
            'cursos' => $cursos, // Aquí pasamos la lista de cursos a la plantilla
        ]);
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
    
	/**
	 * @Route("/area_personal/perfil_usuario", name="pagina_perfil")
	 */
	public function perfil(): Response
	{
	    return $this->render('perfil_usuario.html.twig');
	}
	
   /**
     * @Route("/login/area_personal", name="pagina_area")
     */
    public function areaPersonal(): Response
    {
        return $this->render('area_personal.html.twig');
    }
        
    
	

    
}



