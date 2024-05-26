<?php
require_once("db.php");

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="search.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<style>

.container{
	margin-top:10px;
  width: 1200px;
}
.row
#content{
margin-top:50px;}

#content_module{
background-color:#D3D3D3;
height:auto;
padding:20px;}

#content_module h2{
font-weight:700;}

#content_row{
background-color:#FFFFFF;
padding:10px 10px 10px 10px;
 font-size:14px;
 margin:20px;
 text-align:justify;
 line-height:25px;
 width:95%;}

 #content_col{
 border:solid 1px #ccc;
 margin-right:20px;
 padding:10px;
 background-color:#EDFFF2;
 border-radius:5px;}

 #content_table tr td{
   padding: 10px;
 }
</style>
    <title>Document</title>
</head>

<body>
    <header>
        <div id="logo" onClick="location.href='index.html'"><img src="images/logo.svg"></div>
        <div id="titleText">
            <h1>BLOOD DONORS CONNECT</h1>
        </div>
        <div id="admin">
            <?xml version="1.0" encoding="utf-8"?>
            <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                <g>
                    <path
                        d="M516.7,923.4l-14.5,8.4c-9.6,5.6-20.2,8.2-30.6,8.2c-21.1,0-41.7-11-53.1-30.6l-30.7-53c-8.1-14.1-10.4-30.8-6.1-46.5c4.2-15.7,14.5-29.1,28.5-37.2l13.8-8c-3.2-16.6-4.8-33.4-4.8-50.3c0-16.8,1.6-33.6,4.8-50.2l-13.9-8c-29.3-16.9-39.3-54.4-22.4-83.7l30.6-53c8.2-14.1,21.6-24.4,37.2-28.6c5.2-1.4,10.5-2.1,15.9-2.1c10.7,0,21.3,2.8,30.6,8.2l14.5,8.3c14-11.9,29.3-22.1,45.3-31c-23.8-11.6-50.9-20.8-82.1-26.8v-30.3c72.2-34.5,122.5-107.6,122.5-192.9C602.3,106,506.3,10,387.9,10c-118.4,0-214.4,96-214.4,214.4c0,85.4,50.3,158.5,122.5,192.9v30.3C51.9,494.4,51,730.8,51,867.5c0,106.8,331.8,138.6,529.6,95.5C557.8,952.5,536,939.8,516.7,923.4z" />
                    <path
                        d="M893.7,793.7l55.2,31.8l-30.6,53.1l-55.8-32.2c-33.2,42.1-81.4,71.1-137,79.1l0.1,64.4l-61.3,0.1v-64.4c-55.5-8-103.7-37-136.9-79.1l-55.8,32.2l-30.7-53l55.3-31.9c-9.9-24.6-15.6-51.3-15.6-79.4c0-28.1,5.8-54.8,15.6-79.3l-55.3-31.9l30.6-53l55.8,32.2c33.3-42.1,81.5-71.2,137-79.2v-64.4h61.3v64.4c55.5,8,103.7,37,137,79.1l55.7-32.2l30.7,53.1L893.7,635c9.9,24.6,15.6,51.3,15.6,79.4S903.6,769.1,893.7,793.7z M695,590.8c-68.2,0-123.5,55.3-123.5,123.5c0,68.2,55.2,123.5,123.5,123.5c68.2,0,123.5-55.3,123.5-123.5C818.5,646.1,763.2,590.8,695,590.8z" />
                </g>
            </svg>
            <a href="admin_login.php">Admin</a>
        </div>
    </header>
    <div id="content" class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-md-2 align-self-start"></div>
                <div id="signup" class="col-lg-6 col-md-8 align-self-center">
                    <div id="formcontent">
                        <h1 class="text-center font-weight-bold">SEARCH DONORS</h1>
                        <hr class="mx-auto">
                        <br>
                        <form action="search.php" method="POST">
                        <label>Blood Group</label>
                        <select id="blood" name="blood" class="form-control">
                            <option value="notSelected" selected="selected">Select required blood group</option>
                            <option value="A+">A+</option>
                            <option value="O+">O+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="A-">A-</option>
                            <option value="O-">O-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                        </select>
                        <br>
                        <label>City</label>
                        <input type="hidden" id="CityId">
                        <input type="text" id="city" name="city" class="form-control" placeholder="Select City" onKeyUp="SearchCity(this.value);" required>
                        <div id="CityList"></div>
                        <br>
                        <!-- <label for="">Location</label> -->
                        <br> <br>
                        <button class="btn btn-danger btn-block" type="submit" name="search" id="search">Search</button>
                        <br>
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
    <td colspan="2">Option</td>
  </tr>
  <?php
  if(isset($_POST['search'])){
     $grp=$_POST['blood'];
     $city=$_POST['city'];



  $sql2="select * from donators where blood_grp='$grp' and city='$city'";
  $result2=mysqli_query($con,$sql2);
  $c=1;
  while($row2=mysqli_fetch_array($result2))
  {


   ?>
  <tr>
    <td><?php echo $c  ?></td>
  <td><?php echo $row2['name'];?></td>
<td><?php echo $row2['email'];?></td>
<td><?php echo $row2['phone'];?></td>
<td><?php echo $row2['blood_grp'];?></td>
<td><?php echo $row2['address'];?></td>
<td><?php echo $row2['state'];?></td>
<td><?php echo $row2['city'];?></td>
<td><button class="btn btn-danger"  id="<?php $row2['id']; ?>" name="request" ><a style="text-decoration:none; color:#FFF;" href="search_signup.php?id=<?php echo $row2['id'];?>">Request</a></button></td>
<form action="search.php" method="post"><td>  <button type="submit" name="submit" id="submit" class="btn btn-danger ">Send Mail</button>
</td>
</form>

  </tr>
  <?php
$c=$c+1;
}
}
   ?>

</table>
    </div>



    </div>
    </div>
                <div class="col-lg-3 col-md-2 align-self-end"></div>



                <script>
        function SearchCity(city) {
            var state_id = $('#state_id').val();
            if (city != '') {
                $('#CityList').fadeIn();
                $.post('javascripts/SearchCityWithoutState.php', {
                    state_id: state_id,
                    city: city
                }, function(data) {
                    $('#CityList').html(data);

                });
            }
        }

      

        function GetCityList(id, city) {

            $('#city').val(city);

            $('#CityList').fadeOut();

        }
    </script>
</body>

</html>
