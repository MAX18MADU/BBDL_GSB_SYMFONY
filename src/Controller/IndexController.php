<?php

namespace App\Controller;

use App\Entity\Medicament;
use App\Repository\ExcipientRepository;
use App\Repository\FormeRepository;
use App\Repository\LaboratoireRepository;
use App\Repository\MedicamentRepository;
use App\Repository\MoleculeRepository;
use App\Repository\RoleRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    
    public function __construct(MedicamentRepository $Medicament, ExcipientRepository $Excipient, FormeRepository $Forme, LaboratoireRepository $Laboratoire, MoleculeRepository $Molecule, RoleRepository $Role, UtilisateurRepository $Utilisateur)
    {
      $this->Medicament = $Medicament;
      $this->Excipient = $Excipient;
      $this->Forme = $Forme;
      $this->Laboratoire = $Laboratoire;
      $this->Molecule = $Molecule;
      $this->Role = $Role;
      $this->Utilisateur = $Utilisateur;
    }
  /**
     * @Route("/index", name="index")
     */
    public function Accueil(): Response
    {
        $medicaments = $this->Medicament->findALl();
        dump($medicaments);
        return $this->render('index/Accueil.html.twig', ['medicaments'=> $medicaments]);
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

    
    public function Detail($CIP): Response
    {
        $medicament = $this->Medicament->find($CIP);
        dump($medicament);
        return $this->render('index/Detail.html.twig', ['medicament'=> $medicament]);
    }

    public function AffichageExcipient($CIP): Response
    {
        $excipient = $this->Excipient->findBy($CIP);
        return dump($excipient);
    }
}
