<?php

namespace App\Controller;

use App\Entity\Jeu;
use App\Repository\JeuRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(JeuRepository $jeuRepository): Response
    {
        $jeux = $jeuRepository->findAll();

        return $this->render('main/index.html.twig', [
            'jeux' => $jeux,
        ]);
    }

    #[Route('/jeu/{id}', name: 'app_jeu_detail')]
    public function jeux(Jeu $jeu): Response
    {

       
        return $this->render('main/game.html.twig', [
            'jeu' => $jeu,
        ]);
    }
}
