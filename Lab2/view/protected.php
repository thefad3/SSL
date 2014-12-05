<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 11/24/14
 * Time: 11:21 AM
 */
if(!$_SESSION["logingood"]){
    $image = '<img width="100" src="'.$_SESSION['img'].'">';


    echo '<div class="row"><div class="large-12 medium-12 columns" id="formStyle">';
    echo '<h3>Your Profile</h3>';
    echo '<div>'.$image.'</div>';
    echo '<div><h5>Your Name: '.$_SESSION['name'].'</h5></div>';

    echo '<div><h5>Your Password (SHA1): '.$_SESSION['pw'].'</h5></div>';
    echo '</div></div>';
}




?>