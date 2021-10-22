<?php

    require __DIR__ . '/../database.php';

    header("Content-Type: application/json");

    if ( !empty($_GET["genres"]) ) {
        $genre = $_GET["genres"];
        $databaseFiltered = [];

        foreach($database as $album) {
            if( $genre == $album["genre"]) {
                $databaseFiltered[] = $album;
            }
        }

        echo json_encode($databaseFiltered);
    } else {
        echo json_encode($database);
    }