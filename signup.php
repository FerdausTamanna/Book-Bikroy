<?php
	include "header.html";
	include ('server.php');
?>
<div class="header1" align="center"  style="width: 30%;
    margin: 51px auto 0px;
    color: #eef3ea;
    background: #5F9EA0;
    text-align: center;
    border: 1px solid #B0C4DE;
    border-bottom: none;
    border-radius: 20px 20px 0px 0px;
    padding: 20px;">
	<h2>Register</h2>
</div>
<form method="post" action="signup.php" style="width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #ffffff;
    background: #428c74;
    border-radius: 0px 0px 10px 10px;">
	<?php include ('error.php');?>
	<div class="input-group" style="margin: 10px 0px 10px 0px;">
		<label style="display: block;text-align: left;margin: 3px;">Username</label>
		<input type="text" name="username" value="<?php echo $username;?>" style="height: 30px;
    																	width: 93%;
  																	     padding:5px 10px;
  																		 font-size: 16px;
   																		 border-radius: 5px;
   																		 border: 1px solid gray;">
	</div>
	<div class="input-group" style="margin: 10px 0px 10px 0px;" >
		<label style="display: block;text-align: left;margin: 3px;">Email</label>
		<input type="text" name="email" value="<?php echo $email;?>" style="height: 30px;
    																	width: 93%;
  																	     padding:5px 10px;
  																		 font-size: 16px;
   																		 border-radius: 5px;
   																		 border: 1px solid gray;">
	</div>
	<div class="input-group" style="margin: 10px 0px 10px 0px;">
		<label style="display: block;text-align: left;margin: 3px;">Password</label>
		<input type="password" name="password_1"  style="height: 30px;
    																	width: 93%;
  																	     padding:5px 10px;
  																		 font-size: 16px;
   																		 border-radius: 5px;
   																		 border: 1px solid gray;">
	</div>
	<div class="input-group" style="margin: 10px 0px 10px 0px;">
		<label style="display: block;text-align: left;margin: 3px;">Confirm Password</label>
		<input type="password" name="password_2" style="height: 30px;
    																	width: 93%;
  																	     padding:5px 10px;
  																		 font-size: 16px;
   																		 border-radius: 5px;
   																		 border: 1px solid gray;">
	</div>
	<div class="input-group"style="margin: 10px 0px 10px 0px;">
		<button type="submit" name="register" class="btn" style="padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;">Register</button>
	</div> 
	<p>
		Already a member?<a href ="login.php">Sign in</a>
	</p>
</form>

<?php
	include "footer.html";
?>