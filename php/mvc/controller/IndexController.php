<?php
/**
 * Created by PhpStorm.
 * User: Wrex
 * Date: 06/03/2016
 * Time: 17:34
 */
class IndexController extends AbstractController{
    public function indexAction(){
        include("../view/index_home.php");
        return;
    }
}