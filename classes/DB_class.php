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
    function setMessege($Name, $Mail, $Messege){
        $sql = "INSERT INTO messeges(fname, email, messege) VALUES('{$Name}','{$Mail}','{$Messege}')";
        $this->con->query($sql);
        echo $sql;
    }
    function setUser($nick, $mail, $pass, $fname, $lname, $stm, $ctry, $cty, $bday){
        $sql = "INSERT INTO users(nickname, email, password, firstname, lastname, steamprofile, country, city, birthday) VALUES('{$nick}','{$mail}','{$pass}','{$fname}','{$lname}','{$stm}','{$ctry}','{$cty}','{$bday}')";
        $this->con->query($sql);
        echo $sql;
    }
    function getUsers(){
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
                            <button type='submit' class='btn btn-danger' name='deleteUser'>Dzēst</button>
                        </form>
                    </td>
                </tr>";
        }
        echo "</table>";
        var_dump($rs);
    }

    function getGamepage($id){
        $sql = "SELECT * FROM games  WHERE gameID={$id}";
        $sql2 = "SELECT c.comdate, c.content, u.nickname FROM commentaries c INNER JOIN users u ON c.userID = u.userID WHERE c.gameID={$id}";
        $rs = $this->con->query($sql);
        $rs2 = $this->con->query($sql2);
        while($row = $rs->fetch_assoc()) {
            echo "<div class='col-sm-12'>
                      <h1 class='text-center'>{$row['gname']}</h1>
                      <div class='col-sm-6'>
                        <img src='../img/csgo.jpg' alt=''>
                      </div>
                      <div class='col-sm-6 text-left'>
                          <table class='table'>
                              <tr><td>{$row['description']}</td></tr>
                              <tr><td>{$row['rating']}</td></tr>
                              <tr><td>{$row['releasedate']}</td></tr>
                              <tr><td>{$row['platform']}</td></tr>
                          </table>
                          <form action='' method='post'>
                              <button class='btn btn-primary' name='addfav'>Pievienot favorītiem</button>
                          </form>
                      </div>
                  </div>";
        }
        while($row = $rs2->fetch_assoc()) {
            echo "<table class='table table-bordered comment'>
                      <head><th>{$row['nickname']}</th><th class='text-right'>{$row['comdate']}</th></head>
                      <tr><td colspan='2'>{$row['content']}</td></tr>
                  </table>";
        }
    }
    function setFavorites($id,$userID){
        $sql = "INSERT INTO favorites(userID, gameID) VALUES ({$id},{$userID})";
        $this->con->query($sql);
    }
    function getEditUsrForm($id){
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
        $i = 0;
        $sql = "SELECT * FROM users WHERE userID = {$userID}";
        $rs=$this->con->query($sql);
        while($row = $rs->fetch_assoc()) {
            $i++;
            echo "<h1>Sveiks {$row['nickname']}!</h1>
                    <div class='col-sm-6'>
                        <div><img src='./img/0_200.png' alt=''></div>
                    </div>
                    <div class='col-sm-6 text-left'>
                    <table class='table' id='demo'>
                    <tr><td>Vārds: </td><td id='{$i}'>{$row['firstname']}</td><td><button onclick='myf(1)' class='btn btn-default'>rediģēt</button></td></tr>
                    <tr><td>Uzvārds: </td><td id='{$i}'>{$row['lastname']}</td><td><button onclick='myf(2)' class='btn btn-default'>rediģēt</button></td></tr>
                    <tr><td>e-pasts: </td><td id='{$i}'>{$row['email']}</td><td><button onclick='myf(3)' class='btn btn-default'>rediģēt</button></td></tr>
                    <tr><td>Steam profils: </td><td id='{$i}'>{$row['steamprofile']}</td><td><button onclick='myf(4)' class='btn btn-default'>rediģēt</button></td></tr>
                    <tr><td>Valsts: </td><td id='{$i}'>{$row['country']}</td><td><button onclick='myf(5)' class='btn btn-default'>rediģēt</button></td></tr>
                    <tr><td>Pilsēta: </td><td id='{$i}'>{$row['city']}</td><td><button onclick='myf(6)' class='btn btn-default'>rediģēt</button></td></tr>
                    <tr><td>Dzimšanas diena: </td><td id='{$i}'>{$row['birthday']}</td><td><button onclick='myf(7)' class='btn btn-default'>rediģēt</button></td></tr>
                    <tr><td>Tiesības: </td><td id='{$i}'>{$_SESSION['rolename']}</td><td><button onclick='myf(8)' class='btn btn-default'>rediģēt</button></td></tr></table>
                  </div>
                  ";
        }
    }
    function getFavorites($id){
        $sql = "SELECT g.gameID g.gname, g.platform, g.releasedate, g.rating FROM games g INNER JOIN favorites f ON g.gameID = f.gameID WHERE userID={$id}";
        $rs = $this->con->query($sql);
        echo "<div>
                    <h1>Favorīti:</h1>
                    <table class='table table-bordered'>
                    <tr><th>Nosakums</th><th>Platforma</th><th>Izlaišanas gads</th><th>Reitings</th></tr>";
        while($row = $rs->fetch_assoc()){
            echo "<tr><td>{$row['gname']}</td><td>{$row['platform']}</td><td>{$row['releasedate']}</td><td>{$row['rating']}</td><td><form action='' method='post'><input type='hidden' value='{$row['gameID']}' name='GameID'><button class='btn btn-danger' name='delfav'>Dzēst</button></form></td></tr>";
        }
        echo "</table>
                </div>";
    }
    function delFavorites($id){
        $sql = "DELETE FROM favorites WHERE gameID={$id}";
        $this->con->query($sql);
    }
}