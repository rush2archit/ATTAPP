<?php

if($_GET['semester'])
{    include('db.php');
	$semester=$_GET['semester'];
//	echo $semester;
	$sql=mysql_query("select distinct(section) from subjects1 where semester='$semester' order by section");
	echo '<option selected="selected">--Select Section--</option>';

	while($row=mysql_fetch_array($sql))
	{
		$section=$row['section'];
		//echo $semester;
		echo '<option value="'.$section.'">'.Section.$section.'</option>';
	}
}
?>