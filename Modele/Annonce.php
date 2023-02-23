<?php

class Annonce
{
    private int $id;
    private string $title;
    private string $adresse;
    private string $description;
    private string $start;
    private string $end;
    private string $salary;
    private string $contract;
    private string $cv;

    public function getId(): string

    {
        return $this->id;
    }

    public function getTitle(): string

    {
        return $this->title;
    }

    public function getAdresse(): string

    {
        return $this->adresse;
    }
    public function getDescription(): string

    {
        return $this->description;
    }

    public function getStart(): string

    {
        return $this->start;
    }

    public function getEnd(): string

    {
        return $this->end;
    }

    public function getSalary(): string

    {
        return $this->salary;
    }
    public function getContract(): string

    {
        return $this->contract;
    }
    public function getCv(): string

    {
        return $this->cv;
    }
}
