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

    public function Modification(): Response
    {
        return $this->render('index/Modification.html.twig');
    }

    public function Ajout(): Response
    {
      return $this->render('index/Ajout.html.twig');
    }

    public function Suppression(): Response
    {
      return $this->render('index/Suppression.html.twig');
    }

    public function Details(): Response
    {
      return $this->render('index/Details.html.twig');
    }

}
