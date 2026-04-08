<?php

class Genre {
    public $genre;
    public $subGenre;
    public function __construct($_genre, $_subGenre){
        $this->genre = $_genre;
        $this->subGenre = $_subGenre;
    }
}

class Movie
{
    public $title;
    public $poster;

    public $vote;
    public $genre;

    function __construct($_title, $_poster, $_vote, Genre $_genre)
    {
        $this->vote = $_vote;
        $this->poster = $_poster;
        $this->title = $_title;
        $this->genre = $_genre;
    }

    public function getTitle(){
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
    $lotr = new Movie("il Signore degli anelli", "https://www.ciakclub.it/wp-content/uploads/2023/02/il-signore-degli-anelli-la-compagnia-dell-anello-poster-768x1153.jpg", 5, new Genre("Fantasy", "Epic"));
    $bladeRunner = new Movie("Blade Runner", "https://tse4.mm.bing.net/th/id/OIP.UW5IFNWOtG55kH1mdE4jhwHaLH?rs=1&pid=ImgDetMain&o=7&rm=3", 5, new Genre("sci-fi", "mistery"));
    ?>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $lotr->poster ?>" class="card-img-top" alt="<?php echo $lotr->title ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $lotr->title ?></h5>
            <p class="card-text">Genere: <?php echo $lotr->genre->genre ?> / <?php echo $lotr->genre->subGenre ?></p>
            <p class="card-text">Voto: <?php echo $lotr->vote ?></p>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $bladeRunner->poster ?>" class="card-img-top" alt="<?php echo $bladeRunner->title ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $bladeRunner->title ?></h5>
            <p class="card-text">Genere: <?php echo $bladeRunner->genre->genre ?> / <?php echo $bladeRunner->genre->subGenre ?></p>
            <p class="card-text">Voto: <?php echo $bladeRunner->vote ?></p>
        </div>
    </div>
</body>

</html>