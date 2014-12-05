<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 11/24/14
 * Time: 11:07 AM
 */

class login{

    public function checkLogin($username="", $password="", $img=""){

    $dbh = new PDO("mysql:host=localhost;dbname=ssl;port=8889", "root", "root");

    $stmnt = $dbh->prepare("select username, password from users where username = :username and password = :password");

        //$st->bindParam(':img',$img);
        //$sth->bindParam(':password',$password);


        $stmnt->execute(array(":username"=>$username,
                            ":password"=>$password));


        $result = $stmnt->fetchAll();
        //echo $stmnt->rowCount();
        return $result;
        //var_dump($result);


    }


}


?>