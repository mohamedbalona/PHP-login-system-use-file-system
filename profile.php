<?php

include "inc/header.php";
include "inc/nav.php";

?>


<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5 border p-2">

            <h2 class="border my-2 bg-success p-2"> <?php echo $_SESSION['email-login'] ?> </h2>
            <h2 class="border my-2 bg-primary p-2"> <?php echo $_SESSION['pass-login'] ?> </h2>

        </div>
    </div>
</div>



<?php include "inc/footer.php"; ?>



