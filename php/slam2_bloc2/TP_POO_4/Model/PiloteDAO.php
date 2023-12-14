<?php
declare(strict_types=1);
require_once 'modelAbstract.php';

class PiloteDAO extends ModelAbstract
{
    public function GetOnePilote(int $idpilote):false|PDOStatement
    {
        $request = 'SELECT * FROM pilote WHERE idpilote=:idpilote';
        $params = array('idpilote'=>$idpilote);
        return $this->executerRequete($request, $params);
        // return self::executerRequete($request, $params);
    }

    public function GetAllPilote():false|PDOStatement
    {
        $request = 'SELECT * FROM pilote';
        return $this->executerRequete($request);
    }
}