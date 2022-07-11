<?php
// Le fichier test.xml contient un document XML avec un élément racine
// et au moins un élément /[racine]/title.

if (file_exists('source.xml')) {
    $xml = simplexml_load_file('source.xml');

    print_r($xml);
} else {
    exit('Echec lors de l\'ouverture du fichier test.xml.');
}
?>