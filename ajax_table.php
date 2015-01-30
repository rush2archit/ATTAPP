<?php

if($_GET['section'])
{    include('db.php');
	$semester=$_GET['semester'];
	$section=$_GET['section'];
	$sql=mysql_query("select distinct(subject),elective from subjects1 where semester='$semester' and section='$section' order by elective,subject");
	$i=1;
	echo '<tr><th>#</th><th>SUBJECT</th><th>TEACHER</th></tr>';
	while($row=mysql_fetch_array($sql))
	{
		$subject=$row['subject'];
		$elective=$row['elective'];
		if ($elective==0) {
			echo '<tr><td>'.$i.'</td><td>'.$subject.'</td></tr>';	
					}
		else
		{
			echo '<tr><td>'.$i.'</td><td><b>'.$subject.'</b></td></tr>';
		}
		
		$i++;
	}
}
?>