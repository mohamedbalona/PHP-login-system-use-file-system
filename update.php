<?php

include "inc/header.php";
include "inc/nav.php";

?>











<form class="w-50 m-auto mt-5" action="handelers/update_pro.php?id=<?php echo $_GET['id'] ?>" method="POST">

    <?php
    

    $id = $_GET['id'];

    $opfile = fopen("data/product.csv","r");

    while(!feof($opfile))
{
    $pro[] = fgetcsv($opfile);
}    

for($i=0; $i < count($pro) -1; $i++){

    if(in_array($id,$pro[$i])){

        break;
    }
}
    
    
    
    
    
    ?>
        <h1 class="text-center mb-5">Update</h1>


      <div class="mb-3">

        <input type="text" value="<?php echo $pro[$i][1] ?>" name="pro_update" class="form-control" id="exampleInputPassword1">
      </div>

      <div class="mb-3">

        <input type="rext" value="<?php echo $pro[$i][2] ?>" name="price_update" class="form-control" id="exampleInputPassword1">
      </div>

      

      <button type="submit" class="btn btn-primary">update</button>
</form>
















<?php include "inc/footer.php"; ?>