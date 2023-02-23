<?php

class Recru
{
    public int $id;
    public string $mail;
    public string $password;
    public string $company;
    public string $adresse;
    public string $role;
    public string $annonce;

    public function getId(): string

    {
        return $this->id;
    }

    public function getMail(): string

    {
        return $this->mail;
    }

    public function getpassword(): string

    {
        return $this->password;
    }

    public function getCompany(): string

    {
        return $this->company;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

    public function getRole(): string

    {
        return $this->role;
    }

    public function getAnnonce(): string

    {
        return $this->annonce;
    }
}
