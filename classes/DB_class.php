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
    function header($send){
        header("location:{$send}");
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
        $rs = $this->con->query($sql);
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
                              <input type='hidden' value='1'>
                              <button class='btn btn-primary' name='addfav'>Pievienot favorītiem</button>
                          </form>
                      </div>
                  </div>";
        }
    }
    function getComment($id){
        $sql = "SELECT c.comdate, c.content, u.nickname FROM commentaries c INNER JOIN users u ON c.userID = u.userID WHERE c.gameID={$id}";
        $rs = $this->con->query($sql);
        while($row = $rs->fetch_assoc()) {
            echo "<table class='table table-bordered comment'>
                      <head><th>{$row['nickname']}</th><th class='text-right'>{$row['comdate']}</th></head>
                      <tr><td colspan='2'>{$row['content']}</td></tr>
                  </table>";
        }
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
                    <input type='hidden' name='userID' value='{$row['userID']}'/>
                ";
        }
    }
    function getProfileEditForm($id){
        $sql = "SELECT * FROM users WHERE userID = {$id}";
        $rs=$this->con->query($sql);
        while($row = $rs->fetch_assoc()) {
            echo "<form method='post'>
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
                        <div class='form-group'>
                            <label for='4'>Steam profils:</label>
                            <input id='4' type='email' name='mail' value='{$row['steamprofile']}'  class='form-control'/>
                        </div>
                        <div class='form-group'>
                            <label for='5'>Valsts:</label>
                            <input id='5' type='email' name='mail' value='{$row['country']}'  class='form-control'/>
                        </div>
                        <div class='form-group'>
                            <label for='6'>Pilsēta:</label>
                            <input id='6' type='email' name='mail' value='{$row['city']}'  class='form-control'/>
                        </div>
                        <div class='form-group'>
                            <label for='7'>Dzimšanas diena:</label>
                            <input id='7' type='email' name='mail' value='{$row['birthday']}'  class='form-control'/>
                        </div>
                        <input type='hidden' name='userID' value='{$row['userID']}'/>
                        <button class='btn btn-primary' name='saveData'>Saglabāt</button>
                    </form>
                ";
        }
    }
    function getUsr($nick,$pwd){
        $sql = "SELECT u.userID, u.nickname, u.password, r.roleID, p.rolename FROM users u INNER JOIN roles r ON u.userID = r.userID INNER JOIN permissions p ON r.roleID = p.roleID WHERE nickname='{$nick}' AND password='{$pwd}'";
        $rs = $this->con->query($sql);
        if($rs->num_rows!==0){
            while($row = $rs->fetch_assoc()) {
                $_SESSION['userID'] = $row['userID'];
                $_SESSION['username']=$row['nickname'];
                $_SESSION['role']=$row['roleID'];
                $_SESSION['rolename']=$row['rolename'];
            }
            $this->header('usrList.php');
        }
        else{
            echo "Nepareizs lietotājs vai parole";
        }
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
                        <table class='table profile' id='demo'>
                            <tr><td>Vārds: </td><td>{$row['firstname']}</td><td><button class='btn btn-warning' name='setU'>rediģēt</button></td></tr>
                            <tr><td>Uzvārds: </td><td>{$row['lastname']}</td><td><button class='btn btn-warning' name='setU'>rediģēt</button></td></tr>
                            <tr><td>e-pasts: </td><td>{$row['email']}</td><td><button class='btn btn-warning' name='setU'>rediģēt</button></td></tr>
                            <tr><td>Steam profils: </td><td>{$row['steamprofile']}</td><td><button class='btn btn-warning' name='setU'>rediģēt</button></td></tr>
                            <tr><td>Valsts: </td><td>{$row['country']}</td><td><button class='btn btn-warning' name='setU'>rediģēt</button></td></tr>
                            <tr><td>Pilsēta: </td><td>{$row['city']}</td><td><button class='btn btn-warning' name='setU'>rediģēt</button></td></tr>
                            <tr><td>Dzimšanas diena: </td><td>{$row['birthday']}</td><td><button class='btn btn-warning' name='setU'>rediģēt</button></td></tr>
                            <tr><td>Tiesības: </td><td>{$_SESSION['rolename']}</td><td></td></tr>
                            <tr><td colspan='3'><a href='./editProfile.php?user={$_SESSION['userID']}'>Labot</a></td><td></td><td></td></tr></table>
                    </div>";
        }
    }
    function getFavorites($id){
        $sql = "SELECT g.gameID, g.gname, g.platform, g.releasedate, g.rating FROM games g INNER JOIN favorites f ON g.gameID = f.gameID WHERE userID={$id}";
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
    function setMessege($Name, $Mail, $Messege){
        $sql = "INSERT INTO messeges(fname, email, messege) VALUES('{$Name}','{$Mail}','{$Messege}')";
        $this->con->query($sql);
    }
    function setComment($userID, $gameID, $content, $comdate){
        $sql = "INSERT INTO commentaries(userID, gameID, content, comdate) VALUES ('{$userID}','{$gameID}','{$content}','{$comdate}')";
        $this->con->query($sql);
    }
    function setUser($nick, $mail, $pass, $fname, $lname, $stm, $ctry, $cty, $bday){
        $sql = "INSERT INTO users(nickname, email, password, firstname, lastname, steamprofile, country, city, birthday) VALUES('{$nick}','{$mail}','{$pass}','{$fname}','{$lname}','{$stm}','{$ctry}','{$cty}','{$bday}')";
        $this->con->query($sql);
        echo $sql;
    }
    function setFavorite($id, $userID){
        $sql = "INSERT INTO favorites(userID, gameID) VALUES ({$userID},{$id})";
        $this->con->query($sql);
    }
    function editUsr($fname, $lname, $mail, $ID){
        $sql = "UPDATE users set firstname = '{$fname}', lastname = '{$lname}', email = '{$mail}' WHERE  userID='{$ID}'";
        $this->con->query($sql);
    }
    function deleteUsr($ID){
        $sql = "DELETE FROM users WHERE userID='{$ID}'";
        $this->con->query($sql);
    }
    function delFavorite($id){
        $sql = "DELETE FROM favorites WHERE gameID={$id}";
        $this->con->query($sql);
    }

}