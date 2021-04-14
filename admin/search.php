<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","s4db");
if(count($_POST)>0) {
$studentname=$_POST['studentname'];
$result = mysqli_query($conn,"SELECT * FROM enrollkid where StudentName='$studentname' ");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Serach record </title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<table>
<tr>
<td>Student Name</td>


</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["StudentName"]; ?></td>
<
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>
