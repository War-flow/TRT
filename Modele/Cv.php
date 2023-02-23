<?php

class Cv
{
    public int $id;
    public string $file_name;
    public string $type;
    public string $size;
    

    public function getId(): string

    {
        return $this->id;
    }

    public function getfile(): string

    {
        return $this->file_name;
    }

    public function getType(): string

    {
        return $this->type;
    }

    public function getsize(): string

    {
        return $this->size;
    }
}
