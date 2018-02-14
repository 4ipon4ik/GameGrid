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
        $sql = "SELECT userID, firstname, lastname, email FROM users";
        $rs=$this->con->query($sql);
        echo "<table class='table table-hover'>
                <thead>
                    <tr>
                        <th>Nr.</th>
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
        $sql = "SELECT games.*, commentaries.* FROM games, users  WHERE gameID={$id}";
        $this->con->query($sql);
    }

    function editUsrForm($id){
        $sql = "SELECT userID, firstname, lastname, email FROM users WHERE userID = {$id}";
        $rs=$this->con->query($sql);
        while($row = $rs->fetch_assoc()) {
            echo "
                    <div class='form-group'>
                        <label for='category_name'>Vārds:</label>
                        <input type='text' name='fname' value='{$row['firstname']}'  class='form-control'/>
                    </div>
                    <div class='form-group'>
                        <label for='short_name'>Uzvārds:</label>
                        <input type='text' name='lname' value='{$row['lastname']}'  class='form-control'/>
                    </div>
                    <div class='form-group'>
                        <label for='short_name'>E-pasts:</label>
                        <input type='email' name='mail' value='{$row['email']}'  class='form-control'/>
                    </div>
                    <input type='hidden' name='uID' value='{$row['userID']}'/>
                ";
        }
    }
    function editUsr($fname, $lname, $mail, $ID){
        $sql = "UPDATE users set firstname = '{$fname}', lastname = '{$lname}', email = '{$mail}' WHERE  userID='{$ID}'";
        $this->con->query($sql);
        echo  $sql;
    }
    function deleteUsr($ID){
        $sql = "DELETE FROM users WHERE userID='{$ID}'";
        $this->con->query($sql);
        echo $sql;
    }
}