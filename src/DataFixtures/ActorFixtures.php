<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for ($i = 1; $i <= 10; $i++) {
            $actor = new Actor();
            $actor->setName($faker->userName);

            // Ajouter aléatoirement 3 programmes à chaque acteur
            $programReferences = $this->getRandomProgramReferences(3);
            foreach ($programReferences as $programReference) {
                $actor->addProgram($programReference);
            }

            $manager->persist($actor);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            ProgramFixtures::class,
        ];
    }

    private function getRandomProgramReferences($count)
    {
        $programReferences = [];
        $programFixtureCount = 5; // Supposons que vous ayez 5 fixtures de programmes

        for ($i = 0; $i < $count; $i++) {
            // Générer un numéro de programme aléatoire entre 1 et le nombre total de fixtures de programmes
            $randomProgramNumber = mt_rand(1, $programFixtureCount);
            $programReferences[] = $this->getReference('program_' . $randomProgramNumber);
        }

        return $programReferences;
    }
}
