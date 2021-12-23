<?php

namespace App\Form\Entity;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use App\Entity\Contact;

class EntityitemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

      $FirstName = NULL;
      $LastName = NULL;
      $Photo = NULL;
      $Favourite = false;

      if(isset($options['data'])
        && $options['data']->getId() > 0) {

        $builder->setAction('/update/' . $options['data']->getId());

        $FirstName = $options['data']->getFirstName();
        $LastName = $options['data']->getLastName();
        $Photo = $options['data']->getPhoto();
        $Favourite = $options['data']->getFavourite();
      } else {
        $builder->setAction('/');
      }

      $builder
        ->setMethod('POST')
        ->add('FirstName', TextType::class, [ 'empty_data' => $FirstName ])
        ->add('LastName', TextType::class, [ 'required' => false, 'empty_data' => $LastName ])
        ->add('Photo', FileType::class, [ 'required' => false, 'empty_data' => $Photo ])
        ->add('Favourite', CheckboxType::class, [ 'required' => false, 'empty_data' => $Favourite ])
        ->add('save', SubmitType::class, ['label' => 'Save']);
    }
}