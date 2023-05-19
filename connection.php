<?php
$username="root";
$password="";
$server='localhost:3306';
$db='project';
$con=mysqli_connect($server,$username,$password,$db);
if ($con) {
	?>

<?php

}
else{
die("no connection". mysqli_connect_error());
}
?>