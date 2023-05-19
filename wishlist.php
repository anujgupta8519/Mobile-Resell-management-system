<?php
session_start();

include 'connection.php';
if(isset($_GET['rn'])){
    $id = $_GET['rn'];
    $adhar = $_SESSION['adhar'];

            $sql = "SELECT * FROM `wishlist` WHERE `mobileid` = '$id' and `adhar` = '$adhar'";
$result = mysqli_query ($con, $sql);
$count = mysqli_num_rows($result);
if ($count>0) {
    ?>
    <script type="text/javascript">
        alert("This Mobile already Save");
        location.replace("http://localhost/boot/usermobile.php");
    </script>

    <?php
    
}else{
    
    $sall = "INSERT INTO `wishlist`(`mobileid`, `adhar`) VALUES ('$id', '$adhar') ";
     $resultl = mysqli_query ($con, $sall);
if ($resultl) {
    // code...
    ?>
        <script type="text/javascript">
        alert("This Mobile is save");
        location.replace("http://localhost/boot/usermobile.php");
    </script>

    <?php
}
}
 
 
}
 ?>



