<?php


function impair($x)
{
    return ($x & 1);// retourne lorsque l'entrée est impaire
}

function pair($x)
{
    return (!($x & 1));// retourne lorsque l'entrée est paire
}

$tab = array();
function filter($tab)
{
    echo "Tableau Impair :\n" . "<br>";
    $arrayOdd = array_filter($tab, "impair");
    print_r($arrayOdd);//affichage tableau
    echo "<br>";
    var_dump($arrayOdd);//affichage tableau
    echo "<br>";
    foreach ($arrayOdd as $valeur)
        echo "[" . $valeur . "],";// affichage par valeur
    echo "<br>";


    echo "Tableau Pair :\n" . "<br>";

    $arrayEven = array_filter($tab, "pair");
    print_r($arrayEven);
    echo "<br>";
    var_dump($arrayEven);
    echo "<br>";
    foreach ($arrayEven as $valeur)
        echo "[" . $valeur . "],";


}

$tab = array(2, 5, 6, 9, 6, 10, 2, 3);
filter($tab);
?>


