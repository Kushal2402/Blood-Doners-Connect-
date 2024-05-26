<?php
require_once("db.php");
session_start();
$id=$_SESSION['user_id'];
$sql=mysqli_query($con,'SELECT * FROM donators WHERE id="'.$id.'"');
$res=mysqli_fetch_array($sql);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
       <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin_header.css">
<title>Donators Details</title>
</head>

<body>

 <header>
        <!-- header tag instead of regular div for SEO advantage -->
        <div id="logo"><img src="images/logo.svg"></div>
        <div id="titleText">
            <h1>BLOOD DONORS CONNECT</h1>
        </div>
        <a href="user.php">Home</a>
        <div id="logout">
      

            <a href="index.html">Logout</a>
        </div>
    </header>
  
    <div class="container">
    <div class="row">
	<div class="span6">Welcome<strong> <?php echo $res['name']; ?> !</strong></div>
    </div>
	</div>
    <div class="container" id="content_module">
			<div class="row" id="content_row">

      <div class="table-responsive" id="content_table">
    	 <table width="95%" class="table-bordered table-hover" border="0">
  <tr>
    <td width="50px">Sl No</td>
    <td>Name</td>
    <td>Email</td>
    <td>Phone No</td>
    <td>Blood Group</td>
    <td>Address</td>
    <td>State</td>
    <td>City</td>
    <td width="80px">Reason</td>
    <td>Status</td>
  </tr>
  <?php
  $sql1="select * from donee where donor_id='$id' and status='0' and request_status!='0' ";
  $result1=mysqli_query($con,$sql1);
  $chk=mysqli_num_rows($result1);
   if($chk<1){
     echo  $msg='<div class="bg-info">NO DATA FOUND</div>';
   }
   else{
  $c=1;
  while($row1=mysqli_fetch_array($result1))
  {


   ?>
   
  <tr>


    <td><?php echo $c;  ?></td>
  <td><?php echo $row1['name'];?></td>
<td><?php echo $row1['email'];?></td>
<td><?php echo $row1['phone'];?></td>
<td><?php echo $row1['blood_grp'];?></td>
<td><?php echo $row1['address'];?></td>
<td><?php echo $row1['state'];?></td>
<td><?php echo $row1['city'];?></td>
<td><?php echo $row1['reason'];?></td>
<td><?php if($row1['request_status']==1){ $ss='<div class="bg-success"><strong>Accepted</strong></div>';}elseif($row1['request_status']==2){ $ss='<div class="bg-danger"><strong>Rejected</strong></div>';}
echo $ss;?></td>
  </tr>

  <?php
$c=$c+1;
}}

   ?>

</table>
    </div>



    </div>
    </div>
</body>
</html>
