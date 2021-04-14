<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>

<?php  

$connect = mysqli_connect("localhost", "root", "", "s4db");  
 
 if(!empty($_POST))  
 {  
      $output = '';  
      $msg = '';  
      $studentname = mysqli_real_escape_string($connect, $_POST['studentname']);  
      $guardianname = mysqli_real_escape_string($connect, $_POST['guardianname']);  
      $mobileno = mysqli_real_escape_string($connect, $_POST['mobileno']);  
      $age = mysqli_real_escape_string($connect, $_POST['age']);  
      $gender = mysqli_real_escape_string($connect, $_POST['gender']);  
      $school = mysqli_real_escape_string($connect, $_POST['school']);  
      $message= mysqli_real_escape_string($connect, $_POST['message']);  
       
      if($_POST["id"] != '')  
      {  
           $query = "  
           UPDATE enrollkid
           SET StudentName='$studentname', GuardianName='$guardianname',MobileNumber='$mobileno',  
             
             
           
           Age = '$age',
           Gender='$gender', School='$school',
           Message='$message'

           WHERE id='".$_POST["id"]."'";  


           $msg = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO enrollkid(StudentName,GuardianName,MobileNumber Age, Gender,School,Message)  
           VALUES('$studentname','$guardianname','$mobileno', '$age', '$gender','$school','$message');  
           ";  
           $msg = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           
           $output .= '<label class="succWrap">' . $msg . '</label>';  
           $select_query = "SELECT * FROM enrollkid";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">Delete</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["StudentName"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-primary edit_data" /></td>  
                          <td><input type="button" name="delete" value="delete" id="' . $row["id"] . '" class="btn btn-primary btn_delete" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>
 </body>
 </html>