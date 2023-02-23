<?php

class Candidats
{
    public int $id;
    public string $mail;
    public string $password;
    public string $firstname;
    public string $lastname;
    public string $role;
    public string $cv;
    public string $validation;

    public function getId(): string

    {
        return $this->id;
    }

    public function getMail(): string

    {
        return $this->mail;
    }

    public function getPassword(): string

    {
        return $this->password;
    }

    public function getFirstname(): string

    {
        return $this->firstname;
    }

    public function getLastname(): string

    {
        return $this->lastname;
    }

    public function getRole(): string

    {
        return $this->role;
    }

    public function getCv(): string

    {
        return $this->cv;
    }

    public function getValidation(): string

    {
        return $this->validation;
    }
}
