<?php

function checkmethod($method){

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        return true;
    }

    return false;
}


function checkinpute($inpute){

    if(isset($_POST[$inpute])){
        return true;
    }

    return false;
}


