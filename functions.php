<?php
function getPassword($length, $passwordChar){
    $password='';
    if(!empty($length)){
        for($i =0; $i < $length; $i++){
            $key = rand(1, 3);
            $char = rand(0, sizeof($passwordChar[$key] )- 1);
            $password .= $passwordChar[$key][$char];
        }
        return $password;
    }
}
function clear($QLenght, $ReqLength){
    $QLenght='';
    $ReqLength='';
}
?>