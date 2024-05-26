<?php
require_once("db.php");

?>
<?php
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$blood=$_POST['blood'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$city=$_POST['city'];
$country=$_POST['country'];
$postal_code=$_POST['postal_code'];
$reason=$_POST['reason'];

if(isset($_POST['submit2']))
{
$sql3="INSERT INTO donee(name,address,email,blood_grp,phone,state,city,country,postal_code,reason) values ('$name','$address','$email','$blood','$phone','$state','$city','$country','$postal_code','$reason') ";

$result3=mysqli_query($con,$sql3);
if($result3){
  $message2="New Donee Registered Successfully";

  echo "<script type='text/javascript'>alert('$message2');</script>";

echo '<script>window.location.href = "index.html";</script>';


}
}

?>
