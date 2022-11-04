<?php include "inc/header.php"; ?>
<?php include "inc/nav.php"; ?>





<div class="container mt-5">
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

        <?php

                $file_pro = fopen("data/product.csv","a+");

                while(!feof($file_pro)){

                    $all_pro = fgetcsv($file_pro);

                    $products[] = $all_pro;
                } 
                
                $count_pro =  count($products) -1;

                for($i=0; $i < $count_pro; $i++):
                
                ?>

                <tr>
                    <td><?php echo $products[$i][0] ?></td>
                    <td><?php echo $products[$i][1] ?></td>
                    <td><?php echo $products[$i][2] ?></td>
                    <td>
                        <a class="btn btn-success" href="update.php?id=<?php  echo $products[$i][0] ?>">Update</a>
                        <a class="btn btn-danger" href="handelers/delete_pro.php?id=<?php  echo $products[$i][0] ?>">Delete</a>
                    </td>
                </tr>
                    <?php endfor; ?>
   
    
  </tbody>


</table>

<a href="add_pro.php">Add product</a>
</div>




<?php include "inc/footer.php"; ?>