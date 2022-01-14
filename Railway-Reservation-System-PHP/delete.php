<?php

include 'connect.php';

$Train_No = $_GET['Train_NoD'];

$deletequery = "delete from train_details where Train_No=$Train_No";

$query = mysqli_query($con,$deletequery);

header('location:vt.php');

if($query){
    ?>
      
      <script>
        alert('Train Details Deleted Successfully')
      </script>
      <?php
    }else{
      ?>
      <script>
        alert('Train Details Not Deleted')
      </script>
      <?php

    
}