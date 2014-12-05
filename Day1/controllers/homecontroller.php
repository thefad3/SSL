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
include('models/delete.php');
include('models/users.php');
$views = new views();
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
            $views->getView("view/protected.php", $data);
            $data = $users->getUsers();

        }else{
        //session
        $_SESSION['logingood'] = false;
         header("Location: /index.php?action=loginForm");
        }
        //$_SESSION['user'] = $_POST['user'];
        //$_SESSION['pass'] = sha1($_POST['pass']);
    }else if($_GET["action"] == "addUserForm"){

        $views->getView("view/header.php");
        $views->getView("view/adduserform.php");

    }else if($_GET['action'] == "addUserAction"){
        $users->addUser($_POST["username"], $_POST["password"]);
        $data = $users->getUsers();
        $views->getView("view/protected.php", $data);

    }else if($_GET['action'] == "deleteUser"){
        $id=$_GET['id'];
        $delete->deleteU($id);
        $views->getView("view/protected.php");
    }




    if ($_GET["action"] == "registerForm") {

        $views->getView("view/header.php");
        $views->getView("view/form.php");

    }
    else if($_GET["action"] == "registerAction"){

        $views->getView("view/header.php");

        $data = $_POST;
        $views->getView("view/results.php", $data);

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