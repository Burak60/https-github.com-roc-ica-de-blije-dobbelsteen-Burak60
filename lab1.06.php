<?php

function printArray($item, $key) {
    echo "$key" . "|" . "<i> $item </i>";
}

$platlist = array(
    array("" => "hiphop", "  " => "John Williams", " " => "my girl<br>"),
    array("" => "jazz", " " => "John coltrane", "  " => "New york<br>"),
    array("" => "hiphop", " " => "Shakira", "  " => "Obsession")
);
$toevoegen = array(
    array("genre" => "Latin", "auteur" => "Caetano Veloso", "titel" => "Cafe Atlantico")
);

array_merge($platlist, $toevoegen);
array_walk_recursive($platlist, "printArray");

//$eerste = ["Hiphop","John williams","My girl"];
//$tweede = ["Jazz","John Coltrane", "New york"];
//$derde = ["Hiphop","Shakira","Obsession"];
//
//$eerste1 = implode("|", $eerste);
//echo "<br>Track 0: $eerste1";
//
//$tweede1 = implode("|", $tweede);
//echo "<br>Track 1: $tweede1";
//
//$derde1 = implode("|", $derde);
//echo "<br>Track 2: $derde1";

