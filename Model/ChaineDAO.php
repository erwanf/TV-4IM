<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 31/03/2015
 * Time: 11:06
 */

namespace Model;


class ChaineDAO {
    private $con;

    public function __construct(){
        $this->con = new Connexion();
    }

    public function getAllChaines(){
        $sql = 'SELECT chaine_id, nom_chaine, adresse, code_postal, ville,telephone, chaine_cablee, fax
                FROM chaine
                ORDER BY chaine_id;';
        $chaines = array();
        $result = $this->con->executeRequest($sql);

        while ($resultChaine = $result->fetch()){
            $myChaine = new ChaineDTO();
            $myChaine->hydrate($resultChaine);
            $chaines[]=$myChaine;
        }
        return $chaines;
    }

    public function  getOneChaine($id){
        $sql = 'SELECT chaine_id, nom_chaine, adresse, code_postal, ville, telephone, chaine_cablee, fax
                FROM chaine
                WHERE chaine_id = ?;';

        $result = $this->con->executeRequest($sql, array($id));
        $chaine = $result->fetch();
        $chaineDTO = new ChaineDTO();
        $chaineDTO->hydrate($chaine);
        return $chaineDTO;
    }



    public function addOrModify(ChaineDTO $chaineDTO){
        $param = array(
            $chaineDTO->getNom_chaine(),
            $chaineDTO->getAdresse(),
            $chaineDTO->getCode_postal(),
            $chaineDTO->getVille(),
            $chaineDTO->getTelephone(),
            $chaineDTO->getChaine_cablee(),
            $chaineDTO->getFax()
        );

        if ($chaineDTO->getChaine_id()>0){
            $sql = 'UPDATE chaine SET nom_chaine=?, adresse=?, code_postal=?, ville=?, telephone=?, chaine_cablee=?, fax=?
                WHERE chaine_id = ?;';
            $param[] = $chaineDTO->getChaine_id();

            $this->con->executeRequest($sql,$param);
        }
        else{
            $sql = 'INSERT INTO chaine( nom_chaine, adresse, code_postal, ville,
        telephone, chaine_cablee, fax)VALUES  (?,?,?,?,?,?,?);';

            $this->con->executeRequest($sql,$param);
        }
    }

    public function deleteChaine($id){
        $sql = 'DELETE FROM chaine WHERE chaine_id = ?';
        $this->con->executeRequest($sql, array($id));
    }
}


/*
 *
 *    public function insert(ChaineDTO $chaineDTO){
        $sql = 'INSERT INTO chaine (nom_chaine,adresse, code_postal, ville,telephone, chaine_cablee, fax )
            values(?,?,?,?,?,?,?);';

        $param = array(
            $chaineDTO->getNom_chaine(),
            $chaineDTO->getAdresse(),
            $chaineDTO->getCode_postal(),
            $chaineDTO->getVille(),
            $chaineDTO->getTelephone(),
            $chaineDTO->getChaine_cablee(),
            $chaineDTO->getFax()
        );
        $this->con->executeRequest($sql, $param);
    }

    public function update(ChaineDTO $chaineDTO){
        $sql = 'UPDATE chaine SET nom_chaine=?, adresse=?, code_postal=?, ville=?, telephone=?, chaine_cablee=?, fax=?
                WHERE chaine_id = ?;';

        $param = array(
            $chaineDTO->getNom_chaine(),
            $chaineDTO->getAdresse(),
            $chaineDTO->getCode_postal(),
            $chaineDTO->getVille(),
            $chaineDTO->getTelephone(),
            $chaineDTO->getChaine_cablee(),
            $chaineDTO->getFax(),
            $chaineDTO->getChaine_id()
        );

        $this->executeRequest($sql, $param);
    }
 */