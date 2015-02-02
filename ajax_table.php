<?php

if($_GET['section'])
	{    include('db.php');
$tstring="";
$semester=$_GET['semester'];
$section=$_GET['section'];
$sql=mysql_query("select distinct(subject),elective from subjects1 where semester='$semester' and section='$section' order by elective,subject");
$sql1=mysql_query("select name from t_info");
while($row=mysql_fetch_array($sql1))
{
	$tname=$row['name'];
	if ($tname!="")
	{
		$tstring=$tstring.'<option value="'.$tname.'">';
	}
	

}
//echo $tstring;

$i=1;
echo '<tr><th>#</th><th>SUBJECT</th><th>TEACHER</th></tr>';
while($row=mysql_fetch_array($sql))
{
	$subject=$row['subject'];
	$elective=$row['elective'];
	if ($elective==0) {
		echo '<tr><td>'.$i.'</td><td>'.$subject.'</td><td><input list="teachers" name="teachers" class="form-control" data-style="btn-primary">
		<datalist id="teachers">
		'.$tstring.'
		</datalist>
		<input type="submit"></td></tr>';	
	}
	else
	{
		echo '<tr><td>'.$i.'</td><td><b>'.$subject.'</b></td><td><input list="teachers" name="teachers" class="form-control" data-style="btn-primary">
		<datalist id="teachers">
		'.$tstring.'
		</datalist>
		<input type="submit"></tr>';
	}

	$i++;
}
}
?>