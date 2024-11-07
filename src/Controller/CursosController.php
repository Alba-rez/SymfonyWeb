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
     * @Route("/detalles/{curso_id}", name="pagina_detalles")
     */
    public function detallesCurso(int $curso_id, CursosRepository $cursosRepository): Response
    {
        $titulo = 'Detalles Curso';
        $curso = $cursosRepository->find($curso_id);
        

        if (!$curso) {
            throw $this->createNotFoundException('Curso no encontrado');
        }

        return $this->render('detalles_curso.html.twig', [
            'curso' => $curso, // Pasamos la instancia del curso a la plantilla
            'titulo'=>$titulo,
        ]);
    }

    /**
     * @Route("/matricula/{curso_id}", name="pagina_matricula")
     */
    public function matriculaCurso(int $curso_id, CursosRepository $cursosRepository): Response
    {
        $titulo = 'Matrícula'; 
        $curso = $cursosRepository->find($curso_id);
        
        // Verificar si el curso existe
        if (!$curso) {
            throw $this->createNotFoundException('Curso no encontrado');
        }

        return $this->render('matricula_out.html.twig', [
            'curso' => $curso,
            'titulo' => $titulo, // Pasar el título a la plantilla
        ]);
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
	    $titulo='Perfil Usuario';
        return $this->render('perfil_usuario.html.twig',['titulo'=>$titulo,]);
	}
	
   /**
     * @Route("/login/area_personal", name="pagina_area")
     */
    public function areaPersonal(): Response
    {
        $titulo='Area Personal';
        return $this->render('area_personal.html.twig',['titulo'=>$titulo,]);
    }
        
    
	

    
}



