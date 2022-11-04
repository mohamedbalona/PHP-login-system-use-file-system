<?php

session_start();
include "../core/functions.php";
include "../core/validations.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){

 $email = $_POST['email'];
 $pass = $_POST['pass'];

 $errors = [];



 if(!requireval($email)){

   $errors[] = "Email Is Require";
}




if(!requireval($pass)){

   $errors[] = "Password Is Require";
}


 
if(empty($errors)){
   $users_file = fopen("../data/users.csv","a+");

 while (($data = fgetcsv($users_file, filesize("../data/users.csv"), ",")) !== FALSE) 
            {
               $arr [] = $data;
      
           
            }

            for($i=0; $i < count($arr); $i++){

               $emails[] = $arr[$i][1];
            }

            for($i=0; $i < count($arr); $i++){

               $passwords[] = $arr[$i][3];
            }


            if(in_array($email, $emails) && in_array(sha1($pass), $passwords)){

               $_SESSION['email-login'] = $email;
               $_SESSION['pass-login'] = sha1($pass);

               header("location: ../index.php");

               die();
            }else{

               $_SESSION['error_login'] = ["This account does not exist"];

               header("location: ../login.php");

            }

}else{

   $_SESSION['errors'] = $errors;

   header("location: ../login.php");

   die();
}
            


 

 
}else{

   header("location: ../login.php");
}