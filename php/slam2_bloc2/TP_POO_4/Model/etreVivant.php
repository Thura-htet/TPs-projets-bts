<?php
declare(strict_types=1);

abstract class EtreVivant
{
    protected int $poids;

    public function manger():void
    {
        echo "Bonjour j'absorbe des nutriments par différents moyens. <br>";
    }

    public function respirer():void
    {
        echo "Bonjour je respire avec des branchies ou des poumons. <br>";
    }

    public function setPoids(int $poids):void
    {
        $this->poids = $poids;
    }

    public function getPoids():int
    {
        return $this->poids;
    }
}