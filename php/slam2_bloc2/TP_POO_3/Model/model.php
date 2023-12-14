<?php
class Model
{
    private PDO $bdd;
    private function dbconnect()
    {
        try
        {
            $this->bdd = new PDO('mysql:host=localhost;dbname=airsio', 'root', '',
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            echo "CONNECTION a AIRSIO OK " . '</br>';
            return $this->bdd;
        }
        catch (Exception $e)
        {
            die('Erreur de connection à la base : ' . $e->getMessage());
        }
    }
    public function GetOnePilote(int $idpilote)
    {
        $bdd = $this->dbconnect();
        $request = 'SELECT * FROM pilote WHERE idpilote=:idpilote';
        $pilote_result = $bdd->prepare($request);
        $pilote_result->execute(array('idpilote'=>$idpilote));
        return $pilote_result;
    }
}