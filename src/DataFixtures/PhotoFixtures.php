<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Photos;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PhotoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 20; $i++) {
            $photos = new Photos();
            $photos->setURL($faker->imageUrl);
        
            $manager->persist($photos);
        }

        $manager->flush();
    }
}
