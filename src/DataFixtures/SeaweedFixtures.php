<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Seaweed;
use Faker;

class SeaweedFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $colors = [
            'Red seaweed',
            'Green seaweed',
            'Yellow seaweed',
            'Blue seaweed',
            'Dark seaweed'
        ];

        $faker = Faker\Factory::create('fr_FR');
        foreach($colors as $color) {
            $seaweed = new Seaweed();
            $seaweed->setColor($color)
                 ->setQuantity($faker->randomNumber($nbDigits = 5));
            $manager->persist($seaweed);
        }

        $manager->flush();
    }
}
