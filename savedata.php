<?php 

	$mydb=mysqli_connect('localhost','root','','bookbikroy');
	$name="";
	$phone="";
	$address="";
	$bkash="";
	$ID="";
	$errors=array();
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$bkash=$_POST['bkash'];
		$ID=$_POST['id'];
		if(empty($ID)){
			array_push($errors,"Book serial id is requried");
		}
		if(empty($name)){
			array_push($errors,"Name is requried");
		}
		if(empty($phone)){
			array_push($errors,"Phone Number is requried");
		}
		if(empty($address)){
			array_push($errors,"Address is requried");
		}
		if(empty($bkash)){
			array_push($errors,"Payment reference is requried");
		}
		if(count($errors)==0){
			$sql="INSERT INTO selllist(Name,Phone,Address,Reference,Bookid) 
			VALUES('$name','$phone','$address','$bkash','$ID')";
			mysqli_query($mydb,$sql);
			$name="";
			$phone="";
			$ID="";
			$address="";
			$bkash="";
			 include "payment.php"; 
		}
	}
?>