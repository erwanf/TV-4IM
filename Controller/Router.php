<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 31/03/2015
 * Time: 16:10
 */
namespace Controller;
class Router
{
    public function routeRequest()
    {
        if (isset($_GET['controller']) && isset($_GET['action'])) {
            $path = _CONTROLLER_PATH_.ucfirst($_GET['controller']).'Controller'.'.php';
            $controller = '\\Controller\\'.ucfirst($_GET['controller']).'Controller';
            $action = $_GET['action'].'Action';
            if (file_exists($path)) {
                $oneController = new  $controller();
                if (method_exists($oneController, $action)) {
                    $oneController->$action();
                } else {
                    $this->defaultController();
                }
            } else {
                $this->defaultController();
            }
        } else {
            $this->defaultController();
        }
    }

    private function defaultController(){
        $defaultController = new DefaultController();
        $defaultController->indexAction();
    }
}