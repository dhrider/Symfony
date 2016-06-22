<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadAdvert.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;

class LoadAdvert implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $adverts = array(
            array(
                "title" => "Cherche Web Designer",
                "author" => "Web Desing Inc",
                "content" => "On a besoin d'un désigner Web",
                "nb_applications" => 0,
                "updated_at" => date_add(new \DateTime(),new \DateInterval('P4D'))
            ),
            array(
                "title" => "Cherche Chef de projet multimédia",
                "author" => "OpenClassrooms",
                "content" => "On a besoin d'chef de projet",
                "nb_applications" => 0,
                "updated_at" => date_add(new \DateTime(),new \DateInterval('P5D'))
            ),
            array(
                "title" => "Cherche Intégrateur",
                "author" => "OpenClassrooms",
                "content" => "On a besoin d'un Intégrateur",
                "nb_applications" => 1,
                "updated_at" => date_add(new \DateTime(),new \DateInterval('P11D'))
            ),
            array(
                "title" => "Cherche développeur Php",
                "author" => "OpenClassrooms",
                "content" => "On a besoin d'un développeur Php",
                "nb_applications" => 1,
                "updated_at" => date_add(new \DateTime(),new \DateInterval('P12D'))
            ),
            array(
                "title" => "Cherche développeur/analyste",
                "author" => "OpenClassrooms",
                "content" => "On a besoin d'un développeur/analyste",
                "nb_applications" => 0,
                "updated_at" => date_add(new \DateTime(),new \DateInterval('P11D'))
            )
        );

        foreach ($adverts as $advert)
        {
            $adv = new Advert();
            $adv->setImage(null);
            $adv->setTitle($advert["title"]);
            $adv->setAuthor($advert["author"]);
            $adv->setContent($advert["content"]);
            $adv->setNbApplications($advert["nb_applications"]);
            $adv->setUpdatedAt($advert["updated_at"]);
            $manager->persist($adv);
        }

        $manager->flush();
    }
}