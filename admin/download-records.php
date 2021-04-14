<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 's4db');  
$sql = "SELECT `StudentName`,`GuardianName`,`Age`,`Gender`,`AmountReq`,`MobileNumber`,`School` FROM `enrollkid`";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "Studet Name" . "\t" . "Guardian/Parent Name" . "\t" . "Age" . "\t" . "Gender" . "\t" . "Amount Requested" . "\t" . "Mobile Number" . "\t" . "School" . "\t";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Kids_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 