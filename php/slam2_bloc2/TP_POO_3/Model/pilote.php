<?php
declare(strict_types=1);
class Pilote
{
    public string $nom;
    public string $prenom;
    private DateTime $datenaissance;
    private string $sexe;
    private int $age;
    private const annemin = 20;
    private const annemax = 65;

    public function __construct(array $donnees)
    {
        // $this->setDatenaissance($year, $month, $day);
        $this->hydrate($donnees);
    }

    public function SePresenter()
    {
        echo "Bonjour ! Je m'appelle " . $this->prenom . " " . $this->nom . "." . "<br>";
        echo "Date de naissance : " . $this->getDatenaissance()->format('Y-m-d') . "<br>";
        echo "Age : " . $this->getAge();
    }

    public function setPrenom($prenom):void
    {
        $this->prenom = $prenom;
    }

    public function setNom($nom):void
    {
        $this->nom = $nom;
    }

    public function getAge():int
    {
        $this->age = $this->CalculerAge();
        $this->validerAge($this->age);
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

    public function setDatenaissance(string $datedenaissance):void
    {
        $this->datenaissance = date_create($datedenaissance);
    }

    private function ValiderAge(int $age):bool
    {
        // if ($age < $this->annemin || $age > $this->annemax)
        // at least in PHP we cannot use this to access a constant variable
        // ,and we cannot use self to access normal class variables
        // the same is true for static variables
        if ($age < self::annemin || $age > self::annemax)

        {
            trigger_error(
                'L\'age doit être compris entre ' . self::annemin . 'et ' . self::annemax,
                E_USER_ERROR
            );
        }
        return True;
    }

    private function CalculerAge():int
    {
        return $this->datenaissance->diff(new DateTime("now"))->y;
    }

    public function hydrate(array $donnees)
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