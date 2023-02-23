<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/sortie", name="app_sortie_")
 */
class SortieController extends AbstractController
{
    /**
     * @Route("/", name="create")
     */
    public function createSortie(): Response
    {
        return $this->render('sortie/create.html.twig', [
            'controller_name' => 'SortieController',
        ]);
    }
    /**
     * @Route("/", name="afficher")
     */
    public function afficherSortie(): Response
    {
        return $this->render('sortie/afficher.html.twig', [
            'controller_name' => 'SortieController',
        ]);
    }
    /**
     * @Route("/", name="annuler")
     */
    public function annulerSortie(): Response
    {
        return $this->render('sortie/annuler.html.twig', [
            'controller_name' => 'SortieController',
        ]);
    }


}