<?php
require_once('../db.php');

$state=$_REQUEST['state'];
$per="%";
$sql=mysqli_query($con,'SELECT * FROM states WHERE name LIKE"'.$state.$per.'"');

?>
<ul class="list-group">
<?php
while($row=mysqli_fetch_array($sql))
	{?>
  <li class="list-group-item" style="cursor:pointer;  " onclick="GetStateList('<?php echo $row['id'];?>','<?php echo $row['name'];?>');"><?php echo $row['name'];?></li>
<?php } ?>










</ul>

