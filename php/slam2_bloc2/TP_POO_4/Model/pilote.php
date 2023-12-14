<?php
declare(strict_types=1);
require_once 'employee.php';
class Pilote extends Employee
{
    private int $nombreHeureVol;

    public function __construct(array $donnees, int $nombreHeureVol)
    {
        $this->nombreHeureVol = $nombreHeureVol;
        $this->hydrate($donnees);
    }

    public function SePresenter():void
    {
        parent::SePresenter();
        echo "J'ai " . $this->getNombreHeureVol() . " heures de vol";
    }

    public function getNombreHeureVol():int
    {
        return $this->nombreHeureVol;
    }

    public function setNombreHeureVol(int $nombreHeureVol):void
    {
        $this->nombreHeureVol = $nombreHeureVol;
    }

    private function hydrate(array $donnees):void
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
}