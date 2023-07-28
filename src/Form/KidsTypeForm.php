<?php

namespace App\Form;

use App\Entity\Kids;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class KidsTypeForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr' => [
                   'class' => 'form-control']
            ])
            ->add('prenom', TextType::class, [
                'attr' => [
                   'class' => 'form-control']
            ])
            ->add('adresse', TextType::class, [
                'attr' => [
                   'class' => 'form-control']
            ])
            ->add('zipcode', TextType::class, [
                'attr' => [
                   'class' => 'form-control']
            ])
            ->add('ville', TextType::class, [
                'attr' => [
                   'class' => 'form-control']
            ])
            
            ->add('telephone', TextType::class, [
                'attr' => [
                   'class' => 'form-control']
            ])
            ->add('date_de_naissance', DateType::class, [
                'format' => 'dd-MM-yyyy',
                'years' => range(date('Y') - 90, date('Y')),
                'attr' => [
                   'class' => 'pt-1 '],
                   'label' => 'Date de naissance'
            ])
            ->add('lieu_de_naissance', TextType::class, [
                'attr' => [
                   'class' => 'form-control']
            ])
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary'
                ],
                'label' => 'Ajouter'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Kids::class,
        ]);
    }
}
