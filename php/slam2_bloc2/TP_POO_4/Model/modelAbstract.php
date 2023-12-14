<?php
declare(strict_types=1);

abstract class ModelAbstract
{
    private PDO $bdd;

    private function dbconnect():PDO
    {
        try
        {
            $this->bdd = new PDO('mysql:host=localhost;dbname=airsio', 'root', '',
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            echo "CONNECTION a AIRSIO OK" . '</br>';
            return $this->bdd;
        }
        catch (Exception $e)
        {
            die('Erreur de connection à la base : ' . $e->getMessage());
        }
    }

    /*can the excuterRequete function be a static function and what will be the difference between it and the public function
    static public function executerRequete(string $sql, array $params=null):false|PDOStatement
    {
        $bdd = self::dbconnect(); // non-static method dbconnect cannot be called statically

        if (!isset($params))
        {
            $result = $bdd->query($sql);
        }
        else
        {
            $result = $bdd->prepare($sql);
            $result->execute($params);
        }
        return $result;
    }
    * https://medium.com/att-israel/should-you-avoid-using-static-ae4b58ca1de5
    * https://stackoverflow.com/questions/2671496/when-to-use-static-methods
    * https://www.reddit.com/r/csharp/comments/b4j0yv/when_to_use_static_methods_vs_normal_methods/
    */
    public function executerRequete(string $sql, array $params=null):false|PDOStatement
    {
        if (!isset($params))
        {
            $result = $this->dbconnect()->query($sql);
        }
        else
        {
            $result = $this->dbconnect()->prepare($sql);
            $result->execute($params);
        }
        return $result;
    }
}

/*
 * https://stackoverflow.com/questions/21537982/should-i-implement-all-the-methods-present-in-an-abstract-class
 * https://www.theserverside.com/definition/abstract-class
 * https://www.w3schools.com/php/php_oop_classes_abstract.asp
 * https://stitcher.io/blog/constructor-promotion-in-php-8
 * https://www.analyticsvidhya.com/blog/2023/02/what-are-data-access-object-and-data-transfer-object-in-python/
 * https://www.baeldung.com/java-dao-pattern
 * https://www.tutorialspoint.com/design_pattern/data_access_object_pattern.htm
 * https://www.geeksforgeeks.org/data-access-object-pattern/
 */