<?php
class Genre
{
    public $genre;
    public $subGenre;
    public function __construct($_genre, $_subGenre)
    {
        $this->genre = $_genre;
        $this->subGenre = $_subGenre;
    }
}

?>