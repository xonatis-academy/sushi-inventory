<?php
namespace App\Service;

class RiceCooker {
    private $fishCutter;

    function __construct(FishCutter $fishCutter) {
        $this->fishCutter = $fishCutter;
    }

    public function cookRiceAndAddFish() {
        $fish = $this->fishCutter->cutFish();
        return $fish.' + riz vinaigré';
    }
}
?>