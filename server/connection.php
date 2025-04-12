<?php 

   $conn = mysqli_connect('localhost','root','','ecomwebdb',3308);

   if(mysqli_connect_errno()){

     die("Database connection failed. " . mysqli_connect_error());
   }else{

     //echo "Connection successful.";
   }

?>