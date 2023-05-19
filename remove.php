<?php
include 'connection.php';
if(isset($_GET['rn'])){

    $id = $_GET['rn'];
            $sqla = "DELETE FROM `wishlist` WHERE id = $id";
    $resulta=mysqli_query($con,$sqla);
    if($resulta){
        //echo "sucess";
        header('location:desbord.php');
    }
}
