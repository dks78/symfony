<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Migrations\Exception\DependencyException;
use Doctrine\Persistence\ObjectManager;
;

class ProductFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $travels = new Product();
        $travels->setTitle('bordurer');
        $manager->persist($travels);

        $bordel = new Product();
        $bordel->setTitle('marvel');
        $manager->persist($bordel);
        $bordel->setCategory($this->getReference('Livre'));

        $jouet = new Product();
        $jouet->setTitle('magnificance');
        $manager->persist($jouet);

        $marina = new Product();
        $marina->setTitle('magistrat');
        $manager->persist($marina);

        $manager->flush();
    }

    public function getDependencies():array
    {
        return [
            CategoryFixtures::class
        ];
    } 

}

