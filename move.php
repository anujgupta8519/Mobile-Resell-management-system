<?php
include 'connection.php';
if(isset($_GET['rn'])){

	$id = $_GET['rn'];
	
		$sql = "select * from registration where sno = '$id'";
$result = mysqli_query ($con, $sql);
$row = mysqli_fetch_assoc($result);
        $Name= $row['name'];
        $Aadhar= $row['adhar'];
        $Mobile=  $row['mobile'];
        $Email= $row['email'];
        $Password= $row['pass'];
        $CPassword= $row['copass'];
        $gender = $row['gender'];
        $States = $row['states'];
        $City= $row['city'];
        $Address= $row['address'];
        $adharpic= $row['adharpic'];
        $time= $row['time'];
   $sqll= "INSERT INTO `deactive`(`name`, `adhar`, `mobile`, `email`, `pass`, `cpass`, `gender`, `states`, `city`, `address`, `adharpic`, `time`) VALUES ('$Name', '$Aadhar', '$Mobile', '$Email', '$Password', '$CPassword', '$gender' , '$States', '$City','$Address', '$adharpic', '$time')";
  $resultl = mysqli_query($con, $sqll);
  if ($resultl) {
    // code...
    //echo "true";
    	$sqla = "DELETE FROM `registration` WHERE sno = $id";
	$resulta=mysqli_query($con,$sqla);
	if($resulta){
		//echo "sucess";
		header('location:index.php');
	}
    
  }else{
  	echo "string";}
 


		
	

		
	}
	
	

?>