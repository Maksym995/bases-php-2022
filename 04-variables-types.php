<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>types de variables</title>
</head>
<body>
    <h1>Les types de variables</h1>
    <h2>Les string (text)</h2>
    <p>Les chaînes de caractères sont mises dans des variables de type string ou str, ce sont les variables les plus utilisées pour l'affichage de texte dans les sites web</p>
    <p>On peut les utiliser et les mettre une à la suite de l'autre... Celà s'appelle la concaténation.</p>

    <?php
    // création de la variable (ici en camelCase), avec le = qui donne la valeur, En procédural, le typage stricte n'est pas obligatoire 
    $monTitre = "Bientôt la fin de ce cours interminable !";
    // affichage du contenu de la variable avec une chaîne concaténée (utilisation du . ou de la virgule) - gettype est uen fonction permettant de récupérer le typage d'une variable (en PHP 8 on utilise plutôt get_debug_type())
    echo $monTitre." YES! <br>";
    echo "Le type de la variable est ".gettype($monTitre).' !';


    ?>
    <p>il existe des centaines de fonctions pour gérer du texte, par exemple</p>
    <?php
    echo 'mettre tout en majuscule : strloupper($monTitre) '.strtoupper($monTitre);

    ?>
    <p><a href=""></a></p>
</body>
</html>