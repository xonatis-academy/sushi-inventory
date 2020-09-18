<?php
namespace App\Service;

class Assembler {
    private $riceCooker;

    function __construct(RiceCooker $riceCooker) {
        $this->riceCooker = $riceCooker;
    }

    public function assemble() {
        $riceAndfish = $this->riceCooker->cookRiceAndAddFish();
        return $riceAndfish.' + Algue verte';
    }
}
?>