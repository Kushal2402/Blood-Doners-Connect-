<?php

 session_start();
 require_once("db.php");
 $id=$_SESSION['id'];

 $_SESSION['user_id']=$id;
 $sql=mysqli_query($con,'SELECT * FROM donators WHERE id="'.$id.'"');
$res=mysqli_fetch_array($sql);
 ?>
<html xmlns="http://www.w3.org/1999/xhtml">
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
        <link rel="stylesheet" href="admin_header.css">
<title>User</title>
</head>

<body>

 <header>
        <!-- header tag instead of regular div for SEO advantage -->
        <div id="logo"><img src="images/logo.svg"></div>
        <div id="titleText">
            <h1>BLOOD DONORS CONNECT</h1>
        </div>
        <div id="logout">

            <a href="index.html">Logout</a>
        </div>
    </header>
    <div class="container">
    <div class="row">
	<div class="span6">Welcome<strong> <?php echo $res['name']; ?> !</div>
    </div>
	</div>
    <div class="container" id="content_module">
    <h2>Module</h2>
			<div class="row" id="content_row">

			<div class="col-3" id="content_col" >

    	 <table width="95%" border="0">
  <tr>
    <td><div align="center"><a href="request_details.php"><img src="images/logo.svg" width="120" title="REQUESTS"/></a></div></td>
  </tr>
  <tr>
    <td><div style="text-align:center; font-weight:bold;"><a href="request_details.php">REQUESTS</a></div></td>
  </tr>
</table>
    </div>
    <div class="col-3" id="content_col">

     <table width="95%" border="0">
  <tr>
    <td><div align="center"><a href="donee_details.php"><img src="images/logo.svg" width="120" title="HISTORY"/></a></div></td>
  </tr>
  <tr>
    <td><div style="text-align:center; font-weight:bold;"><a href="donee_details.php">HISTORY</a></div></td>
  </tr>
</table> 
    </div>
    </div>
    </div>
</body>
</html>
