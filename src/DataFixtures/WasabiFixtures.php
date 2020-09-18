<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Wasabi;
use Faker;

class WasabiFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        $ginger = new Wasabi();
        $ginger->setQuantity($faker->randomNumber($nbDigits = 5))
               ->setSpiciness($faker->randomNumber($nbDigits = 2));
        $manager->persist($ginger);

        $manager->flush();
    }
}
