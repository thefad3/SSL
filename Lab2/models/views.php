<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 11/24/14
 * Time: 11:07 AM
 */

class views{

    public function getView($filename="", $data=array()){

        include $filename;

    }


}


?>