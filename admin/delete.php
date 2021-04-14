
<?php  
 $connect = mysqli_connect("localhost", "root", "", "s4db");  
 $sql = "DELETE FROM enrollkid WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>

