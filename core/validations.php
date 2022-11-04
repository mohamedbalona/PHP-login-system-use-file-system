<?php

function requireval($inpute){

    if(empty($inpute)){
        return false;
    }

    return true;

}


function minval($inpute,$len){

    if(strlen($inpute) <  $len){

        return false;
    }

    return true;

}


function maxval($inpute,$len){

    if(strlen($inpute) > $len){

        return false;
    }

    return true;

}

function emailval($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){

        return false;
    }

    return true;
}


?>