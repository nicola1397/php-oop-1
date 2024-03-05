<?php

require_once(__DIR__ . "/Production.php");


class Tv extends Production
{
    public $seasons;

    function __construct(
        $title,
        $language,
        $vote,
        $genres,
        $seasons
    ) {
        parent::__construct(
            $title,
            $language,
            $vote,
            $genres,
        );
        $this->seasons = $seasons;
    }

}