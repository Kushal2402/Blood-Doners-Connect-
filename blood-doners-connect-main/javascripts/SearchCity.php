<?php
require_once('../db.php');


$city=$_REQUEST['city'];
$state_id=$_REQUEST['state_id'];
$per="%";
$sql=mysqli_query($con,'SELECT * FROM cities WHERE city LIKE"'.$city.$per.'" AND state_id="'.$state_id.'"');

?>
<ul class="list-group">
<?php
while($row=mysqli_fetch_array($sql))
	{?>
  <li class="list-group-item" style="cursor:pointer;" onclick="GetCityList('<?php echo $row['id'];?>','<?php echo $row['city'];?>');"><?php echo $row['city'];?></li>
<?php } ?>










</ul>

