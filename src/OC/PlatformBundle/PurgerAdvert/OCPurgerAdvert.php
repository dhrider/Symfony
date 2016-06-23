<?php
// src/OC/PlatformBundle/PurgerAdvert/OCPurgerAdvert.php

namespace OC\PlatformBundle\PurgerAdvert;

use Doctrine\ORM\EntityManager;

class OCPurgerAdvert
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function purgerAdvert($days)
    {
        // on récupère le résultat de la fonction dans le repository
        $results = $this->em->getRepository('OCPlatformBundle:Advert')
                            ->getAdvertsToPurge($days)
        ;
        
        return $results;
    }
}