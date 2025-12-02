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
    #[Route('/blog/competence2', name: 'app_competence2',)]
    public function competence2(): Response 
    {
        return $this->render('blog/competence2.html.twig', [ 
            'title' => 'Bienvenue']);
    }
}
