<?php
    //turn on error reporting
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $word = $_POST['option'];

    //Connect to the db
require("/home/abuehner/config_dictionary.php");

try {
    $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
} catch (PDOException $e) {
    echo $e->getMessage();
    return;
}

    //print_r($_POST);

    $terms = array("ajax" => "a Greek hero in the Trojan War who rescued the body of Achilles and killed himself out of jealousy when Odysseus was awarded the armor of Achilles.",
                   "button" => "a small disk knob or the like for sewing or otherwise attaching to an articles as of clothing, serving as a fastening when passed through a buttonhole or loop.",
                   "load" => "anything put in or on something for conveyance or transportation; freight; cargo.",
                   "heap" => "an untidy collection of things piled up haphazardly.",
                   "variable" => "not consistent or having a fixed pattern; liable to change."
    );


    foreach ($terms as $key => $def) {
        if ($key == $word) {
            $term = $key;
            $definition = $def;
            echo "<strong>$key :</strong> $definition";
        }
    }
