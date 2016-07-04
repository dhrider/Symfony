<?php
// src/OC/PlatformBundle/Beta/BetaListener.php

namespace OC\PlatformBundle\Beta;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class BetaListener
{
    // Notre processeur
    protected $betaHTML;

    // La date de fin de la version béta :
    // Avant cette date, on affichera un compte à rebours (J-3 par exemple)
    // Après cette date, on n'affichera plus le "bêta"
    protected $endDate;

    public function __construct(BetaHTMLAdder $betaHTML, $endDate)
    {
        $this->betaHTML = $betaHTML;
        $this->endDate = new \DateTime($endDate);
    }

    public function processBeta(FilterResponseEvent $event)
    {
        if (!$event->isMasterRequest()){
            return;
        }

        $remainingDays = $this->endDate->diff(new \DateTime())->days;

        if ($remainingDays <= 0){
            // Si la date est dépassée, on ne fait rien
            return;
        }

        // On utilise notre BetaHTML
        $response = $this->betaHTML->addBeta($event->getResponse(), $remainingDays);

        // On met à jour la réponse avec la nouvelle valeur
        $event->setResponse($response);
    }
}