<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/calcul/{a<\d+>}/{b<\d+>}', name: 'app_calcul')]
    public function somme($a, $b): Response
    {

        return $this->render('calcul/some.html.twig', ["a" => $a, "b" => $b, "s" => $a + $b]);
    }
    #[Route('/calcul/sous/{a<\d+>}/{b<\d+>}', name: 'app1_calcul')]
    public function soustraction($a, $b): Response
    {

        return $this->render('calcul/sous.html.twig', ["a" => $a, "b" => $b, "s" => $a - $b]);
    }

    #[Route('/calcul/afficher', name: 'affiche_calc')]
    public function affiche(): Response
    {
        return $this->render('calcul/affich.html.twig');
    }
}
