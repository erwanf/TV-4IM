<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 31/03/2015
 * Time: 12:14
 */

namespace Controller;


use Model\ChaineDAO;
use Model\ChaineDTO;
use View\View;

class ChaineController {

    private $chaineDAO;

    public function __construct(){
        $this->chaineDAO = new ChaineDAO();
    }

    public function showAllAction(){
        $chaines = $this->chaineDAO->getAllChaines();
        $this->view("chaine","allChaine",array("chaines"=>$chaines));
    }

    public function detailAction(){
        if(isset($_GET['id'])){
            $chaineDTO = $this->chaineDAO->getOneChaine(intval($_GET['id']));
            $this->view("chaine","oneChaine",array('chaineDTO' => $chaineDTO));
        }
        else{
            $this->showAllAction();
        }
    }

    public function insertAction(){
        $chaineDTO = new ChaineDTO();
        $chaineDTO->hydrate($_POST);
        $this->chaineDAO->addOrModify($chaineDTO);
        $this->showAllAction();
    }

    public function updateAction(){
        $chaineDTO = new ChaineDTO();
        $chaineDTO->hydrate($_POST);
        $chaineDTO->setChaine_id(intval($_GET['id']));
        $this->chaineDAO->addOrModify($chaineDTO);
        $this->showAllAction();
    }

    public function deleteAction(){
        if(isset($_GET['id'])){
            $this->chaineDAO->deletechaine(intval($_GET['id']));
        }
        $this->showAllAction();
    }

    private function view($folder,$file,$array){
        $view= new View($folder,$file);
        echo  $view->create($array);
    }

}