<?php


trait HasRating
{
    public function getFormattedVote()
    {
        return $this->vote . "/10";
    }
}
class Movie
{
    use HasRating;
    public $title;
    public $poster;

    public $vote;
    public $genres;

    function __construct($_title, $_poster, $_vote, array $_genres)
    {
        $this->vote = $_vote;
        $this->poster = $_poster;
        $this->title = $_title;
        $this->genres = $_genres;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

?>