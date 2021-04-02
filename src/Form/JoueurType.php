<?php

namespace App\Form;

use App\Entity\Joueur;
use App\Entity\Pays;
use App\Entity\Poste;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class JoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('dateEntree')
            ->add('dateNaissance')
            ->add('Pays', EntityType::class, [
                'class' => Pays::class,
                'label' => 'Pays',
                'choice_label' => 'nom'
            ])
            ->add('Poste', EntityType::class, [
                'class' => Poste::class,
                'label' => 'Poste',
                'choice_label' => 'nom'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Joueur::class,
        ]);
    }
}
