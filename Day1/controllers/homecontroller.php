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
$views = new views();
$login = new login();


if(!empty($_GET["action"])) {

    if($_GET["action"] == "loginForm"){
        $views->getView("view/header.php");
        $views->getView("view/login.php");

    }else if($_GET["action"] == "signAction"){
        $data = $login->checkLogin($_POST["username"], sha1($_POST["password"]), $_POST['img']);

        if($data){
            //set session
            $_SESSION['logingood'] = true;
            $uploaddir = './uploads/';
            $img = $uploadfile;
            $views->getView("view/protected.php");
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {

            }

        }else{
        //session
        $_SESSION['logingood'] = false;
         header("Location: /index.php?action=loginForm");

        }

        //$_SESSION['user'] = $_POST['user'];
        //$_SESSION['pass'] = sha1($_POST['pass']);


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