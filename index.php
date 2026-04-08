<?php

trait HasRating {
    public function getFormattedVote() {
        return $this->vote . "/10";
    }
}

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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>
    <h1>Movies</h1>


    <?php
    $lotr = new Movie(
        "il Signore degli anelli",
        "https://www.ciakclub.it/wp-content/uploads/2023/02/il-signore-degli-anelli-la-compagnia-dell-anello-poster-768x1153.jpg",
        5,
        [new Genre("Fantasy", "Epic")]
    );
    $bladeRunner = new Movie(
        "Blade Runner",
        "https://tse4.mm.bing.net/th/id/OIP.UW5IFNWOtG55kH1mdE4jhwHaLH?rs=1&pid=ImgDetMain&o=7&rm=3",
        5,
        [new Genre("sci-fi", "mistery")]
    );
    ?>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $lotr->poster ?>" class="card-img-top" alt="<?php echo $lotr->title ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $lotr->title ?></h5>
            <p class="card-text">Genere: <?php foreach ($lotr->genres as $g) { ?>
                    <?php echo $g->genre ?> (<?php echo $g->subGenre ?>)
                <?php } ?>
            </p>
            <p class="card-text">Voto: <?php echo $lotr->getFormattedVote() ?></p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $bladeRunner->poster ?>" class="card-img-top" alt="<?php echo $bladeRunner->title ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $bladeRunner->title ?></h5>
            <p class="card-text">Genere: <?php foreach ($bladeRunner->genres as $g) { ?>
                    <?php echo $g->genre ?> (<?php echo $g->subGenre ?>)
                <?php } ?>
            </p>
            <p class="card-text">Voto: <?php echo $bladeRunner->getFormattedVote() ?></p>
        </div>
    </div>
</body>

</html>