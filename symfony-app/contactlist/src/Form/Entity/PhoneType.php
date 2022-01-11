<?php

namespace App\Form\Entity;

use App\Entity\ContactPhone;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PhoneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
      $builder
        ->add('Name', TextType::class, [ 'empty_data' => null ])
        ->add('Label', TextType::class, [ 'required' => false, 'empty_data' => null ])
        ->add('Phone', TextType::class, [ 'empty_data' => null ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
      $resolver->setDefaults([
          'data_class' => ContactPhone::class,
          'recursion' => 10
      ]);
    }
}