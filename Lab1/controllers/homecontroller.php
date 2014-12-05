<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 11/24/14
 * Time: 10:52 AM
 */
include('models/views.php');
$views = new views();


if(!empty($_GET["action"])) {

    if ($_GET["action"] == "registerForm") {

        $views->getView("view/header.php");
        $views->getView("view/form.php");

    }
    else if($_GET["action"] == "registerAction"){

        $views->getView("view/header.php");

        $data = $_POST;
        $state = $_POST['state'];
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