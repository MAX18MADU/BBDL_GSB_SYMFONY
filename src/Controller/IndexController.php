<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function Accueil(): Response
    {
        return $this->render('index/Accueil.html.twig');
    }

    public function index(): Response
    {
      $dev = "Matthieu Devillers, Maxence Dupuis, Antony Lambert et Valentin Bulot";
      return $this->render('index/index.html.twig', [
        'webmaster' => $dev,
    ]);
    }

}
