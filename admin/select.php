<?php  
 if(isset($_POST["id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "s4db");  
      $query = "SELECT * FROM enrollkid WHERE id = '".$_POST["id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>StudentName</label></td>  
                     <td width="70%">'.$row["StudentName"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>GuardianName</label></td>  
                     <td width="70%">'.$row["GuardianName"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><label>MobileNumber</label></td>  
                     <td width="70%">'.$row["MobileNumber"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Age</label></td>  
                     <td width="70%">'.$row["Age"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Gender</label></td>  
                     <td width="70%">'.$row["Gender"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>AmountReq</label></td>  
                     <td width="70%">'.$row["AmountReq"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>School</label></td>  
                     <td width="70%">'.$row["School"].'</td>  
                </tr>
                <tr>  
                     <td width="30%"><label>Message</label></td>  
                     <td width="70%">'.$row["message"].'</td>  
                </tr>
                
                
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>
 