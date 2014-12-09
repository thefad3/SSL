<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 11/24/14
 * Time: 11:07 AM
 */

class users{

    public function getUsers(){

    $dbh = new PDO("mysql:host=localhost;dbname=users;port=8889", "root", "root");

    $stmnt = $dbh->prepare("SELECT * FROM users");
        //$st->bindParam(':img',$img);
        //$sth->bindParam(':password',$password);
        $stmnt->execute();
        $result = $stmnt->fetchAll();
        //echo $stmnt->rowCount();
        return $result;
    }
    public function addUser($username='', $password=''){
    $dbh = new PDO("mysql:host=localhost;dbname=users;port=8889", "root", "root");
    $stmnt = $dbh->prepare("insert into users (username, password) values(:username, :password)");
    $stmnt->execute(array(":username"=>$username,
                            ":password"=>$password));
}



//delete user

//updateUser

}


?>