<?php
$controller_name = $_GET['controller'];
$action_name = $_GET['action'];

$class_name = ucfirst($controller_name)."Controller";
$controller_file = "../controller/".$class_name.".php";

if(!file_exists($controller_file)){
    $controller_file = "../controller/errorController.php";
    $action_name = "errorAction";
}
require_once($controller_file);
$controller = new $class_name;

$controller = new $class_name();
$action = strtolower($action_name)."Action";
if(!method_exists($controller,$action)){
    $controller_file = "../controller/errorController.php";
    require_once ($controller_file);
    $action = "404";
    $controller = new errorController();
}

$result = $controller->$action_name();

echo $result;