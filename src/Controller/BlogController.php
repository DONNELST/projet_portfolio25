<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/competence', name: 'app_competence',)]
    public function competence(): Response 
    {
        return $this->render('blog/competence.html.twig', [ 
            'title' => 'Bienvenue']);
    }
    #[Route('/blog/experience', name: 'app_experience',)] 
    public function experience(): Response 
    {
        return $this->render('blog/experience.html.twig', [ 
            'title' => 'Bienvenue']);
    }
    #[Route('/blog/aboutme', name: 'app_aboutme',)]
    public function aboutme(): Response 
    {
        return $this->render('blog/aboutme.html.twig', [ 
            'title' => 'Bienvenue']);
        
    }
        #[Route('/blog/formulaire', name: 'app_formulaire',)]
    public function formulaire(): Response 
    {

        return $this->render('blog/formulaire.html.twig', [ 
            'title' => 'Bienvenue']);
        
    }
        #[Route('/blog/formation', name: 'app_formation',)]
    public function formation(): Response 
    {

        return $this->render('blog/formation.html.twig', [ 
            'title' => 'Bienvenue']);
        
    }
}
