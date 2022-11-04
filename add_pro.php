<?php include "inc/header.php"; ?>
<?php include "inc/nav.php"; ?>




<form class="w-50 m-auto mt-5" action="handelers/handelepro.php" method="post">

        <?php if(isset($_SESSION['pro_errors'])): ?>

            <?php foreach($_SESSION['pro_errors'] as $error): ?>

                <div class="alert alert-danger text-center">

                    <?php echo $error; ?>
                </div>


            <?php endforeach; 
            
                unset($_SESSION['pro_errors']);
            ?>   
            
            


        <?php endif; ?>    

        
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Product Name</label>
        <input type="text" name="proname" class="form-control" id="exampleInputPassword1">
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Price</label>
        <input type="text" name="Price" class="form-control" id="exampleInputPassword1">
      </div>


      <button type="submit" class="btn btn-primary">Add</button>
</form>









<?php include "inc/footer.php"; ?>