<?php
session_start();
?>

<div class="brand clearfix">

	<a href="../index.php" style="font-size: 20px; padding-top:1%; color:#fff"><br>FUNDISA - SPONSOR THE EDUCATION OF A CHILD </a>  
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			
			<li class="ts-account">
				<a href="#"><img src="img/avatar.jpg" class="ts-avatar hidden-side" alt=""> <?php echo $_SESSION['username'];?> <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="change-password.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>