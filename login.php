<?php

include "inc/header.php";
include "inc/nav.php";
?>




<form class="w-50 m-auto mt-5" action="handelers/handellogin.php" method="POST">
        <h1 class="text-center mb-5">Login</h1>


        <?php  if(isset($_SESSION['errors'])): ?>

        <?php foreach($_SESSION['errors'] as $error): ?>

    <div class="alert alert-danger text-center">

        <?php echo $error; ?>
    </div>



      <?php endforeach;
      
        unset($_SESSION['errors']);
      
      ?>


      <?php endif; ?>


      <?php  if(isset($_SESSION['error_login'])): ?>

<?php foreach($_SESSION['error_login'] as $error): ?>

<div class="alert alert-danger text-center">

<?php echo $error; ?>
</div>



<?php endforeach;

unset($_SESSION['error_login']);

?>


<?php endif; ?>



        


      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">email</label>
        <input type="text" name="email" class="form-control" id="exampleInputPassword1">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
      </div>

      

      <button type="submit" class="btn btn-primary">Register</button>
</form>




<?php include "inc/footer.php"; ?>



