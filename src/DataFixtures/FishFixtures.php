<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Fish;
use Faker;

class FishFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $names = [
            'Mackerel',
            'Tuna',
            'Yellowtail',
            'Snapper',
            'Salmon'
        ];

        $faker = Faker\Factory::create('fr_FR');
        foreach($names as $key => $name) {
            $fish = new Fish();
            $fish->setName($name)
                 ->setFat($key)
                 ->setQuantity($faker->randomNumber($nbDigits = 5));
            $manager->persist($fish);
        }

        $manager->flush();
    }
}
