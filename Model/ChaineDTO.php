<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 31/03/2015
 * Time: 11:09
 */

namespace Model;


class ChaineDTO {
    /* ******************** Atributes ******************************/
    private $chaine_id;
    private $nom_chaine;
    private $adresse;
    private $code_postal;
    private $ville;
    private $telephone;
    private $fax;
    private $chaine_cablee;

    /* ******************* Function  ***********************************/

    public function hydrate($donnees){
        foreach ($donnees as $key => $value){
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

    /* ******************* Getter and Setter **************************/

    /**
     * @return mixed
     */
    public function getChaine_id()
    {
        return $this->chaine_id;
    }

    /**
     * @param mixed $chaine_id
     */
    public function setChaine_id($chaine_id)
    {
            $this->chaine_id = $chaine_id;
    }

    /**
     * @return mixed
     */
    public function getNom_chaine()
    {
        return $this->nom_chaine;
    }

    /**
     * @param mixed $nom_chaine
     */
    public function setNom_chaine($nom_chaine)
    {
        $this->nom_chaine = substr(htmlspecialchars($nom_chaine),0,20);
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = substr(htmlspecialchars($adresse),0,20);
    }

    /**
     * @return mixed
     */
    public function getCode_postal()
    {
        return $this->code_postal;
    }

    /**
     * @param mixed $code_postal
     */
    public function setCode_postal($code_postal)
    {
            $this->code_postal = substr($code_postal,0,5);
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = substr(htmlspecialchars($ville),0,30);
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = substr(htmlspecialchars($telephone),0,14);
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = substr(htmlspecialchars($fax),0,14);
    }

    /**
     * @return mixed
     */
    public function getChaine_cablee()
    {
        return $this->chaine_cablee;
    }

    /**
     * @param mixed $chaine_cablee
     */
    public function setChaine_cablee($chaine_cablee)
    {
            $this->chaine_cablee = substr($chaine_cablee,0,1);
    }



}