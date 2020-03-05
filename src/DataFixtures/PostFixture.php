<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Faker\Factory;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PostFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {

        
        $catTrail = new Category;
        $catTrail->setNom("Trail");
        $catTreck = new Category;
        $catTreck->setNom("Treck");
        $catTVtt = new Category;
        $catTVtt->setNom("Vtt");
        $catA = new Category;
        $catA->setNom("Actu");


        $manager->persist($catTrail);
        $manager->persist($catTreck);
        $manager->persist($catA);
        $manager->persist($catTVtt);


        $faker = Factory::create('fr_FR');
        for ($i = 0; $i < 5; $i++) {
            $post = new Post();
            $post->setTitle($faker->word);
            $post->setSubtitle($faker->word);
            $post->setContent($faker->text($maxNbChars = 800));
            $post->setCreatedAt($faker->dateTimeAD($max = 'now', $timezone = null));
            $post->setCategory($catTrail);
            
            $manager->persist($post);
            

        }
        for ($i = 0; $i < 5; $i++) {
            $postA = new Post();
            $postA->setTitle($faker->word);
            $postA->setSubtitle($faker->word);
            $postA->setContent($faker->text($maxNbChars = 800));
            $postA->setCreatedAt($faker->dateTimeAD($max = 'now', $timezone = null));
            $postA->setCategory($catA);
            
            $manager->persist($postA);
            
        }
        for ($i = 0; $i < 5; $i++) {
            $postB = new Post();
            $postB->setTitle($faker->word);
            $postB->setSubtitle($faker->word);
            $postB->setContent($faker->text($maxNbChars = 800));
            $postB->setCreatedAt($faker->dateTimeAD($max = 'now', $timezone = null));
            $postB->setCategory($catTreck);
            
            $manager->persist($postB);
            
        }
        for ($i = 0; $i < 5; $i++) {
            $postV = new Post();
            $postV->setTitle($faker->word);
            $postV->setSubtitle($faker->word);
            $postV->setContent($faker->text($maxNbChars = 800));
            $postV->setCreatedAt($faker->dateTimeAD($max = 'now', $timezone = null));
            $postV->setCategory($catTVtt);
            
            $manager->persist($postV);
            
        }
        
        
        $manager->flush();
    }
}
