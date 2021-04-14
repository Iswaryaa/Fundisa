<!DOCTYPE html>
<html lang="en">
	<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FUNDISA | Make Payment </title>
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
    
    @media (max-width: 706px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
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
    <?php include('includes/header.php');?>
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
    <div class="container bg rounded">
    
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Make payment</h1>
         
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Make Payment</li>
        </ol>
		

        <!-- Content Row -->
		<form action="pay.php" method="POST" accept-charset="utf-8">
		<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Name<span style="color:red">*</span></div>
<div><input type="text" class="form-control" name="name"  required></div>	 
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Mobile nuber<span style="color:red">*</span></div>
<div><input type="tel" class="form-control" name="phone"  onKeyPress="return isNumberKey(event)"  maxlength="10" required> </div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Email<span style="color:red">*</span></div>
<div><input type="email" class="form-control" name="email" > </div>
</div>
</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic">Amount<span style="color:red">*</span></div>
<div><input type="text" class="form-control" name="amount" Value="100"></div>
</div>




<div class="col-lg-4 mb-4">
<div class="font-italic">Purpose</div>
<div><input type="text" class="form-control" name="purpose" value="Donating to fundisa" readonly></div>




<div class="col-lg-4 mb-4">
<div><br></div>
<div><input type="submit" name="pay" class="btn btn-danger btn-lg" value="CLICK HERE TO DONATE"></div>








        </form>
</div>
</div>


</div>

    </div>
		</div>
		<br><br><br><br><br><br><br><br><br>
  </body>
   <?php include('includes/footer.php');?>
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
</html>