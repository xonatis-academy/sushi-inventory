<?php
namespace App\Service;

use App\Repository\FishRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Fish;

class FishCutter {
    private $entityManager;

    function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function cutFish() {
        $fishes = $this->entityManager->getRepository(Fish::class)->findAll();
        $firstFish = $fishes[0];
        return $firstFish->getName().' finement coupé';
    }
}
?>