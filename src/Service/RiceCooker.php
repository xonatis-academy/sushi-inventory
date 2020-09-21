<?php
namespace App\Service;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Rice;

class RiceCooker {
    private $entityManager;

    function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    public function cookRice() {
        $rices = $this->entityManager->getRepository(Rice::class)->findAll();
        $rice = $rices[0];
        return $rice->getName();
    }
}
?>