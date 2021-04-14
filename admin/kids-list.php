<?php  
session_start();
error_reporting(0);
 $connect = mysqli_connect("localhost", "root", "", "s4db");  
 $query = "SELECT * FROM enrollkid ORDER BY id ";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>FUNDISA | Kids List </title>  
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
		   <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
         
           
           
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
          
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
     
      </head>  
      <body>  
	
	  <?php include('includes/header.php');?>
	  <br>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
	<div class="content-wrapper">
			<div class="container-fluid">
			<div class="row">
					<div class="col-lg-12">
           
           <div class="container">  
               
                <br />  
                <div class="table-responsive">  
                     <div text-align="right">  
					 <h3 text-align="center">Edit Kids list</h3>
                     </div>  
					 <div>
						<ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php" style="color:blue;">Home</a>
            </li>
            <li class="breadcrumb-item active">Kids list</li>
        </ol></div>
                     <br />  
					 <div class="panel panel-primary">
							<div class="panel-heading">Kids Info</div>
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                      
				<div class="container" style="width:500px;" text-align="center">  
				<div text-align="center">  
                     <input type="text" name="search" id="search" class="form-control" />  
                </div> <br>
					 <div id="student_table">  
                          <table class="display table table-striped table-dark table-bordered table-hover" cellspacing="0" width="100%">  
                               <tr> <br> 
                                    <th width="70%">Student Name</th>  
                                    <th width="15%">Edit</th>
									<th width="15%">Delete</th>  
                                   
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["StudentName"]; ?></td>  
                                    <td><input type="button" name="edit" value="edit" id="<?php echo $row["id"]; ?>" class="btn btn-primary edit_data" /></td>  
									<td><input type="button" name="delete" value="delete" id="<?php echo $row["id"]; ?>" class="btn btn-primary btn_delete" /></td>  
                                   
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                     </div>  
                </div>  
           </div>  
		 </div>
		 </div>
		 </div>
		 </div>
		 </div>
		 </div>
      </body>  
 </html>  
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Student Details</h4>  
                </div>  
                <div class="modal-body" id="student_detail">  
                </div>  
                
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Student Details form</h4>  
                </div>  
                <div class="modal-body">  
                     <form method="post" id="insert_form">  
                          <label>Enter Student Name</label>  
                          <input type="text" name="studentname" id="StudentName" class="form-control" />  
                          <br />  
						  <label>Enter Guardian/Parent Name</label>  
                          <input type="text" name="guardianname" id="GuardianName" class="form-control" />  
                          <br />  
						  <label>Enter Mobile Number</label>  
                          <input type="text" name="mobileno" id="MobileNumber" class="form-control" />  
                          <br />  
						  
                          <label>Enter Age</label>  
                          <textarea name="age" id="Age" class="form-control"></textarea>  
                          <br />  
                          <label>Select Gender</label>  
                          <select name="gender" id="Gender" class="form-control">  
                               <option value="Male">Male</option>  
                               <option value="Female">Female</option>  
							   <option value="Female">Prefer not to say</option>  
                          </select>  
                          <br />  
                          <label>Enter Amount Requested</label>  
                          <input type="text" name="amountreq" id="AmountReq" class="form-control" />  
                          <br />  
						  <label>Enter School</label>  
                          <input type="text" name="school" id="School" class="form-control" />  
                          <br />  
						  <label>Enter Additional Info</label>  
                          <input type="text" name="message" id="Message" class="form-control" />  
                          <br />  
                          <input type="hidden" name="id" id="id" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                 
           </div>  
      </div>  
 </div>  
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                     $('#StudentName').val(data.StudentName);  
					 $('#GuardianName').val(data.GuardianName);
					 $('#MobileNumber').val(data.MobileNumber);
                     $('#Age').val(data.Age);  
                     $('#Gender').val(data.Gender); 
					 $('#AmountReq').val(data.AmountReq); 
					 $('#School').val(data.School);  
					 $('#Message').val(data.Message); 
                     
                    
                     $('#id').val(data.id);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#StudentName').val() == "")  
           {  
                alert("Name is required");  
           }  
          
           else if($('#Age').val() == '')  
           {  
                alert("Age is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Updating");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#student_table').html(data);  
                     }  
                });  
           }  
      });  
     

	  $(document).on('click', '.btn_delete', function(){  
           var id=$(this).attr("id");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 
 </script>
 <script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#student_table tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>  