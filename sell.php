<?php
	include "header.html";
?>
<?php include ('savedata.php'); ?>
	<center>	
<div>
<form action="sell.php" method="POST">
	<?php include ('error.php');?>
	<table>
		<tr>
			<td>Book Serial:</td>
			<td><input  class="form1" type="text" name="id" value="<?php echo $ID;?>"></td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input  class="form1" type="text" name="name" value="<?php echo $name;?>"></td>
		</tr>
		<tr>
			<td>Contact Number:</td>
			<td><input class="form1" type="text" name="phone" value="<?php echo $phone;?>"</td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input class="form1" type="text" name="address" value="<?php echo $address;?>"</td>
		</tr>
		<tr >
			<td >Bkash  >>  01743387895</td>
			<td ><input class="form1" type="text" placeholder="give reference" name="bkash" value="<?php echo ($bkash);?>"</td>


		</tr>
	</table>
	<input class="button1" type="submit" value="Submit" name="submit">

</form>
</div>
</center>
<?php
	include "footer.html";
?>