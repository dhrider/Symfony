<?php
// src/OC/PlatformBundle/Event/MessagePostEvent.php

namespace OC\PlatformBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Security\Core\User\UserInterface;

class MessagePostEvent extends Event
{
    protected $message;
    protected $user;

    public function __construct($message, UserInterface $user)
    {
        $this->message = $message;
        $this->user = $user;
    }

    // Le Listener doit avoir accès au message
    public function getMessage()
    {
        return $this->message;
    }

    // Le Listener doit pouvoir modifier le message
    public function setMessage($message)
    {
        return $this->message = $message;
    }

    // Le Listener doit avoir accès à l'utilisateur
    public function getUser()
    {
        return $this->user;
    }

    // Pas de setter, les listeners ne peuvent pas modifier les auteurs
}