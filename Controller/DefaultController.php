<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 31/03/2015
 * Time: 15:02
 */

namespace Controller;


use View\View;

class DefaultController {
    public function indexAction(){
       $view = new View("default", "default");
        echo $view->create(array('default'=>null));
}
}