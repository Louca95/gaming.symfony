<?php

namespace App\DataFixtures;

use App\Entity\Hero;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $heroes = [
            ['Bruce Wayne', 100,20,10,'batman.jpg','Batman'],
            ['Clark Kent', 150,30,10,'superman.jpg', 'Superman'],
            ['Diana Prince', 120,25,15,'wonderwoman.jpg', 'Wonderwoman'],
        ];
        foreach ($heroes as [$nom, $health, $attack, $defense, $image, $alias]){
            $hero = new Hero();
            $hero->setNom($nom);
            $hero->setHealth($health);
            $hero->setAttack($attack);
            $hero->setDefense($defense);
            $hero->setImage('/images/heroes/'. $image);
            $hero->setAlias($alias);
            $manager->persist($hero);
        }
        $manager->flush();
    }
}
