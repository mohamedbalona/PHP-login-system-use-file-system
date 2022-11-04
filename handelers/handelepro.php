<?php

session_start();

include "../core/functions.php";
include "../core/validations.php";

if( checkmethod("POST")){

$proname = $_POST['proname'];
$Price = $_POST['Price'];


$errors= [];


if(!requireval($proname)){

    $errors[] = "Product name  is required";
}


if(!requireval($Price)){

    $errors[] = "Price  is required";
}


if(empty($errors)){

    $pro_file = fopen("../data/product.csv","a+");

    $id = rand(1,50);

    $pro_data = [$id,$proname,$Price];

    fputcsv($pro_file,$pro_data);

    $_SESSION['pro_data'] = [$pro_data];

    header("location: ../products.php");

    fclose($pro_file);
}else{

    $_SESSION['pro_errors'] = $errors;

    header("location: ../add_pro.php");
}





}