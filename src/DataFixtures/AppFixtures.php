<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Factory::create('fr_FR'); // pb ?

        for($i = 1 ; $i <=5 ; $i++){
            $post = new Post();
            $post->setTitle($faker->sentence())
                ->setSubtitle($faker->sentence())
                ->setContent($faker->paragraph())
                ->setCreatedAt($faker->dateTimeAD($max = 'now', $timezone = null));

                $manager->persist($post);

        }
        $manager->flush();
    }
}
