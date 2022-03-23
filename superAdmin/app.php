
<?php
include 'connect.php';
    
$id=$_GET['a'];

$command="UPDATE  tblvote
 SET 
 approved='1'
 WHERE vd_id='$id'";



$edit=mysqli_query($conn,$command);
  

if($edit){
mysqli_close($conn);

     
echo '<script>alert("Information Updated.");window.location = "vd_station.php";</script>';

exit;

}
else
{
    echo mysqli_error();

}
?>