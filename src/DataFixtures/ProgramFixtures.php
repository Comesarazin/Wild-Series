<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $program = new Program();
        $program->setTitle('Walking dead');
        $program->setSynopsis('Des zombies envahissent la terre');
        $program->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program);
        
        $program = new Program();
        $program->setTitle('Indiana Jones et le Cadran de la destinée');
        $program->setSynopsis('le fameux cadran d Archimède, une relique qui aurait le pouvoir de localiser les fissures temporelles');
        $program->setCategory($this->getReference('category_Aventure'));
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Dragons');
        $program->setSynopsis('Hiccup est un adolescent viking de l île de Berk, où se battre avec des dragons est un mode de vie');
        $program->setCategory($this->getReference('category_Animation'));
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Mission impossible : Dead Reckoning');
        $program->setSynopsis('Ethan Hunt et l équipe du FMI doivent traquer une nouvelle arme terrifiante qui menace toute l humanité si elle tombe entre de mauvaises mains');
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Shang-Chi et la Légende des Dix Anneaux');
        $program->setSynopsis('Shang-Chi est le fils du chef d une puissante organisation criminelle.');
        $program->setCategory($this->getReference('category_Fantastique'));
        $manager->persist($program);

        $manager->flush();
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
          CategoryFixtures::class,
        ];
    }


}