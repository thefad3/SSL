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
        $views->getView("view/header.php");

            $uploaddir = './uploads/';
            $img = $uploadfile;
            $views->getView("view/protected.php");
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {

                $_SESSION['img'] = $uploadfile;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['pw'] = sha1($_POST['password']);
            }
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

}
else{
    $views->getView("view/header.php");
    $views->getView("view/form.php");

}

?>