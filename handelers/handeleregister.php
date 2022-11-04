<?php

session_start();

include "../core/functions.php";
include "../core/validations.php";

if(checkmethod("POST") && checkinpute("name")){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];

    $errors = [];

    if(!requireval($name)){

        $errors[] = "Name Is Require";
    }elseif(!minval($name,3)){

        $errors[] = "name must be greater than 3 chars";
        
    }elseif(!maxval($name,25)){

        $errors[] = "name must be smaller than 25 chars";
    }




    if(!requireval($phone)){

        $errors[] = "phone Is Require";
    }




    if(!minval($pass,6)){

        $errors[] = "Password must be greater than 6 chars";

    }elseif(!maxval($pass,20)){

        $errors[] = "Password must be smaller than 25 chars";
    }elseif(!requireval($pass)){

        $errors[] = "Password Is Require";
    }




    if(!minval($phone,6)){

        $errors[] = "phone must be greater than 6 chars";

    }elseif(!maxval($phone,20)){

        $errors[] = "phone must be smaller than 25 chars";
    }


    if(!requireval($email)){

        $errors[] = "Email Is Require";
    }elseif(!emailval($email)){

        $errors[] = "Email type a valid email";
    }




      

    if(empty($errors)){

        $file_users = fopen("../data/users.csv","a+");

        $data = [$name,$email,$phone,sha1($pass)];

        fputcsv($file_users,$data);

        $_SESSION['auth'] = [$name,$email];

        header("location: ../login.php");

        die();

    }else{
        $_SESSION['errors'] = $errors;
        header("location: ../register.php");
        die();

    }

    
    

}else{

    header("location: ../register.php");
}