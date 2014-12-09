<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 11/24/14
 * Time: 11:07 AM
 */

class update{
    public function fill($id){
        $dbh = new PDO("mysql:host=localhost;dbname=users;port=8889", "root", "root");

        $stmnt = $dbh->prepare("SELECT * FROM users WHERE id = :id");
        $sth->bindParam(":id", $id, PDO::PARAM_STR);
        //$st->bindParam(':img',$img);
        //$sth->bindParam(':password',$password);
        $stmnt->execute();
        $re = $stmnt->fetchAll();
        //echo $stmnt->rowCount();
        return $re;

    }


    public function updateU($id='', $username='', $password=''){
        $dbh = new PDO("mysql:host=localhost;dbname=users;port=8889", "root", "root");

        $sth = $dbh->prepare("UPDATE users SET username = :name, password = :pass, img = :img WHERE id = :id");
        $sth->bindParam(":name", $username, PDO::PARAM_STR);
        $sth->bindParam(":pass", $password, PDO::PARAM_STR);
        $sth->bindParam(":id", $id, PDO::PARAM_STR);
        $sth->execute();
        $result = $sth->fetchAll();
        //echo $stmnt->rowCount();
        return $result;
    }

}


?>