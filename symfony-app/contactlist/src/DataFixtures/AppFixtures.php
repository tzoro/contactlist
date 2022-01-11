<?php
namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\ContactPhone;
use App\Entity\Contact;
use \Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 15; $i++) { 

          $contact = new Contact();
          $contact->setFirstName($faker->firstNameMale);
          $contact->setLastName($faker->lastName);
          $contact->setFavourite($faker->boolean);

          $phone = new ContactPhone();
          $phone->setName($faker->name);
          $phone->setLabel($faker->firstNameMale);
          $phone->setPhone($faker->phoneNumber);

          $contact->addContactPhone($phone);
          $manager->persist($contact);

          $manager->flush();
        }
    }
}
