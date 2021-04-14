<?php
error_reporting(0);
include('includes/config.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <title>FUNDISA | Sponser a kid</title>
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
<script type="text/javascript" src="js/custom.js"></script>

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
    color:black;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
/*ChatBot*/
.chat_icon{
	position: fixed;
	bottom:10;
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
   
  
  
   color:white;
   border-radius: 15px;
   
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
    color: red;
 }
 
</style>
<style type="text/css">
 .col{
    background-color: black;
    color:white;
 }
 .col1{
    background-color: #778899;
    color:white;
 }
 
 .img{
     width=200px;
     height=300px;
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
    
	 cursor: pointer;
     
     background-blend-mode: darken;
     -webkit-transition:width 0.3s linear 0s;
     transition:width 0.3s linear 0s;
     z-index:10;
 }
 .pic:hover + .picbig{
     width:320px;
 }
 body{
     overflow-x:hidden;
 }
</style>
</head>

<body class="contain" style="min-height:100vh;">

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
</div>
<!-- ChatBot end -->
<div>
    <!-- Page Content -->
    <div class="container bg rounded">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Search Kid</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Search Kid</li>
        </ol>
            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap bg"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <!-- Content Row -->
        <form name="sponsor" method="post" enctype="multipart/form-data">
<div class="row">



<div class="col-lg-4 mb-4">
<div class="font-italic">Filter based on amount range<span style="color:red">*</span> </div>
<div><select name="AmountReq" class="form-control" required>
<?php $sql = "SELECT DISTINCT AmountReq from  enrollkid ORDER BY AmountReq";
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


<div class="col-lg-4 mb-4">
<div class="font-italic">Filter based on age group<span style="color:red">*</span> </div><picture></picture>
<div><select name="Age" class="form-control" required>
<?php $sql = "SELECT DISTINCT Age from  enrollkid ORDER BY Age";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
<option value="<?php echo htmlentities($result->Age);?>"><?php echo htmlentities($result->Age);?></option>
<?php }} ?>
</select>
</div>

</div>

<div class="row">
<div class="col-lg mb-4">
<div class="font-italic">Press</div>
<div ><input type="submit" name="submit" class=" btn btn-danger" value="SEARCH" style="cursor:pointer"></div>
</div>
</div>
       <!-- /.row -->
</form>   

        <div class="row">
                   <?php 
if(isset($_POST['submit']))
{
$status=1;
$amountreq=$_POST['AmountReq'];
$location=$_POST['Age'];
$sql = "SELECT * from enrollkid where (status=:status and AmountReq=:AmountReq) ||  (Age=:Age)";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':AmountReq',$amountreq,PDO::PARAM_STR);
$query->bindParam(':Age',$location,PDO::PARAM_STR);

$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
    
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100 contain">
                    <a href="student-detail.php"><img class="card-img-top img-fluid" src="images/cheader.png" alt=""></a>
                    <div class="card-block" style="text-align:center;">
                    
                    <div style="text-align:center;"><img src="images/<?php echo $result->image;?>"width="250" height="250"></div>
                        
                        <h4 class="card-title col" style="text-align:center;"><a><?php echo htmlentities($result->StudentName);?></a></h4>
                        <p class="card-text"><b>  Guardian/Parent Name :</b> <?php echo htmlentities($result->GuardianName);?></p>
                        
                             </p>

<p class="card-text"><b>  Contact Number :</b> <abbr title="Phone"><a href="tel"  style="color:red;"> <?php echo htmlentities($result->MobileNumber);?></a></p>
<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b> Age:</b> <?php echo htmlentities($result->Age);?></p>
<p class="card-text"><b> Amount needed:</b> <?php echo htmlentities($result->AmountReq);?></p>
<div id="port_pop_pic_bg"></div>
	<div id="port_pop_pic"></div>
<div><b>  Proof:</b>
                        <img class="pic" src="images/<?php echo $result->proof;?>">
                        <img class="picbig" src="images/<?php echo $result->proof;?>">
                        </div>
</p>


                    </div>
                </div>
            </div>
            
            <?php }}
else
{
echo htmlentities("No Record Found");

}


            } ?>
          
         


        </div>



</div>
</div>
     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</script>
 
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
   <script type="text/javascript">
	portfolioList = document.querySelectorAll('.picbig');
	portfolioList.forEach(function(portfolioPic) {
		portfolioPic.addEventListener('click',function(){
			bg = this.style.backgroundImage;
			document.getElementById('port_pop_pic_bg').classList.add("active")
			document.getElementById('port_pop_pic').style.backgroundImage = bg
			document.getElementById('port_pop_pic').classList.add("active")
		});	
	})
	document.getElementById('port_pop_pic_bg').addEventListener('click',function(){
			document.getElementById('port_pop_pic_bg').classList.remove("active")
			document.getElementById('port_pop_pic').classList.remove("active")
	})
</script>
</body>
<?php include('includes/footer.php');?>
</html>
