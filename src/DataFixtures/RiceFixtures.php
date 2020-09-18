<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Rice;
use Faker;

class RiceFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $names = [
            'Rice with vinegar',
            'Plain rice',
            'Basmati rice',
            'Sticky rice'
        ];

        $faker = Faker\Factory::create('fr_FR');
        foreach($names as $name) {
            $rice = new Rice();
            $rice->setName($name)
                 ->setQuantity($faker->randomNumber($nbDigits = 5));
            $manager->persist($rice);
        }

        $manager->flush();
    }
}
