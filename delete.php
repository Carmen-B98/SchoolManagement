<?php
 //include connection file
 include "showDB.php";
 
 $sql2="DELETE FROM elev WHERE id_elev='{$_GET['id']}'";
 $query=mysqli_query($conn, $sql2)or die(mysqli_error($conn));
 
header('location:home.php');
 ?>
