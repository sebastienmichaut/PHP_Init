<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    $languages = array("HTML", "CSS", "PHP", "JAVASCRIPT");
    $nombreLanguages = sizeof($languages);
    $frameworks = array(
        "HTML" => "WordPress",
        "CSS" => "Bootstrap",
        "PHP" => "Symfony",
        "Javascript" => "React",
    );
    
    

    echo "Voici vos {$nombreLanguages} langages informatiques préférés : ";

    foreach($languages as $language){
        echo " {$language}";
    }

    echo "<br> Parmis ces langages, le {$languages[3]} est votre favoris !<br>";

    foreach($frameworks as $cle => $valeur){
        echo "le framework <b>{$valeur}</b> est écrit en {$cle}<br>";
    }
    

?>
    
</body>
</html>