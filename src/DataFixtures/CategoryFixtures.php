<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $travels = new Category();
        $travels->setName('bordel');
        $manager->persist($travels);

        $bordel = new Category();
        $bordel->setName('marvel');
        $manager->persist($bordel);
        $this->addReference('Livre',$bordel);
        
        $jouet = new Category();
        $jouet->setName('mamazerzer');
        $manager->persist($jouet);

        $marina = new Category();
        $marina->setName('forniteBoost');
        $manager->persist($marina);
        $manager->flush();

        

    }
}
