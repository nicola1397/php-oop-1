<?php

class Genre
{
    public $name;
    public $description;
    function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

}

