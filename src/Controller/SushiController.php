<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Roller;

class SushiController extends AbstractController
{
    /**
     * @Route("/sushi", name="sushi")
     */
    public function index(Roller $roller)
    {
        /** We cant the roller to return a data like so:
         * $sushi = [
         *   'description' => 'Saumon finement coupé, Algue verte, Rice vinaigré, Carré, Wasabi, Gingembre',
         *   'prix' => 23
         * ];
         */
        
        return $this->render('sushi/index.html.twig', [
            'controller_name' => 'SushiController',
            'resultat' => 'Rien du tout'
        ]);
    }
}
