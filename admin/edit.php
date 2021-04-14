<?php

include('includes/config.php');?>
<?php
$id = $_GET['id']; // get id through query string
$sql = "SELECT * from enrollkid where id='$id'";
$query = $dbh -> prepare($sql);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
?>

<form action="" method="POST">
 Name<imput type="text" name="name">
 </form> 
 <?php }} ?>