<?php

/**
* @package      Bookstest
* @copyright    Copyright (C) 2013 Daniel Scheufler. All rights reserved.
* @license      GNU/GPL v3
*/

echo "Books";

//Datenbankverbindung
$books = 'db/metadata.db';

try
{$db = new PDO('sqlite:'.$books);}
catch( PDOException $e )
{die( $e->getMessage() );}



// Abfrage starten
$query = 'SELECT * FROM authors';

foreach ($db -> query($query) as $row) {
    echo $row[name];
  //  echo var_dump($row);
}

?>
