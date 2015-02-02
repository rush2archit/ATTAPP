<!DOCTYPE html>
<html>
<head>
	<!-- This is for loading external scripts -->
	<title>AttApp </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function()
	{
		$("#semester").change(function()
		{
			var semester=$("#semester").val();
			var dataString = 'semester='+ semester;

			$.ajax
			({
				type: 'GET',
				url: 'ajax_city.php',
				data: dataString,
				cache: false,
				success: function(html)
				{
					$("#section").html(html);

				} 
			});


		});

	});
	</script>

	<script type="text/javascript">
	$(document).ready(function()
	{
		$("#section").change(function()
		{
			var section=$("#section").val();
			var semester=$("#semester").val();
			var dataString = 'semester='+ semester+'&section='+ section;

			$.ajax
			({
				type: 'GET',
				url: 'ajax_table.php',
				data: dataString,
				cache: false,
				success: function(html)
				{
					$("#table").html(html);

				} 
			});


		});

	});
	</script>

</head>

<body>
	<div class="container" >
		<ul class="nav nav-tabs">
			<li role="presentation" ><a href="#">STATISTICS</a></li>
			<li role="presentation" class="active"><a href="#">ASSIGN</a></li>
		</ul>

		<div class="col-sm-4" >
		</div>

		<div class="col-sm-4" >
			<h1>
				<select name="semester" id="semester" class="form-control" data-style="btn-primary">
					<option selected="selected">--Select Semester--</option>

					<?php
					include('db.php');


					$sql=mysql_query("select distinct(semester) from subjects1");
					while($row=mysql_fetch_array($sql))
					{
						$semester=$row['semester'];
						echo '<option value="'.$semester.'">'.$semester.'</option>';
					}

					?>

				</select>
			</h1>


			<h1>
				<select name="section" id="section" class="form-control" data-style="btn-primary">
					<option selected="selected">
						--Select Section--
					</option>
				</select>
				
			</h1>

			
		</div>


		<div class="col-sm-4" >
		</div>

	</div>
	<div class = "container" >
		<table name="table" id="table" class ="table">
			
		</table>
	</div>
</body>
</html>