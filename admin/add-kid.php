<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
$studentname=$_POST['studentname'];
$mobile=$_POST['mobileno'];
$guardianname=$_POST['guardianname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$amountreq=$_POST['amountreq'];
$school=$_POST['school'];
$message=$_POST['message'];
$image = $_FILES['image']["name"];
$proof = $_FILES['proof']["name"];



$extension1 = substr($image,strlen($image)-4,strlen($image));
$extension2 = substr($proof,strlen($proof)-4,strlen($proof));

// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension1,$allowed_extensions))
{
echo "<script>alert('Image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
if(!in_array($extension2,$allowed_extensions))
{
echo "<script>alert('Image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename images
$image=md5($image).time().$extension1;
$proof=md5($proof).time().$extension2;
move_uploaded_file($_FILES["image"]["tmp_name"],"../images/".$image);
move_uploaded_file($_FILES["proof"]["tmp_name"],"../images/".$proof);
     


$status=0;
$sql="INSERT INTO  enrollkid(StudentName,GuardianName,MobileNumber,Age,Gender,AmountReq,School,image,proof,Message,status) VALUES('$studentname','$guardianname','$mobile','$age','$gender','$amountreq','$school','$image','$proof','$message','$status')";
$query = $dbh->prepare($sql);
$query->bindParam(':studentname',$studentname,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':guardianname',$guardianname,PDO::PARAM_STR);
$query->bindParam(':age',$age,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':amountreq',$amountreq,PDO::PARAM_STR);
$query->bindParam(':school',$school,PDO::PARAM_STR);
$query->bindParam(':image',$image,PDO::PARAM_STR);
$query->bindParam(':proof',$proof,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Your info submitted successfully";
}
else 
{
$error="Something went wrong. Please try again";
}
}
}


	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>FUNDISA| Admin Add Kid</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
<script language="javascript">
function isNumberKey(evt)
      {
         
        var charCode = (evt.which) ? evt.which : event.keyCode
                
        if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!=46)
           return false;

         return true;
      }
      </script>
</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Add Kid</h2>
						<div>
						<ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php" style="color:blue;">Home</a>
            </li>
            <li class="breadcrumb-item active">Add kid</li>
        </ol></div>
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Student Name<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="studentname" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Mobile No<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="tel" name="mobileno" onKeyPress="return isNumberKey(event)"  maxlength="10" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Guardian/Parent Name<span style="color:red">*</span> </label>
<div class="col-sm-4">
<input type="text" name="guardianname" class="form-control">
</div>
<label class="col-sm-2 control-label">Age<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="number" name="age" class="form-control" required>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Gender <span style="color:red">*</span></label>
<div class="col-sm-4">
<select name="gender" class="form-control" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="P">Prefer not to say</option>
</select>
</div>
<label class="col-sm-2 control-label">Amount needed<span style="color:red">*</span></label>
<div class="col-sm-4">


<select name="amountreq" class="form-control" required>
<option value="">Select</option>
<?php $sql = "SELECT * from  amountneeded";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
<option value="<?php echo htmlentities($result->AmountReq);?>"><?php echo htmlentities($result->AmountReq);?></option>
<?php }} ?>
</select>

</div>
</div>


											
<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">School</label>
<div class="col-sm-10">
<textarea class="form-control" name="school" ></textarea>
</div>
</div>

<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Additional information</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="message"> </textarea>
</div>
</div>

<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Upload child's image<span style="color:red">*</span></label>
<div class="col-sm-4">
<div><input type="file" name="image" name="image" class="form-control" required></div>
</div>
</div>

<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Upload proof<span style="color:red">*</span></label>
<div class="col-sm-4">
<div><input type="file" name="proof" class="form-control" required></div>
</div>
</div>





											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Enrol</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
						
					

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
</body>
</html>
<?php } ?>