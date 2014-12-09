<?php
/**
 * Created by PhpStorm.
 * User: Chris-PC
 * Date: 12/8/2014
 * Time: 7:56 AM
 */
header("Content-type:application/json");
/*
$jsonfile = '{';
$jsonfile .= '"feeds":[';
$jsonfile .= '{"from":"joe","message":"hello"},';
$jsonfile .= '{"from":"mike","message":"hello"}';
$jsonfile .= ']';
$jsonfile .= '}';
*/

$jsonfile = array("feeds"=>array(array("from"=>"joe","message"=>"hello"),
                                    array("from"=>"mike","message"=>"hello")));

$myjson = json_encode($jsonfile);

file_put_contents('myjson.json', $myjson);

//echo $jsonfile;

?>