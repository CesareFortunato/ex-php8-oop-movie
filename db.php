<?php

$movies = [
    new Movie(
        "Il Signore degli Anelli",
        "https://www.ciakclub.it/wp-content/uploads/2023/02/il-signore-degli-anelli-la-compagnia-dell-anello-poster-768x1153.jpg",
        9,
        [
            new Genre("Fantasy", "Epic"),
            new Genre("Avventura", "Heroic")
        ]
    ),

    new Movie(
        "Blade Runner",
        "https://tse4.mm.bing.net/th/id/OIP.UW5IFNWOtG55kH1mdE4jhwHaLH?rs=1&pid=ImgDetMain&o=7&rm=3",
        9,
        [
            new Genre("Sci-fi", "Cyberpunk"),
            new Genre("Thriller", "Mystery")
        ]
    ),

    new Movie(
        "Inception",
        "https://c8.alamy.com/comp/DBW2R3/inception-2010-leonardo-dicaprio-christopher-nolan-dir-016-moviestore-DBW2R3.jpg",
        8,
        [
            new Genre("Sci-fi", "Mind-bending"),
            new Genre("Azione", "Thriller")
        ]
    ),

    new Movie(
        "Il Cavaliere Oscuro",
        "https://tse3.mm.bing.net/th/id/OIP.Pvd4eTsB5Ptx2h3-uZDRlgHaLH?rs=1&pid=ImgDetMain&o=7&rm=3",
        9,
        [
            new Genre("Azione", "Superhero"),
            new Genre("Crime", "Drama")
        ]
    ),

    new Movie(
        "Interstellar",
        "https://tse2.mm.bing.net/th/id/OIP.x0BYF2nRoBmeurBc_ZhQcAHaEK?rs=1&pid=ImgDetMain&o=7&rm=3",
        9,
        [
            new Genre("Sci-fi", "Space"),
            new Genre("Drammatico", "Emotional")
        ]
    ),

    new Movie(
        "Matrix",
        "https://m.media-amazon.com/images/I/51EG732BV3L._AC_.jpg",
        9,
        [
            new Genre("Sci-fi", "Cyberpunk"),
            new Genre("Azione", "Philosophical")
        ]
    ),

    new Movie(
        "Gladiator",
        "https://www.goposter.it/1279-thickbox_default/film-poster-il-gladiatore-russell-crowe-70x100-cm.jpg",
        8,
        [
            new Genre("Storico", "Epic"),
            new Genre("Azione", "Drama")
        ]
    ),

    new Movie(
        "Titanic",
        "https://tse4.mm.bing.net/th/id/OIP.oYxhZo6EoxN_kWGeuRs0CwHaKu?rs=1&pid=ImgDetMain&o=7&rm=3",
        8,
        [
            new Genre("Romantico", "Drama"),
            new Genre("Storico", "Disaster")
        ]
    )
];

?>