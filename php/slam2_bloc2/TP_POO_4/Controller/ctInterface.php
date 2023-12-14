<?php
declare(strict_types=1);

function TPInterface():void
{
    $Joe = new EtreHumain("Joe");
    $Joe->nager();
    $Joe->courir();
    $Joe->respirer();
    $Joe->manger();
    $Joe->rire();

    echo "<br>";

    $Donald = new Canard("Orange");
    $Donald->nager();
    $Donald->voler();
    $Donald->respirer();
    $Donald->manger();
    $Donald->cancaner();
}