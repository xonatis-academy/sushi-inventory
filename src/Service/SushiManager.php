<?php
namespace App\Service;

class SushiManager {
    private $fishCutter;
    private $riceCooker;
    private $assembler;
    private $dresser;
    private $roller;
    private $picker;

    function __construct(FishCutter $fishCutter, RiceCooker $riceCooker, Assembler $assembler, Dresser $dresser, Picker $picker, Roller $roller) {
        $this->fishCutter = $fishCutter;
        $this->riceCooker = $riceCooker;
        $this->assembler = $assembler;
        $this->dresser = $dresser;
        $this->roller = $roller;
        $this->picker = $picker;
    }

    public function makeSushi() {
        $fishCut = $this->fishCutter->cutFish();
        $cookedRice = $this->riceCooker->cookRice();
        $assembled = $this->assembler->assemble($fishCut, $cookedRice);
        $dressed = $this->dresser->dress($assembled);
        $picked = $this->picker->pick($dressed);
        $rolled = $this->roller->roll($picked);
        return $rolled;
    }
}
?>