<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 31/03/2015
 * Time: 10:08
 */

namespace Model;

use \PDO;
class Connexion {

    private $bdd;

    private function getBdd (){
        try{
            if ($this->bdd==null){
                $host='127.0.0.1';
                $port='3306';
                $db='tele';
                $user='root';
                $password='';

                $this->bdd = new PDO(
                  'mysql:host='.$host.';dbname='.$db.';port='.$port,
                    $user,
                    $password,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
                );
            }
        }
        catch(\Exception $e) {
            echo 'là il y a une boulette : '.$e->getMessage();
            die;
        }
        return $this->bdd;
    }

    public function executeRequest($sql, $param = null){
        if ($param==null){
            $result=$this->getBdd()->query($sql);
        }
        else{
            $result=$this->getBdd()->prepare($sql);
            $result->execute($param);
        }
        return $result;
   }
}