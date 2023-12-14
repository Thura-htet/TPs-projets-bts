<?php
declare(strict_types=1);

function TestRegex():void
{
    $expression = '/^Bonjour.(M|Mme)/';
    $valeur = 'Bonjour à Mme. Dupond';
    echo "Expression $expression <br>";
    echo "Valeur $valeur <br>";
    if (preg_match($expression, $valeur))
    {
        echo "<p style='color: green'>Valeur Matche</p>";
    }
    else
    {
        echo "<p style='color: red'>Valeur ne matche PAS.</p>";
    }

    $number = "560.00 $";
    $email = "elon.musk@tesla..com"; // no
    echo "nombre filtré = $number";
    if (filter_var($number, FILTER_VALIDATE_FLOAT ))
    {
        echo("<p style='color: green'>$number est un décimale valide</p>");
    }
    else
    {
        echo("<p style='color: red'>$number est invalide</p>");
    }
}

function FiltrerPerso(string $entree):string
{
    return str_replace(
        'grosmottrèsvilain',
        'DANGER',
        $entree
    );
}

echo filter_var(
    "<p>Cette chaine contient un grosmottrèsvilain! et même plusieurs grosmottrèsvilain ils vont être remplacer !</p>",
    FILTER_CALLBACK,
    array("options"=>"FiltrerPerso")
);