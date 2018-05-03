<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 07.02.2018
 * Time: 0:46
 */
    require_once("./classes/Main_class.php");
    require_once("./classes/Template_class.php");
    require_once("./classes/DB_class.php");
    require_once("./classes/Validation.php");
    $main = new Main_class();
    $template = new Template_class();
    $db = new DB_class();
    $validation = new Validation();
    session_start();