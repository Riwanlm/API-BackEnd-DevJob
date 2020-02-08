<?php

namespace App\DataFixtures;

use App\Entity\Job;
use App\Entity\Skill;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $php = new Skill();
        $php->setName("PHP");
        $manager->persist($php);

        $html = new Skill();
        $html->setName("HTML");
        $manager->persist($html);

        $css = new Skill();
        $css->setName("CSS");
        $manager->persist($css);

        $mysql = new Skill();
        $mysql->setName("MySQL");
        $manager->persist($mysql);

        $symfony = new Skill();
        $symfony->setName("Symfony");
        $manager->persist($symfony);

        $devFullstack = new Job();
        $devFullstack->setTitle("Développeur web fullstack");
        $devFullstack->setCompany("Klaxoon");
        $devFullstack->setUrl("http://www.indeed.com");
        $devFullstack->setDescription("Lorem ipsum...");
        $devFullstack->addSkill($php)->addSkill($mysql)->addSkill($html)->addSkill($css);
        $manager->persist($devFullstack);

        $devSymfony = new Job();
        $devSymfony->setTitle("Développeur Symfony");
        $devSymfony->setCompany("Samsic");
        $devSymfony->setUrl("http://www.google.fr");
        $devSymfony->addSkill($php)->addSkill($mysql)->addSkill($symfony);
        $manager->persist($devSymfony);

        $manager->flush();
    }
}
