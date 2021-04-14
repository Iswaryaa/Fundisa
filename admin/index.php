<?php
session_start();

include('includes/config.php');
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$sql ="SELECT UserName,Password FROM admintb where UserName = '$username' AND Password ='$password' ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{  $_SESSION['alogin']=$_POST['username'];
	$_SESSION['username'] = $username;
	echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} 
else{
	echo "<script>alert('Invalid Details');</script>";
}

}

?>
<!doctype html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>FUNDISA | Admin Login</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<style>
		
		.container i {
    margin-left: -30px;
    cursor: pointer;
}
body{
	overflow:hidden;
}
</style>
</head>

<body>
	
	<div class="login-page bk-img" style="background-image: url(img/bbanner.png);">
		
			<div class="container">
				
					<div class="col-md-6 col-md-offset-3 ">
					<h1 class="text-center text-bold mt-4x">FUNDISA SIGN IN</h1>
					<div class="row pt-2x pb-3x bk-light  bk-img" style="background-image: url(img/bbanner.png);">
					<div class="col-md-6 col-md-offset-2">
					<form method="post">
					<div class="col-md-6 col-md-offset-3 ">	
					<div class="container">

						
                      
					<div><label form="" class="text-uppercase text-lg "> Username </label></div>
						<div><input type="text" name="username" ></div>
        
    

					</div>
						<div class="container">
<br>
						
					<div>	<label form="" class="text-uppercase text-lg">Password</label></div>
    <div>    <input type="password" name="password" id="password">
        <i class="far fa-eye" id="togglePassword"></i></div>
    

					</div><br>
					<div class="container">
				<div>	<button class="btn btn-primary btn-lg" style="text-align:center;" name="login" type="submit">LOGIN</button>
				<a class="btn btn-lg btn-default btn-lg " href="index.php">CANCEL</a>
				</div></div>
</div>	
					<br><br><br><br>
</form>
							</div>
				
			
		</div>
	</div>
</div>
</div>
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
    <script> 
	togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
	  </script>
</body>

</html>