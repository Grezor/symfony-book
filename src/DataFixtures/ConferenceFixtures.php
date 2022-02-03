<?php 

namespace App\DataFixtures;

use DateTime;
use App\Entity\Comment;
use App\Entity\Conference;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ConferenceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $amsterdam = new Conference();
        $amsterdam->setCity('Amsterdam');
        $amsterdam->setYear('2019');
        $amsterdam->setIsInternational(true);
        $manager->persist($amsterdam);

        $lille = new Conference();
        $lille->setCity('Lille');
        $lille->setYear('2019');
        $lille->setIsInternational(true);
        $manager->persist($lille);

        $paris = new Conference();
        $paris->setCity('Paris');
        $paris->setYear('2020');
        $paris->setIsInternational(false);
        $manager->persist($paris);

        $date = new DateTime();
        $comment1 = new Comment();
        $comment1->setConference($amsterdam);
        $comment1->setAuthor('Fabien');
        $comment1->setEmail('fabien@example.com');
        $comment1->setText('This was a great conference.');
        $comment1->setCreatedAt($date);
        $manager->persist($comment1);

        $comment2 = new Comment();
        $comment2->setConference($lille);
        $comment2->setAuthor('Paul');
        $comment2->setEmail('paul@example.com');
        $comment2->setText('This was a great conference.');
        $comment2->setCreatedAt($date);
        $manager->persist($comment2);
        
        $manager->flush();
    }
}
