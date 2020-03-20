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

?>
