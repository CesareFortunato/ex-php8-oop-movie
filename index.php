<?php
require_once './classes/movie.php';
require_once './classes/genre.php';
require_once 'db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <style>
        .card-img-top {
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>Movies</title>

        <style>
            /* forza tutte le immagini uguali */
            .card-img-top {
                height: 300px;
                object-fit: cover;
                /* taglia l'immagine senza deformarla */
            }
        </style>
    </head>

    <body>

        <div class="container my-5">
            <h1 class="text-center mb-4">Movies</h1>

            <div class="row g-4">

                <?php foreach ($movies as $movie) { ?>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card h-100 shadow">

                            <img src="<?php echo $movie->poster ?>" class="card-img-top" alt="<?php echo $movie->title ?>">

                            <div class="card-body d-flex flex-column">

                                <h5 class="card-title">
                                    <?php echo $movie->title ?>
                                </h5>

                                <p class="card-text">
                                    Generi:
                                    <?php foreach ($movie->genres as $g) { ?>
                                <?php echo $g->genre ?> (<?php echo $g->subGenre ?>)
                    <?php } ?>
                                </p>
  
                                  <p class="card-text mt-auto">
                                <strong>Voto:</strong> <?php echo $movie->vote ?>
                                </p>
    
                            </div>
                            </div>
                </div>
                <?php } ?>
        
    </div>
    </div>


    
</body>
</html>
</body>

</html>