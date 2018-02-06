<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 07.02.2018
 * Time: 0:51
 */
class DB_class{
    protected $server = "localhost";
    protected $db = "db";
    protected $dbuser = "root";
    protected $dbpw = "";
    function __construct() {
        $this->con = new mysqli($this->server,$this->dbuser,$this->dbpw, $this->db);
        $this->con->set_charset("utf8");
    }
}