<?php
$movies = [
    [
        'movie_img' => 'https://upload.wikimedia.org/wikipedia/en/4/4d/Avengers_Infinity_War_poster.jpg',
        'movie_title' => 'Avengers Saga',
        'movie_director' => 'Anthony and Joe Russo',
        'movie_genres' => ['Action', 'Drama', 'Fantasy'],
        'main_actors' => ['Robert Downey Jr', ' Chris Evans', ' Scarlett Johansson'],
        'movie_date' => '2012'
    ],
    [
        'movie_img' => 'https://cdn.hmv.com/r/w-1280/hmv/files/35/358d9ebd-3be4-4ef3-a412-9c0cbfc626e3.jpg',
        'movie_title' => 'Lord of the Rings Saga',
        'movie_director' => 'Peter Jackson',
        'movie_genres' => ['Action', 'Drama', 'Fantasy'],
        'main_actors' => ['Orlando Bloom', 'Liv Tyler', 'John Rhys-Davies'],
        'movie_date' => '2001'
    ],
    [
        'movie_img' => 'https://play-lh.googleusercontent.com/xo2HfLoAszntYndTjrUhZXqa7xCmeSkSXxcsPPeQx3-cRrzYSGmbjSwKO2F7o-RWuJhy',
        'movie_title' => 'Harry Potter Saga',
        'movie_director' => 'David Heyman',
        'movie_genres' => ['Drama', 'Fantasy', 'Family'],
        'main_actors' => ['Daniel Radcliffe', 'Rupert Grint', 'Emma Watson'],
        'movie_date' => '2003'
    ]
];
function list_movie_by_year($array, $year)
{
    $movies_from = [];
    foreach ($array as $movie) {
        if ($movie['movie_date'] > $year) {
            $movies_from[] = $movie;
        }
    }
    return $movies_from;
}

$movies_from = list_movie_by_year($movies, 2005);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<section>
    <?php foreach ($movies as $movie): ?>
        <article>
            <h1><?php print $movie['movie_title'] ?></h1>
            <h3>Written by: <?php print $movie['movie_director'] ?></h3>
            <img src="<?php print $movie['movie_img'] ?>">
            <h3>Movie genres: <?php print implode(', ', $movie['movie_genres']) ?></h3>
            <h3>Main Actors:</h3>
            <?php foreach ($movie['main_actors'] as $actor): ?>
                <li><?php print $actor ?></li>
            <?php endforeach; ?>
            <h3>Year: <?php print $movie['movie_date'] ?></h3>
        </article>
    <?php endforeach; ?>
</section>
</body>
</html>
