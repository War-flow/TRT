<?php

class Annonce
{
    private int $id;
    private string $title;
    private string $description;
    private string $country;
    private string $contrat;
    private string $hour;
    private string $salary;



    public function getId(): string

    {
        return $this->id;
    }

    public function getTitle(): string

    {
        return $this->title;
    }
    
    public function getDescription(): string

    {
        return $this->description;
    }

    public function getCountry(): string

    {
        return $this->country;
    }

    public function getContrat(): string

    {
        return $this->contrat;
    }


    public function getHour(): string

    {
        return $this->hour;
    }

    public function getSalary(): string

    {
        return $this->salary;
    }
}
