<?php

require_once(__DIR__ . "/Production.php");


class Movie extends Production
{
    public $revenue;
    public $length;

    function __construct(
        $title,
        $language,
        $vote,
        $genres,
        $revenue,
        $length,
    ) {
        parent::__construct(
            $title,
            $language,
            $vote,
            $genres
        );
        $this->revenue = $revenue;
        $this->length = $length;
    }

}