<?php  
 //fetch.php  
 if(isset($_POST["id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "s4db");  
      $query = "SELECT * FROM enrollkid WHERE id='".$_POST["id"]."'";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output = '  
                <p><img src="images/'.$row["image"].'"  /></p>  
                 
           ';  
      }  
      echo $output;  
 }  
 ?>  