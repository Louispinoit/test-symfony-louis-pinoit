<?php

namespace App\DataFixtures;

use App\Entity\Jeu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
         $jeu = new Jeu();
         $jeu->setNom("Dixit");
         $jeu->setDescription("Le Dixit est un jeu très... étrange.");
         $manager->persist($jeu);

        $jeu = new Jeu();
        $jeu->setNom("Profiler");
        $jeu->setDescription("Un jeu d'ambiance pour toute la famille !");
        $manager->persist($jeu);

        $jeu = new Jeu();
        $jeu->setNom("Mystérium");
        $jeu->setDescription("Un jeu collaboratif où vous devez aider un esprit à trouver son meurtrier.");
        $manager->persist($jeu);

        $manager->flush();
    }
}
