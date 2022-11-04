<?php

session_start();


if($_SERVER['REQUEST_METHOD'] == "GET"){

    $id = $_GET['id'];

    $opfile = fopen("../data/product.csv","a+");


    while(!feof($opfile)){

        $getpro = fgetcsv($opfile);

        $new_pro[] =  $getpro;

    }

    for($i=0; $i < count($new_pro) ; $i++){

        if(in_array($id,$new_pro[$i])){

           unset($new_pro[$i]);
        }else{

            $new[] = $new_pro[$i];
            continue;
        }
    }

    fclose($opfile);

    $opfile = fopen("../data/product.csv","w");

    foreach($new as $pro){

        fputcsv($opfile,$pro);
    }
    fclose($opfile);

    header("location:../products.php");

    
}