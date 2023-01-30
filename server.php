
<?php
	session_start();
	$username="";
	$email="";
	$password_1="";
	$password_1="";
	$errors=array();
	$db=mysqli_connect('localhost','root','','bookbikroy');
	if(isset($_POST['register'])){
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password_1=$_POST['password_1'];
		$password_2=$_POST['password_2'];
		if(empty($username)){
			array_push($errors, "Username is requried");
		}
		if(empty($email)){
			array_push($errors, "Email is requried");
		}
		if(empty($password_1)){
			array_push($errors, "Password is requried");
		}
		if($password_1!=$password_2){
			array_push($errors, "The two passwords do not maych");
		}
		if(count($errors)==0){
			$sql="INSERT INTO users (username,email,password) VALUES ('$username','$email','$password_1')";
			mysqli_query($db,$sql);
			$_SESSION['username']="$username";
			$_SESSION['success']="You are now loggin";
			header('location: index.php');
		}

	}
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if(empty($username)){
			array_push($errors, "Username is requried");
		}
		if(empty($password)){
			array_push($errors, "Password is requried");
		}
		if(count($errors) ==0){
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result=mysqli_query($db,$query);
			if(mysqli_num_rows($result)==1){
				$_SESSION['username']="$username";
			$_SESSION['success']="You are now loggin";
			header('location: index.php');
			}else{
				array_push($errors,"Username/Password is't match");
				header('location: login.php');
			}
		}
	}


?>
