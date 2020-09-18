<?php
namespace App\Service;

class Dresser {
    private $assembler;

    function __construct(Assembler $assembler) {
        $this->assembler = $assembler;
    }

    public function dress() {
        $sushiBase = $this->assembler->assemble();
        return $sushiBase.' + Gingembre et du Wasabi';
    }
}
?>