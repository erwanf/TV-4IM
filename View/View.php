<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 31/03/2015
 * Time: 13:32
 */

namespace View;

class View {

    private $folder;

    public function __construct($nameFolder, $nameFile){
        $this->folder = "./View/".$nameFolder."/".$nameFile."View.php";
    }

    private function generateFile($file, $data){
        if (file_exists($file)){
            if (isset($data)){
                extract($data);
                ob_start();
                require($file);
                return ob_get_clean();
            }
        }
        else{
            throw new \Exception(
                "le fichier ".$file." est introuvable... pas de chance!!!"
            );
            die;
        }
    }

    public function create($data){
        $content = $this->generateFile($this->folder, $data);
        $view = $this->generateFile('./View/layout.php',array('content'=>$content));
        return $view;
    }
}