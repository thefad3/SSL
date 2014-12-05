<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 11/24/14
 * Time: 11:07 AM
 */

class delete{

    public function deleteU($id=''){
        $dbh = new PDO("mysql:host=localhost;dbname=ssl;port=8889", "root", "root");
        $sth = $dbh->prepare('DELETE FROM users WHERE id = :id');
        $sth->bindParam(':id', $id, PDO::PARAM_STR);
        $sth->execute();
    }

}


?>