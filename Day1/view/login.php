<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 12/1/14
 * Time: 2:02 PM
 */



?>


<form enctype="multipart/form-data" action="index.php?action=signAction" method="POST">
    <label>Username</label>
    <input type="text" name="username"><br>
    <label>Password</label>
    <input type="password" name="password"><br>
    <label>Upload Avatar:</label>
    <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>