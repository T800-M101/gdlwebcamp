<?php


   $conn = new mysqli('localhost','root','whateverpassword','gdlwebcamp');

   if($conn->connect_error){
     echo $error-> $conn->connect_error;
   }
 ?>
