<?php
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db,'moviesite') or die(mysqli_error($db));
// insert data into the people table
$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (1, "Valerian and the City of a Thousand Planets", 1, 2017, 1, 2),
        (2, "Blade Runner 2049", 1, 2017, 5, 6),
        (3, "Godzilla: King of Monsters", 1, 2019, 4, 3),
        (4, "Los juegos del hambre", 7,2012, 7, 5),
        (5, "Passengers", 2,2016, 8,2),
        (6, "Star Wars: Episodio IV - Una nueva esperanza", 1, 1977, 8,4)';
mysqli_query($db,$query) or die(mysqli_error($db));

// insert data into the movietype table
$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES 
        (1,"Sci Fi"),
        (2, "Drama"), 
        (3, "Adventure"),
        (4, "War"), 
        (5, "Comedy"),
        (6, "Horror"),
        (7, "Action"),
        (8, "Kids")';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';

$query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (1, "Dane DeHaan", 1, 0),
        (2, "Luc Besson", 0, 1),
        (3, "Michael Dougherty", 0, 1),
        (4, "Millie Bobby Brown", 1, 0),
        (5, "Ryan Gosling", 1, 0),
        (6, "Denis Villeneuve", 0, 1),
        (7, "Jennifer Lawrence",1,0),
        (9, "Chris Pratt", 1, 0),
        (10, "George Lucas", 0,1)';
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Data inserted successfully!';

?>
