<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $episode = new Episode();
        $episode->setTitle('Welcome to the Playground');
        $episode->setNumber(1);
        $episode->setSynopsis('Les sœurs orphelines Vi et Powder causent des remous dans les rues souterraines de Zaun à la suite d un braquage dans le très huppé Piltover.');
        $episode->setSeason($this->getReference('season1_Arcane'));
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('Certains mystères ne devraient jamais être résolus');
        $episode->setNumber(2);
        $episode->setSynopsis('Idéaliste, le chercheur Jayce tente de maîtriser la magie par la science malgré les avertissements de son mentor. Le criminel Silco teste une substance puissante.');
        $episode->setSeason($this->getReference('season1_Arcane'));
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('Cette violence crasse nécessaire au changement');
        $episode->setNumber(3);
        $episode->setSynopsis('Deux anciens rivaux s affrontent lors d un défi spectaculaire qui se révèle fatidique pour Zaun. Jayce et Viktor prennent de gros risques pour leurs recherches.');
        $episode->setSeason($this->getReference('season1_Arcane'));
        $manager->persist($episode);
    
        $manager->flush();
       
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
          SeasonFixtures::class,
        ];
    }
}