<?php
require_once(__DIR__ . "/Genre.php");

class Production
{
    public $title;
    public $language;
    public $vote;
    public $genres;

    function __construct(
        $title,
        $language,
        $vote,
        $genres
    ) {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genres = $genres;

    }

}