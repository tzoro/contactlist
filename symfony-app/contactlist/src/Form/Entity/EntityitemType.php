<?php

namespace App\Form\Entity;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntityitemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->setAction('/')
            ->setMethod('POST')
            ->add('FirstName', TextType::class)
            ->add('LastName', TextType::class, [ 'required' => false ])
            ->add('Photo', FileType::class, [ 'required' => false ])
            ->add('Favourite', CheckboxType::class, [ 'required' => false ])
            ->add('save', SubmitType::class, ['label' => 'Save'])
        ;
    }
}