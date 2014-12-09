<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 11/24/14
 * Time: 10:52 AM
 */
session_start();
include('models/login.php');
include('models/views.php');
include('models/update.php');
include('models/delete.php');
include('models/users.php');
$views = new views();
$update = new update();
$delete = new delete();
$login = new login();
$users = new users();



if(!empty($_GET["action"])) {


    if($_GET["action"] == "loginForm"){
        $views->getView("view/header.php");
        $views->getView("view/login.php");

    }else if($_GET["action"] == "signAction"){

        $data = $login->checkLogin($_POST["username"], sha1($_POST["password"]));
        if($data){
            //set session

            $_SESSION['logingood'] = true;
            header("Location: ./index.php?action=addUserAction");

        }else{
        //session
        $_SESSION['logingood'] = false;
         header("Location: ./index.php?action=loginForm");
        }

    }else if($_GET["action"] == "addUserForm"){
        $views->getView("view/header.php");
        $views->getView("view/adduserform.php");

    }else if($_GET['action'] == "addUserAction"){
        $users->addUser($_POST["username"], sha1($_POST["password"]));
        $data = $users->getUsers();
        $views->getView("view/header.php");
        $views->getView("view/protected.php", $data);

    }else if($_GET['action'] == "deleteUser"){
        $id=$_GET['id'];
        $delete->deleteU($id);
        $views->getView("view/header.php");

        $data = $users->getUsers();
        $views->getView("./view/protected.php", $data);
    }

    else if($_GET['action'] == "updateUser"){
        $id = $_GET['id'];
        //echo $id; check for id number correct
        $fillForm = $update->fill($id);
        $views->getView("view/update.php");


    } else if($_GET['action'] == "updateAction"){
        $id = $_GET['id'];
        $username = $_POST['username'];
        $password = sha1($_POST['password']);
        $fil = $update->updateU($id, $username, $password);
        header("Location: ./index.php?action=addUserAction");



    }
    else {
        $views->getView("view/header.php");
    }
}
else{
    $views->getView("view/header.php");
    $views->getView("view/form.php");

}

?>