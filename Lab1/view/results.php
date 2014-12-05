<?php
/**
 * Created by PhpStorm.
 * User: chrismac
 * Date: 11/24/14
 * Time: 11:21 AM
 */
$fla = strtolower('FL');
$nyc = strtolower('NY');
$ri = strtolower('RI');
$na = strtolower('NA');
$state = $data['state'];



foreach ($data as $key => $value){


    echo '<div class="row"><div class="large-8 medium-8 columns" id="formStyle"><label>'.strtoupper($key).'</label>'.$value.'</div></div>';




    if($key == 'state'){
        if($state == $fla){
            $sunshine = "Hey, you live in Flordia! The Sunshine State";
            $ny = $sunshine." - FL"."<br>";
            echo $ny;
        }
        if($state == $ri){
            $rhode = "Hey you live in Rhode Island, Awesome!";
            $ri = $rhode." - RI"."<br>";
            echo $ri;
        }
        if($state == $na){
            $none = "NADA, You dont live anywhere";
            $na = $none."<br>";
            echo $na;
        }
        else if($state == $nyc){
            $empire = "Empire State of mind, you live in New York!";
            $fl = $empire." - NYC"."<br>";

            echo $na;
        }

    }

}



?>