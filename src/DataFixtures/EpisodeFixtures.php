<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $faker = Factory::create('fr_FR');

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season1_Arcane'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season2_Arcane'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season3_Arcane'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season4_Arcane'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season5_Arcane'));
            $manager->persist($episode);
        }
        
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season1_Walking_dead'));
            $manager->persist($episode);
        }
    
        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season2_Walking_dead'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season3_Walking_dead'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season4_Walking_dead'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season5_Walking_dead'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season1_Sherlock'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season2_Sherlock'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season3_Sherlock'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season4_Sherlock'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season5_Sherlock'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season1_The_Punisher'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season2_The_Punisher'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season3_The_Punisher'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season4_The_Punisher'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season5_The_Punisher'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season1_Stranger_Things'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season2_Stranger_Things'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season3_Stranger_Things'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season4_Stranger_Things'));
            $manager->persist($episode);
        }

        for($i = 1; $i < 11; $i++) {
            $episode = new Episode();
            $episode->setTitle($faker->text(100));
            $episode->setNumber($i);
            $episode->setSynopsis($faker->paragraphs(2, true));
            $episode->setSeason($this->getReference('season5_Stranger_Things'));
            $manager->persist($episode);
        }


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