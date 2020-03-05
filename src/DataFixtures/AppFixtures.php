<?php

namespace App\DataFixtures;

use App\Entity\AdherentStatus;
use Faker\Factory;
use App\Entity\Post;
use App\Entity\UserCat;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $catTrail = new UserCat;
        $catTrail->setName("Trail");
        $catTreck = new UserCat;
        $catTreck->setName("Treck");
        $catTVtt = new UserCat;
        $catTVtt->setName("Vtt");
        

        $manager->persist($catTrail);
        $manager->persist($catTreck);
        $manager->persist($catTVtt);

        $stat0 = new AdherentStatus;
        $stat0 ->setStatus(true);

        $stat1 = new AdherentStatus;
        $stat1 ->setStatus(false);

        $manager->persist($stat0);
        $manager->persist($stat1);


        for($i=0 ; $i<15 ; $i++){
            $faker = Factory::create('fr_FR');
                $user = new Users;
                $user->setNom($faker->lastName);
                $user->setPrenom($faker->firstName);
                $user->setAdresse($faker->streetName);
                $user->setCp($faker->unixTime);
                $user->setVille($faker->city);
                $user->setPseudo($faker->lastName);
                $user->setPassword($faker->password);
                $user->setMail($faker->email);
                $user->setPhone($faker->unixTime);
                $user->setStatus($stat0);
                
                $manager->persist($user);

        }

        for($i=0 ; $i<10 ; $i++){
            $faker = Factory::create('fr_FR');
                $userA = new Users;
                $userA->setNom($faker->lastName);
                $userA->setPrenom($faker->firstName);
                $userA->setAdresse($faker->streetName);
                $userA->setCp($faker->unixTime);
                $userA->setVille($faker->city);
                $userA->setPseudo($faker->lastName);
                $userA->setPassword($faker->password);
                $userA->setMail($faker->email);
                $userA->setPhone($faker->unixTime);
                $userA->setStatus($stat1);
                
                $manager->persist($userA);

        }


        $manager->flush();
    }
}
