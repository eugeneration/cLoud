<?php

// connect
$m = new Mongo();

// select a database
$db = $m->comedy;

// select a collection (analogous to a relational database's table)
$collection = $db->cartoons;

// add a record
$obj = array( "title" => "Piano_Man", "artist" => "Billy Joel" );
$collection->insert($obj);
$obj = array( "title" => "Silence", "artist" => "Dark Mouse" );
$collection->insert($obj);
$obj = array( "title" => "Mashup", "artist" => "Us!" );
$collection->insert($obj);

// find everything in the collection
$cursor = $collection->find();

// iterate through the results

}

?>