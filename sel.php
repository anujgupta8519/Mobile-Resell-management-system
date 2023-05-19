<?php
include 'connection.php';
if(isset($_GET['rn'])){

	$id = $_GET['rn'];
	
		$sql = "select * from deactive where sno = '$id'";
$result = mysqli_query ($con, $sql);
$row = mysqli_fetch_assoc($result);
        $Name= $row['name'];
        $Aadhar= $row['adhar'];
        $Mobile=  $row['mobile'];
        $Email= $row['email'];
        $Password= $row['pass'];
        $CPassword= $row['cpass'];
        $gender = $row['gender'];
        $States = $row['states'];
        $City= $row['city'];
        $Address= $row['address'];
        $adharpic= $row['adharpic'];
        $time= $row['time'];
   $sqll= "INSERT INTO `registration`(`name`, `adhar`, `mobile`, `email`, `pass`, `copass`, `gender`, `states`, `city`, `address`, `adharpic`, `time`) VALUES ('$Name', '$Aadhar', '$Mobile', '$Email', '$Password', '$CPassword', '$gender' , '$States', '$City','$Address', '$adharpic', '$time')";
  $resultl = mysqli_query($con, $sqll);
  if ($resultl) {
    // code...
    //echo "true";
    	$sqla = "DELETE FROM `deactive` WHERE sno = $id";
	$resulta=mysqli_query($con,$sqla);
	if($resulta){
		//echo "sucess";
		header('location:index.php');
	}
    
  }else{
  	echo "string";}
 


		
	

		
	}
	
	

?>