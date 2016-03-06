<?php
/**
 * Created by PhpStorm.
 * User: Wrex
 * Date: 06/03/2016
 * Time: 17:32
 */
class AbstractController{
    protected $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
}