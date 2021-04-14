<?php
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
  {
$studentname=$_POST['studentname'];
$guardianname=$_POST['guardianname'];
$mobile=$_POST['mobileno'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$amountreq=$_POST['amountreq'];
$school=$_POST['school'];
$message=$_POST['message'];

//image
$image = $_FILES['image']["name"];
$proof = $_FILES['proof']["name"];


// Validation for allowed extensions .in_array() function searches an array for a specific value.

//rename images

$extension1 = substr($image,strlen($image)-4,strlen($image));
$extension2 = substr($proof,strlen($proof)-4,strlen($proof));
//wife image
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

move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$image);
     
move_uploaded_file($_FILES["proof"]["tmp_name"],"images/".$proof);

$status=0;


$sql="INSERT INTO  enrollkid(StudentName,GuardianName,MobileNumber,Age,Gender,AmountReq,School,image,proof,Message,status) VALUES('$studentname','$guardianname','$mobile','$age','$gender','$amountreq','$school','$image','$proof','$message','$status')";
$query = $dbh->prepare($sql);
$query->bindParam(':studentname',$studentname,PDO::PARAM_STR);
$query->bindParam(':guardianname',$guardianname,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':age',$age,PDO::PARAM_STR);
$query->bindParam(':gender',$gender,PDO::PARAM_STR);
$query->bindParam(':amountreq',$amountreq,PDO::PARAM_STR);
$query->bindParam(':school',$school,PDO::PARAM_STR);
$query->bindParam(':image',$image,PDO::PARAM_STR);
$query->bindParam(':image',$proof,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="The kid has enrolled successfully. The sponsor will contact you soon. Good luck!";
}
else 
{
$error="Something went wrong. Please try again in a moment";
}
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FUNDISA | Enrol kid</title>
    <link rel="stylesheet" href="chatbotstyle.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- ChatBot -->
<link rel="stylesheet" type="text/css" href="css/jquery.convform.css">
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.convform.js"></script>


    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .bg{

background-image:url("images/bg.png");
color:white;
border-radius: 15px;
}
.contain{
background-image:url("images/container.png");
color:black;
}
/*ChatBot*/
.chat_icon{
	position: fixed;
	bottom: 10;
	right: 30px;
	z-index: 1000;
	padding: 0;
	font-size: 120px;
	color: #000;
	cursor: pointer;
    
}
.chat_icon{
  /* Start the shake animation and make the animation last for 0.5 seconds */
  animation: shake 0.5s;
opacity:0.85;
  /* When the animation is finished, start again */
  animation-iteration-count: 3;
  animation-delay:2s;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
.chat_icon:hover{
  color:black;
  opacity:0.60;
}
.chat_box{
   
   border-radius: 5px;
  
   color:white;
   border-radius: 5px;
   
   border-top: 100px;
    width: 370px;
	height: 70vh;
	position: fixed;
	bottom: 10px;
	right: 30px;
	
	z-index: 1000;
	transition: all 0.3s ease-out;
	transform: scaleY(0);
}
.chat_box.active{
	transform: scaleY(1);
}
#messages{
	padding: 20px;
}
.my-conv-form-wrapper textarea{
	height: 30px;
	overflow: hidden;
	resize: none;
}
.hidden{
	display: none !important;
}
    </style>
    <style type="text/css">
 .col{
    background-color: black;
    color:white;
 }
 .col1{
    background-color: #778899;
    color:black;
 }
 
 .img{
     width=200px;
     height=300px;
 }
</style>
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

<body class="contain">



    <!-- Page Content -->
    
    <?php include('includes/header.php');?>
    <div class="chat_icon">
	<i class="fa fa-comments" aria-hidden="true"></i>
</div>
<div class="chat_box">
<div class="wrapper">
        
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header" >
                    <p>Hello, how can I help you?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type your queries in here.." required>
                <button id="send-btn">SEND</button>
            </div>
        </div>
    </div>
</div><br>
    <div class="container bg rounded">
    
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Enrol Kid</h1>
         
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Enrol Kid</li>
        </ol>
            <?php if($error){?><div class="errorWrap col1"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap col1"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <!-- Content Row -->
        <form action="" name="enroll" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Student Name<span style="color:red">*</span></div>
<div><input type="text" name="studentname" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Guardian/Parent Name<span style="color:red">*</span></div>
<div><input type="text" name="guardianname" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Contact Number<span style="color:red">*</span></div>
<div for="phone"><input type="tel" name="mobileno" id="phone" onKeyPress="return isNumberKey(event)"  maxlength="10" class="form-control" required></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Age of the child (Enter a number between 6 & 17)<span style="color:red">*</span></div>
<div><input type="number" name="age" class="form-control" required></div>
</div>


<div class="col-lg-4 mb-4">
<div class="font-italic">Gender of the child<span style="color:red">*</span></div>
<div><select name="gender" class="form-control" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Prefer not to say">Prefer not to say</option>
</select>
</div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">Amount needed (Approximately)<span style="color:red">*</span> </div>
<div><select name="amountreq" class="form-control" required>
<?php $sql = "SELECT * from  amountneeded ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
<option value="<?php echo htmlentities($result->AmountReq);?>"><?php echo htmlentities($result->AmountReq);?></option>
<?php }} ?>
</select>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">School</div>
<div><textarea class="form-control" name="school"></textarea></div>
</div>

<div class="col-lg-8 mb-4">
<div class="font-italic">Additional Information about kids (Achievements, Disabilities etc)</div>
<div><textarea class="form-control" name="message" required> </textarea></div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Upload child's image<span style="color:red">*</span></div>
<div><input type="file" name="image" name="image" class="form-control" required></div>
</div>


<div class="col-lg-8 mb-4">
<div class="font-italic">Upload proof (Bonafide, Marksheet, Certificates etc) <span style="color:red">*</span></div>
<div><input type="file" name="proof" class="form-control" required></div>





<div class="row">
<div class="text-center col-lg-6 mb-4">
<div><br></div>
<div><input type="submit" name="submit" class="text-center btn btn-danger btn-lg" value="ENROL" style="cursor:pointer"></div>
</div> </form>
</div>

</div>
</div>


</div><br>
<br><br><br>
        <!-- /.row -->

        <!-- /.row -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
	$('.chat_icon').click(function() {
		$('.chat_box').toggleClass('active');
	});

	$('.my-conv-form-wrapper').convform({selectInputStyle: 'disable'})
});

    </script>
    <script>
     $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $reply = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($reply);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    
    </script>
   
</body>
<?php include('includes/footer.php');?>
</html>
