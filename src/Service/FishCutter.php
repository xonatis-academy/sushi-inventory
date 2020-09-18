<?php
namespace App\Service;

use App\Repository\FishRepository;

class FishCutter {
    private $fishRepository;

    function __construct(FishRepository $fishRepository) {
        $this->fishRepository = $fishRepository;
    }

    public function cutFish() {
        $fishes = $this->fishRepository->findAll();
        return $fishes[0].' finement coupé';
    }
}
?>