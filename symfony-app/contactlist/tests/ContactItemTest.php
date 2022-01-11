<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Contact;
use \Faker\Factory;

class ContactItemTest extends TestCase
{
    public function testSomething(): void
    {
        $faker = \Faker\Factory::create();

        $contact = new Contact();

        $a = $faker->firstNameMale;
        $b = $faker->lastName;
        $c = $faker->boolean;

        $contact->setFirstName($a);
        $contact->setLastName($b);
        $contact->setFavourite($c);

        $this->assertSame($a, $contact->getFirstName());
        $this->assertSame($b, $contact->getLastName());
        $this->assertSame($c, $contact->getFavourite());
    }
}
