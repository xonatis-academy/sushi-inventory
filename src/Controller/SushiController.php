<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SushiManager;

class SushiController extends AbstractController
{
    /**
     * @Route("/sushi", name="sushi")
     */
    public function index(SushiManager $sushiManager)
    {
        $sushi = $sushiManager->makeSushi();

        return $this->render('sushi/index.html.twig', [
            'controller_name' => 'SushiController',
            'resultat' => $sushi
        ]);
    }
}
