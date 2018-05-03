<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 03.05.2018
 * Time: 5:31
 */

class Validation
{
private
    $error ="";
public
    function getErr(){
        return $this->error;
    }
    function resetErr(){
        $this->error = "";
    }
    function registration($mail,$pass,$nick,$name,$lname){
        if($this->isEmpty($mail)||$this->isEmpty($pass)||$this->isEmpty($nick)){
            echo $this->error,'<br>';
            return;
        }
        if($this->mail($mail)){
            echo $this->error,'<br>';
        }
        if($this->pass($pass)){
            echo $this->error,'<br>';
        }
        if($this->nickname($nick)){
            echo $this->error,'<br>';
        }
        if($this->name($name,'vārdu')){
            echo $this->error,'<br>';
        }
        if($this->name($lname,'uzvārdu')){
            echo $this->error,'<br>';
        }
    }
    function isEmpty($field){
        if($field == ""){
            $this->error = "Lūdzu aizpildiet visus obligātos laukus";
            return 1;
        }
        else{
            return 0;
        }
    }
    function name($field, $text){
        if(preg_match("/^[A-ZĒŪĪĀŠĶĻŅ][a-zēūīāšķļņ]{2,}$/",$field)){
            return 0;
        }
        elseif(!$this->isEmpty($field)){
            $this->error = "Lūdzu ierakstiet korektu $text vismaz 3 burtu garumā.";
            return 1;
        }
    }
    function mail($field){
        if(preg_match("/^[a-z][\.a-z0-9]*[a-z0-9]@[a-z0-9]*\.[a-z]{2,3}$/i",$field)){
            return 0;
        }
        else{
            $this->error = "Lūdzu ievadiet korektu e-pastu.";
            return 1;
        }
    }
    function pass($field){
        if(preg_match("/^.{6,}$/",$field)){
            return 0;
        }
        else{
            $this->error = "Parole nedrīkst būt īsāka par 6 simboliem.";
            return 1;
        }
    }
    function nickname($field){
        if(preg_match("/^[a-z][a-z0-9]{2,9}$/i",$field)){
            return 0;
        }
        else{
            $this->error = "Lietotājvārds pirmais simbols var būt tikai burts. Minimālais un maksimālais lietotājvārda garums ir 3/10.";
            return 1;
        }
    }
}