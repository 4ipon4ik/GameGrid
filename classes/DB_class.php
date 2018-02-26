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
    function saveMess($Name, $Mail, $Messege){
        $sql = "INSERT INTO messeges(fname, email, messege) VALUES('{$Name}','{$Mail}','{$Messege}')";
        $this->con->query($sql);
        echo $sql;
    }
    function saveUsr($nick, $mail, $pass, $fname, $lname, $stm, $ctry, $cty, $bday){
        $sql = "INSERT INTO users(nickname, email, password, firstname, lastname, steamprofile, country, city, birthday) VALUES('{$nick}','{$mail}','{$pass}','{$fname}','{$lname}','{$stm}','{$ctry}','{$cty}','{$bday}')";
        $this->con->query($sql);
        echo $sql;
    }
    function listUsers(){
        $i = 0;
        $sql = "SELECT userID, nickname, firstname, lastname, email FROM users";
        $rs=$this->con->query($sql);
        echo "<table class='table table-hover table-bordered'>
                <thead>
                    <tr>
                        <th>Nr.</th>
                        <th>Sauklis</th>
                        <th>Vārds</th>
                        <th>Uzvārds</th>
                        <th>E-pasts</th>
                        <th colspan='2'>Iespējas</th>
                    </tr>
                </thead>
                ";
        while($row = $rs->fetch_assoc()) {
            $i++;
            echo "<tr>
                    <td>{$i}.</td>
                    <td>{$row["nickname"]}</td>
                    <td>{$row["firstname"]}</td>
                    <td>{$row["lastname"]}</td>
                    <td>{$row["email"]}</td>
                    <td>
                        <a href='./editUser.php?user={$row['userID']}'>Labot</a>
                    </td>
                    <td>
                        <form action='./usrList.php' method='post'>
                            <input type='hidden' name='delUserID' value='{$row['userID']}'/>
                            <button type='submit' class='btn btn-primary' name='deleteUser'>Dzēst</button>
                        </form>
                    </td>
                </tr>";
        }
        echo "</table>";
    }

    function gamePage($id){
        $sql = "SELECT * FROM games  WHERE gameID={$id}";
        $sql2 = "SELECT c.comdate, c.content, u.nickname FROM commentaries c INNER JOIN users u ON c.userID = u.userID WHERE c.gameID={$id}";
        $rs = $this->con->query($sql);
        $rs2 = $this->con->query($sql2);
        while($row = $rs->fetch_assoc()) {
            echo "<h1>{$row['gname']}<h1/>
                  <p>{$row['description']}<p/>
                  <p>{$row['rating']}<p/>
                  <p>{$row['releasedate']}<p/>
                  <p>{$row['platform']}<p/>";
        }
        while($row = $rs2->fetch_assoc()) {
            echo "<p>{$row['nickname']}<p/>
                  <p>{$row['comdate']}<p/>
                  <p>{$row['content']}<p/>";
        }
    }

    function editUsrForm($id){
        $sql = "SELECT userID, firstname, lastname, email FROM users WHERE userID = {$id}";
        $rs=$this->con->query($sql);
        while($row = $rs->fetch_assoc()) {
            echo "
                    <div class='form-group'>
                        <label for='1'>Vārds:</label>
                        <input id='1' type='text' name='fname' value='{$row['firstname']}'  class='form-control'/>
                    </div>
                    <div class='form-group'>
                        <label for='2'>Uzvārds:</label>
                        <input id='2' type='text' name='lname' value='{$row['lastname']}'  class='form-control'/>
                    </div>
                    <div class='form-group'>
                        <label for='3'>E-pasts:</label>
                        <input id='3' type='email' name='mail' value='{$row['email']}'  class='form-control'/>
                    </div>
                    <input type='hidden' name='uID' value='{$row['userID']}'/>
                ";
        }
    }
    function editUsr($fname, $lname, $mail, $ID){
        $sql = "UPDATE users set firstname = '{$fname}', lastname = '{$lname}', email = '{$mail}' WHERE  userID='{$ID}'";
        $this->con->query($sql);
    }
    function deleteUsr($ID){
        $sql = "DELETE FROM users WHERE userID='{$ID}'";
        $this->con->query($sql);
    }
    function getUsr($nick,$pwd){
        $sql = "SELECT u.userID, u.nickname, u.password, r.roleID, p.rolename FROM users u INNER JOIN roles r ON u.userID = r.userID INNER JOIN permissions p ON r.roleID = p.roleID WHERE nickname='{$nick}' AND password='{$pwd}'";
        $rs = $this->con->query($sql);
        if($rs->num_rows!==0){
            while($row = $rs->fetch_assoc()) {
                $_SESSION['nick'] = $row['userID'];
                $_SESSION['username']=$row['nickname'];
                $_SESSION['role']=$row['roleID'];
                $_SESSION['rolename']=$row['rolename'];
            }
            header("location:usrList.php");
        }
        else{
            echo "Nepareizs lietotājs vai parole";
        }
    }
    function logOut(){
        echo "<form action='' method='post'>
                    <button type='submit' name='i' class='btn-danger'>Iziet</button>
                </form>";
        if(isset($_POST['i'])){
            session_destroy();
            $this->header('index.php');
        }
    }
    function header($send){
        header("location:{$send}");
    }
    function getProfile($userID){
        $sql = "SELECT * FROM users WHERE userID = {$userID}";
        $rs=$this->con->query($sql);
        while($row = $rs->fetch_assoc()) {
            echo "<h1>Sveiks {$row['nickname']}!<h1/>
                    <div>
                    <p>Vārds: {$row['firstname']}</p>
                    <p>Uzvārds: {$row['lastname']}</p>
                    <p>e-pasts: {$row['email']}</p>
                    <p>Steam profils: {$row['steamprofile']}</p>
                    <p>Valsts: {$row['country']}</p>
                    <p>Pilsēta: {$row['city']}</p>
                    <p>Dzimšanas diena: {$row['birthday']}</p>
                    <p>Tiesības: {$_SESSION['rolename']}</p>
                  </div>
                  ";
        }
    }
}