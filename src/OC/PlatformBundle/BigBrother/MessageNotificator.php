<?php
// src/OC/PlatformBundle/BigBrother/MessageNotificator.php

namespace OC\PlatformBundle\BigBrother;

use OC\UserBundle\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;

class MessageNotificator
{
    protected $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    // Méthode pour notifier pas email un administrateur
    public function notifyByEmail($message, UserInterface $user)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject("Nouveau message d'un utilisateur surveillé")
            ->setFrom('admin@monsite.com')
            ->setTo('p_bordmann@orange.fr')
            ->setBody("L'utilisateur surveillé '".$user->getUsername()."' a posté le message suivent : '".$message."'");

        $this->mailer->send($message);
    }
}