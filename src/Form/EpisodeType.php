<?php

namespace App\Form;

use App\Entity\Episode;
use App\Entity\Program; 
use App\Entity\Season; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EpisodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('number')
            ->add('synopsis')
            ->add('season', null, ['choice_label' => function ($season) {
                return $season->getProgram()->getTitle() . ' - Season ' . $season->getNumber();}])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Episode::class,
        ]);
    }
}
