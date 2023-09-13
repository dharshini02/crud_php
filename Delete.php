<?php
include('connection.php');
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];
	$query="DELETE FROM sign_in WHERE id=$id";
	$result=mysqli_query($conn,$query);
	if($result){
		header('display.php');
			}
	else{
		die(mysqli_error($conn));
	}
}

?>