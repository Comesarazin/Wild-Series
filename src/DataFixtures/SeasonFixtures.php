<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        /* $mesProgram = ['program_Arcane', 'program_Walking_dead', 'program_Sherlock', 'program_The_Punisher', 'program_Stranger_Things']; */


        for ($programNumber = 1; $programNumber <= 5; $programNumber++) {
            for ($seasonNumber = 1; $seasonNumber <= 5; $seasonNumber++) {
                $season = new Season();
                $season->setNumber($seasonNumber);
                $season->setYear($faker->year());
                $season->setDescription($faker->paragraphs(3, true));

                $season->setProgram($this->getReference('program_' . $programNumber ));

                $this->addReference('program_' . $programNumber . 'season_' . $seasonNumber, $season);
                $manager->persist($season);
            }
        }



        /* for($i = 1; $i < 6; $i++) {
            $season = new Season();
            $season->setNumber($i);
            $season->setYear(2021+$i);
            $season->setDescription($faker->paragraphs(2, true));
            $season->setProgram($this->getReference('program_Arcane'));
            
            $this->addReference('season'.$i.'_Arcane', $season);

            $manager->persist($season);
        }

        for($i = 1; $i < 6; $i++) {
            $season = new Season();
            $season->setNumber($i);
            $season->setYear(2010+$i);
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_Walking_dead'));
            
            $this->addReference('season'.$i.'_Walking_dead', $season);

            $manager->persist($season);
        }

        for($i = 1; $i < 6; $i++) {
            $season = new Season();
            $season->setNumber($i);
            $season->setYear(2010+$i);
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_Sherlock'));
            
            $this->addReference('season'.$i.'_Sherlock', $season);

            $manager->persist($season);
        }

        for($i = 1; $i < 6; $i++) {
            $season = new Season();
            $season->setNumber($i);
            $season->setYear(2017+$i);
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_The_Punisher'));
            
            $this->addReference('season'.$i.'_The_Punisher', $season);

            $manager->persist($season);
        }

        for($i = 1; $i < 6; $i++) {
            $season = new Season();
            $season->setNumber($i);
            $season->setYear(2016+$i);
            $season->setDescription($faker->paragraphs(3, true));
            $season->setProgram($this->getReference('program_Stranger_Things'));
            
            $this->addReference('season'.$i.'_Stranger_Things', $season);

            $manager->persist($season);
        } */
/* 
        $season = new Season();
        $season->setNumber(1);
        $season->setYear(2021);
        $season->setDescription('Championnes de leurs villes jumelles et rivales, deux sœurs se battent dans une guerre où font rage des technologies magiques et des perspectives diamétralement opposées.');
        $season->setProgram($this->getReference('program_Arcane'));
        
        $this->addReference('season1_Arcane', $season);

        $manager->persist($season);

        $season = new Season();
        $season->setNumber(2);
        $season->setYear(2023);
        $season->setDescription('Championnes de leurs villes jumelles et rivales, deux sœurs se battent dans une guerre où font rage des technologies magiques et des perspectives diamétralement opposées.');
        $season->setProgram($this->getReference('program_Arcane'));
        
        $this->addReference('season2_Arcane', $season);

        $manager->persist($season); */

        $manager->flush();
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
          ProgramFixtures::class,
        ];
    }
}