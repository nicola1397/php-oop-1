<?php

class Production
{
    public $title;
    public $language;
    public $vote;

    function __construct(
        string $title,
        string $language,
        int $vote
    ) {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }

}