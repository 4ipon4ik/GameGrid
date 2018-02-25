<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 07.02.2018
 * Time: 0:49
 */
class Template_class
{
    static function getLibs(){
        echo '<meta charset="UTF-8">
                <!--js files-->
                <script src="./libs/jquery/jquery-3.2.1.min.js"></script>
                <script src="./libs/bootstrap3/js/bootstrap.min.js"></script>
                <script src="./libs/fontawesome/js/fontawesome-all.min.js"></script>
                <script src="./js/main.js"></script>
                <!--css files-->
                <link rel="stylesheet" href="./libs/bootstrap3/css/bootstrap.min.css">
                <link rel="stylesheet" href="./css/main.min.css">
                <link rel="icon" type="image/vnd.microsoft.icon" href="./images/favicon-gamepad.ico"/>';
    }
}