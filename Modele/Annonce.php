<?php

class Annonce
{
    private int $id;
    private string $title;
    private string $description;
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

    public function getHour(): string

    {
        return $this->hour;
    }

    public function getSalary(): string

    {
        return $this->salary;
    }
}
