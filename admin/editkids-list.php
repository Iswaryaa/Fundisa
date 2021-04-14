<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_REQUEST['eid']))
	{
$eid=intval($_GET['eid']);
$status=1;
$sql = "UPDATE enrollkid SET status=:status WHERE  id=:eid";
$query = $dbh->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();

$msg="Record Successfully read";
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
	
	<title>FUNDISA | Kids List  </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
<style type="text/css">
 .pic{
     width:50px;
     height:50px;
 }
 .picbig{
     position:absolute;
     width:0px;
     -webkit-transition:width 0.3s linear 0s;
     transition:width 0.3s linear 0s;
     z-index:10;
 }
 .pic:hover + .picbig{
     width:150px;
 }
</style>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">>

						<h2 class="page-title">Kids List</h2>
						<div>
						<ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php" style="color:blue;">Home</a>
            </li>
            <li class="breadcrumb-item active">Kids list</li>
        </ol></div>
						<!-- Zero Configuration Table -->
						<div class="panel panel-primary">
							<div class="panel-heading">Kids Info</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<a href="download-records.php" style="color:blue; font-size:16px;">Download Kids List</a>
								<table id="zctb" class="display table table-striped table-dark table-bordered table-hover" cellspacing="0" width="100%">
									<thead class="thead-dark">
										<tr>
										<th>S.No</th>
										    <th>Student Pic</th>
											<th>Proof</th>
											<th>Student Name</th>
											<th>Mobile No</th>
											<th>Guardian/Parent Name</th>
											<th>Age</th>
											<th>Gender</th>
											<th>Amount Requested</th>
											<th>School</th>
											<th>Additional information </th>
											<th>action </th>
										</tr>
									</thead>
									
									<tbody>

<?php $sql = "SELECT * from  enrollkid ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td style="text-align:center;"><img src="../images/<?php echo $result->image;?>" width="50" height="50"> </td>
											<td>
                        <img class="pic" src="../images/<?php echo $result->proof;?>">
                        <img class="picbig" src="../images/<?php echo $result->proof;?>">
                        </td>
											<td><?php echo htmlentities($result->StudentName);?></td>
											
											<td><?php echo htmlentities($result->MobileNumber);?></td>
											<td><?php echo htmlentities($result->GuardianName);?></td>
											<td><?php echo htmlentities($result->Age);?></td>
											<td><?php echo htmlentities($result->Gender);?></td>
											<td><?php echo htmlentities($result->AmountReq);?></td>
											<td><?php echo htmlentities($result->School);?></td>
											<td><?php echo htmlentities($result->Message);?></td>
                                            <?php if($result->status==1)
{
	?><td>Verified<br />
		</td>
<?php } else {?>

<td><a href="editkids-list.php?eid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Can this be marked verified?')" >Pending</a><br />
	
</td>
<?php } ?>
										
										
                                            

										</tr>
										<?php $cnt=$cnt+1; }} ?>
									
									</tbody>
								</table>

						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>
	

<!-- Modal -->
<div class="modal fade" id="form_modal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="POST" action="save_user.php">
          <div class="modal-header">
            <h3 class="modal-title">Add User</h3>
          </div>
          <div class="modal-body">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="firstname" class="form-control" required="required"/>
              </div>
              <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="lastname" class="form-control" required="required" />
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" required="required"/>
              </div>
            </div>
          </div>
          <div style="clear:both;"></div>
          <div class="modal-footer">
            <button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
            <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
          </div>
          </div>
        </form>
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
	<script >
</body>
</html>
<?php } ?>
