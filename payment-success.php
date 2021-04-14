<?php
if(isset($_GET["payment_status"]) && ($_GET["payment_status"] == "Failed")) {
    header("location: pindex.php");
}

?>
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

    <title>FUNDISA</title>
    <link rel="stylesheet" href="chatbotstyle.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

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
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
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
 .col{
    background-color: black;
    color:white;
 }
 .col1{
    background-color: #C41E3A;
    color:white;
    border-radius:15px;
 }

 
 .img{
     width=200px;
     height=300px;
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
	bottom:10;
	right: 30px;
	z-index: 1000;
	padding: 0;
	font-size: 120px;
	color: #000;
	cursor: pointer;
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
	bottom: 0px;
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
</head>

<body class="contain">

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
<div>
<br>
    <!-- Navigation -->


<!--Chat bot end-->
   
    <!-- Page Content -->
    
    <div class="container bg rounded">
    <?php include('includes/header1.php');?></div><br>
    <div class="container col1 rounded">
        <br>
      <h3 class="text-center"> Payment Success. Thank you so much for contributing to a greater cause!<i class="fa fa-heart"></i></h3>
      <br>
    </div>
    <div class="container bg rounded">
        <h1 class="my-5"><br>Sponsor the education of a child</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a style="color:grey;">We are just a connecting hub between kids who need education and people who are willing to help. We try our best to not share the false information. Please make sure to check the proof submitted by the kid once for confirmation</a>
            </li>
            
        </ol>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-6 mb-6">
                <div class="contain card mb-3">
                    <h4 class="card-header contain" style="text-align:center;">Every child has the right to learn!</h4>
                   
                        <p class="card-text" style="padding-left:2%">UNESCO says 264 million children don't go to school. We believe unaffordablity to be one of the major cause for the denial of primary education. A kid should not be denied education just because they are poor. So, we act a connecting hub between kids in need and people who wish to help. We envision a future where no kid is denied of education and learing opportunities are available for all. <br> </p>
                </div>
            </div>
            <div class="col-lg-6 mb-6">
                <div class="card  mb-3 contain">
                    <h4 class="card-header contain" style="text-align:center;">How you could help?</h4>
                   
                        <p class="card-text" style="padding-left:2%">We have a number of kids enrolled, who are highly passionate to study but couldn't afford to go to school. You can pick a kid of your choice and sponsor their education(including tution fees, getting them books etc.) which could be of great help to them. You can contact them directly from the details provided on the profile. We will promote<br> SDG 4 ( Quality Education ) together.<br></p>
                </div>
            </div>
           
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        
        <h1>Meet the kids whom you could help</h1>
        <br>
        
        
        <?php include('includes/slider.php');?>
                   
 



        
        <!-- /.row -->

        <!-- Features Section -->
        
            
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
       
            <div class="col-md-4" text-align="center">
            <div class="font-weight-bold"><h5>Click here to donate!<h5><a class="btn btn-lg btn-danger btn-lg btn-block" href="pindex.php">Sponsor a kid</a></div>
                
                <br>
            </div>
        </div><br>
        <?php
include 'src/Instamojo.php';
$api = new Instamojo\Instamojo('test_688c0897f75d2f65b9268a0f5e4', 'test_1f88a798707eb2cd167759c74a5', 'https://test.instamojo.com/api/1.1/');
$payid = $_GET["payment_request_id"];
try {
    $response = $api->paymentRequestStatus($payid);
	 
     

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>
    </div>
    <!-- /.container -->
</div>
    <!-- Footer -->
  <?php include('includes/footer.php');?>

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

</html>
