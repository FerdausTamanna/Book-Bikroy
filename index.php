<?php
	include "header.html";
	include "server.php";
?>

	<div class="content" align="center">
		<?php if(isset($_SESSION['success'])):?>
			<div class="error success">
				<h3>
					<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif  ?>

		<?php if(isset($_SESSION["username"])):?>
			<p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
			<p><a href="index.php" style="color:red;" >Logout</a></p>
		<?php endif  ?>
	</div>

<?php
	include "footer.html";
?>