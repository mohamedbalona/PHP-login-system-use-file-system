<?php

session_start();

include "../core/validations.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $namepor = $_POST['pro_update'];
    $pricepor = $_POST['price_update'];

    $id = $_GET['id'];

    $errors = [];

    // if(requireval($namepor)){

    //     $errors[] = "prodcuts is required" ;
    // }

    // if(requireval($pricepor)){

    //     $errors[] = "price is required" ;
    // }

    // echo $namepor . $pricepor;


 
        $opfile = fopen("../data/product.csv","a+");

        while(!feof($opfile)){

            $all_pro[] = fgetcsv($opfile);
        }

    for($i=0; $i < count($all_pro) -1 ; $i++){

        if(in_array($id,$all_pro[$i])){

            $all_pro[$i][1] = $namepor;
            $all_pro[$i][2] = $pricepor;

        }

        $new[] = $all_pro[$i];
    }

    
    fclose($opfile);

    $opfile = fopen("../data/product.csv","w");

    foreach($new as $pro){

        fputcsv($opfile,$pro);
    }

    header("location:../products.php");

   
}

