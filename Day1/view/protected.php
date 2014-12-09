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
    <div class="row">
        <div class="large-12 medium-12 columns">
            <div class="large-4 medium-4 small-4 columns">
            <b>Username</b>
            </div>
            <div class="large-4 medium-4 small-4 columns">
            <b>Delete</b>
            </div>
            <div class="large-4 medium-4 small-4 columns">
            <b>Update</b>
            </div>

<?

foreach($data as $value){
    echo '<div class="large-4 medium-4 small-4 columns">'.$value['username'].'</div>';
    echo "<div class='large-4 medium-4 small-4 columns'><a href='index.php?action=deleteUser&id=".$value['id']."'>Delete</a></div>";
    echo "<div class='large-4 medium-4 small-4 columns'><a href='index.php?action=updateUser&id=".$value['id']."'>Update</a></div>";
}

?>
            </div>
        </div>