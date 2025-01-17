<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JeuAdminController extends AbstractController
{
    #[Route('/admin/jeu', name: 'app_jeu_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
    }
}