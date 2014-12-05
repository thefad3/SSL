<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 11/24/14
 * Time: 11:21 AM
 */
if(!$_SESSION["logingood"]){

}
?>

<a href="index.php?action=addUserForm">Add User Form</a><br>

<?

foreach($data as $value){
    echo $value['username']."<a href='index.php?action=deleteUser&id=".$value['id']."'>Delete</a> <br>";
}

?>