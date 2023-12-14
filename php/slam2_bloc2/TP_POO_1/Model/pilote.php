<?php
declare(strict_types=1);
class Pilote
{
    public string $nom;
    public string $prenom;
    private DateTime $datenaissance;
    private string $sexe;
    private int $age;

    public function __construct(string $nom, string $prenom, string $sexe,
                                int $age, int $year, int $month, int $day)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->setDatenaissance($year, $month, $day);
        $this->sexe = $sexe;
        $this->setSexe($sexe);
        $this->setAge($age);
    }

    public function SePresenter()
    {
        echo "Bonjour ! Je m'appelle " . $this->prenom . " " . $this->nom . "." . "<br>";
        echo "Date de naissance : " . $this->getDatenaissance()->format('Y-m-d') . "<br>";
        echo "Age : " . $this->getAge();
    }

    public function getAge():int
    {
        return $this->age;
    }

    public function setAge(int $age):void
    {
        $this->age = $this->CalculerAge();
    }

    public function getSexe():string
    {
        return $this->sexe;
    }

    public function setSexe($sexe):void
    {
        $this->sexe = $sexe;
    }

    public function getDatenaissance():DateTime
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(int $year, int $month, int $day):void
    {
        /*
        if (isset($this->datenaissance))
        {
            $this->datenaissance->setDate($year, $month, $day);
        }
        else
        {
            $date = strval($year) . '-' . strval($month) . '-' . strval($day);
            $this->datenaissance = new DateTime($date);

            $this->datenaissance = new DateTime();
            $this->datenaissance->setDate($year, $month, $day);
        }
        */
        if (!isset($this->datenaissance))
        {
            $this->datenaissance = new DateTime();
        }
        $this->datenaissance->setDate($year, $month, $day);
    }

    private function CalculerAge():int
    {
        return $this->datenaissance->diff(new DateTime("now"))->y;
    }
}