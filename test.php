<?php
	include "header.html";$a="";
?>
<?php if(isset($_POST['submit'])){
	echo ($a) ;
}?>
<form action="test.php" method="POST">
	name:<input type="text" name="name"  ><br>
	<input type="submit" value="ok" name='submit' <?php $a="270";?>>
</form>
<?php
	include "footer.html";
?>