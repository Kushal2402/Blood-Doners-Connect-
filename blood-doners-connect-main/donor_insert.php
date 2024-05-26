<?php
require_once("db.php");

?>

<?php

$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$blood=$_POST['blood'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$state=$_POST['state'];
$city=$_POST['city'];
$country=$_POST['country'];
$postal_code=$_POST['postal_code'];
$want_donate=$_POST['want_donate'];
$password=$_POST['password'];

if(isset($_POST['submit']))
{
$sql="INSERT INTO donators(name,address,email,blood_grp,dob,phone,state,city,country,postal_code,want_to_donate,password) values ('$name','$address','$email','$blood','$dob','$phone','$state','$city','$country','$postal_code','$want_donate','$password') ";

$result=mysqli_query($con,$sql);
if($result){
  $message="New Donor Registered Successfully";
echo "<script type='text/javascript'>alert('$message');</script>";
echo '<script>window.location.href = "index.html";</script>';

}
}

?>
