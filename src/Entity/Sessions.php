<?php

namespace App\Entity;

use App\Repository\SessionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SessionsRepository::class)]
class Sessions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 128)]
    private $session_id;

    #[ORM\Column(type: 'blob')]
    private $session_data;

    #[ORM\Column(type: 'integer')]
    private $session_lifetime;

    #[ORM\Column(type: 'integer')]
    private $session_time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSessionId(): ?string
    {
        return $this->session_id;
    }

    public function setSessionId(string $session_id): self
    {
        $this->session_id = $session_id;

        return $this;
    }

    public function getSessionData()
    {
        return $this->session_data;
    }

    public function setSessionData($session_data): self
    {
        $this->session_data = $session_data;

        return $this;
    }

    public function getSessionLifetime(): ?int
    {
        return $this->session_lifetime;
    }

    public function setSessionLifetime(int $session_lifetime): self
    {
        $this->session_lifetime = $session_lifetime;

        return $this;
    }

    public function getSessionTime(): ?int
    {
        return $this->session_time;
    }

    public function setSessionTime(int $session_time): self
    {
        $this->session_time = $session_time;

        return $this;
    }
}
