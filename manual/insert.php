<!DOCTYPE html>
<html lang="en">
<?php
    include 'connection.php';
 
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
     
    

    ?> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>form votes</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<?php



if(isset($_POST['save']))
{

// Posted Values
$partyid=$_POST['pid'];
$total=$_POST['total'];
$vd=$_POST['vd'];
$imgfile=$_FILES["image"]["name"];
// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo '<script>alert("Invalid format. Only jpg / jpeg/ png /gif format allowed")window.location = "insert.php";</script>';
}
else
{
//rename the image file
$imgnewfile=md5($imgfile).$extension;
// Code for move image into directory
move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$imgnewfile);
//$imgnewfile


    foreach($partyid as $index => $parties)
    {
        $s_partyid=$parties;
        $s_total = $total[$index];
       // $s_vd = $vd[$index];
        //$s_image=$imgnewfile[$index];
     //$s_location=$location[$index];

        // $s_otherfiled = $empid[$index];

     // Query for insertion data into database
    $query=mysqli_query($conn,"insert into tblvote (vd_id,party_id,image,total) values('$vd','$s_partyid','$imgnewfile','$s_total')");
    }





if($query)
{

echo '<script>alert("data captured.");window.location = "insert.php";</script>';
}
else
{
    echo '<script>alert("Something went wrong.");window.location = "insert.php";</script>';
}


}
    




}








?>
<body>
    <section class="contact-clean" style="background: rgb(255,255,255);">
        <form data-aos="fade-down-right" data-aos-duration="1100" data-aos-delay="1050" enctype="multipart/form-data" method="post" style="font-size: 12px;">
            <p class="text-right"><a href="#"><i class="fa fa-window-close" style="font-size: 18px;color: rgb(30,30,30);"></i></a></p>
            <h1 style="font-size: 20px;text-align: center;">Manual-Form</h1>
            <div class="form-group"><input class="form-control-file form-control" type="file" name="image" style="font-size: 12px;" required></div>
            <div class="form-group"><select class="form-control" style="font-size: 12px;" name="vd" required>
                   
                        <option value="" selected="">Select Vd Station</option>
                        <?PHP          
         
         $result=mysqli_query($conn,"SELECT * from vd_station");
         $rows=mysqli_num_rows($result);        
         
         if ($rows>0) {
           
         
        while ($rows=mysqli_fetch_array($result)) {
            
            ?>
                        <option value="<?php echo $rows['vd_id']?>"><?php echo $rows['vd_name']?>(<?php echo $rows['location']?>)</option>
                
                        <?php }
         }
                        ?>
                  
                     
                  
                </select></div>
            <div class="form-group">
                <div class="table-responsive table-borderless">
                    <table class="table table-striped table-bordered table-sm">
                        <thead data-toggle="tooltip" data-bss-tooltip="">
                            <tr class="flex-grow-0">
                                <th>#</th>
                                <th>Party Name</th>
                                <th>Total Votes</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?PHP          
         
         $result=mysqli_query($conn,"SELECT * from party");
         $rows=mysqli_num_rows($result);        
         
         if ($rows>0) {
           
         
        while ($rows=mysqli_fetch_array($result)) {
            
            ?>
                       <tr>
                                <td><?php echo $rows['party_id']?><input style="display:none" name="pid[]" value="<?php echo $rows['party_id']?>"></td>
                                <td><?php echo $rows['party_code']?> </td>
                                <td><img style="height:25px;width:25px" class="img-fluid" src="data:image/jpeg;charset=utf8;base64,<?php echo base64_encode ($rows['logo']);?>"></td>
                                <td><input class="form-control form-control-sm" name="total[]" type="number" style="font-size: 12px;height: 23.992199999999993px;width: 150px;" required=""></td>
                            </tr> 
                
                        <?php }
         }
                        ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="form-group"><button class="btn btn-block btn-sm" type="submit" name="save" style="background: rgb(0,0,0);color: rgb(255,255,255);font-weight: normal;font-size: 12px;">Save</button></div>
        </form>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>