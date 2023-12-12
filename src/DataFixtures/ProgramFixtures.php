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
        $program->setCountry('U.S.A.');
        $program->setYear(2010);
        $program->setCategory($this->getReference('category_Horreur'));
        $this->addReference('program_1', $program);
        $manager->persist($program);
        
        $program = new Program();
        $program->setTitle('Sherlock');
        $program->setSynopsis('Dans cette nouvelle adaptation des fameuses intrigues d Arthur Conan Doyle, l excentrique détective recherche des indices dans les rues de Londres.');
        $program->setCountry('Grande-Bretagne');
        $program->setYear(2010);
        $program->setCategory($this->getReference('category_Aventure'));
        $this->addReference('program_2', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Arcane');
        $program->setSynopsis('Au milieu du conflit entre les villes jumelles de Piltover et Zaun, deux soeurs se battent dans les camps opposés d une guerre entre technologies magiques et convictions incompatibles');
        $program->setCountry('U.S.A.');
        $program->setYear(2021);
        $program->setCategory($this->getReference('category_Animation'));
        $this->addReference('program_3', $program);

        $manager->persist($program);

        $program = new Program();
        $program->setTitle('The Punisher');
        $program->setSynopsis('Après le massacre de toute sa famille, un ex-agent d élite du FBI, que l on disait mort dans le carnage, se lance dans une impitoyable vendetta. Seule la mort de ses ennemis pourra l arrêter.');
        $program->setCountry('U.S.A.');
        $program->setYear(2017);
        $program->setCategory($this->getReference('category_Action'));
        $this->addReference('program_4', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Stranger Things');
        $program->setSynopsis('1983, à Hawkins dans l Indiana. Après la disparition d un garçon de 12 ans dans des circonstances mystérieuses, la petite ville du Midwest est témoin d étranges phénomènes.');
        $program->setCountry('U.S.A.');
        $program->setYear(2016);
        $program->setCategory($this->getReference('category_Fantastique'));
        $this->addReference('program_5', $program);
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