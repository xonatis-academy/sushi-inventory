<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Ginger;
use Faker;

class GingerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        $ginger = new Ginger();
        $ginger->setQuantity($faker->randomNumber($nbDigits = 5));
        $manager->persist($ginger);

        $manager->flush();
    }
}
