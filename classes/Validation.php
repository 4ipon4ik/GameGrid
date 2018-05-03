<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 03.05.2018
 * Time: 5:31
 */

class Validation
{
public
    function getErr(){
        return $this->error;
    }
    function registration($mail,$pass,$nick,$name,$lname){
        if($this->isEmpty($mail)||$this->isEmpty($pass)||$this->isEmpty($nick)||$this->isEmpty($name)||$this->isEmpty($lname)){
            echo $this->error,'<br>';
            return;
        }
        if($this->name($name)){
            echo $this->error,'<br>';
        }
        if($this->lname($lname)){
            echo $this->error,'<br>';
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
    }
    function isEmpty($field){
        if($field == ""){
            $this->error = "Lūdzu aizpildiet visus laukus";
            return 1;
        }
        else{
            return 0;
        }
    }
    function name($field){
        if(preg_match("/^[A-ZĒŪĪĀŠĶĻŅ][a-zēūīāšķļņ]*$/",$field)){
            return 0;
        }
        else{
            $this->error = "Lūdzu ierakstiet korektu vārdu.";
            return 1;
        }
    }
    function lname($field){
        if(preg_match("/^[A-ZĒŪĪĀŠĶĻŅ][a-zēūīāšķļņ]*$/",$field)){
            return 0;
        }
        else{
            $this->error = "Lūdzu ierakstiet korektu uzvārdu.";
            return 1;
        }
    }
    function mail($field){
        if(preg_match("/^[a-z][\.a-z0-9]*[a-z0-9]@[a-z0-9]*\.[a-z]{2,4}$/i",$field)){
            return 0;
        }
        else{
            $this->error = "Lūdzu ievadiet korektu e-pastu.";
            return 1;
        }
    }
    function pass($field){
        if(!preg_match("/^[.]{,5}$/",$field)){
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
            $this->error = "Pirmais simbols nevar būt skaitlis. Maksimālais saukļa garums ir 10.";
            return 1;
        }
    }
private
$error ="";
}