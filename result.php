
<!DOCTYPE html>
<html>
<head>
	<title>Database Results</title>
</head>
<body>
	<table border="1" align="center">
		<tr>
			<th>Email or mobile number</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Birthdate</th>
			<th>Birthmonth</th>
			<th>Birthyear</th>
			<th>Gender</th>
			<th>Action</th>
		</tr>
		




			<?php
		     $Server="localhost";
		     $UserName="root";
		     $Password="";
		     $DatabaseName="dbFacebook";
		     $Connect = mysqli_connect($Server,$UserName,$Password,$DatabaseName);
		     $sqlSelect="SELECT * FROM tblFacebook";
		     $query=mysqli_query($Connect,$sqlSelect);
		     while ($row=mysqli_fetch_array($query)) {
		     	
		     	?>
			<tr>
				<td><?=$row['Firstname']?></td>
				<td><?=$row['Lastname']?></td>
				<td><?=$row['MobileEmail']?></td>
				<td><?=$row['Month']?></td>
				<td><?=$row['Day']?></td>
				<td><?=$row['Year']?></td>
				<td><?=$row['Gender']?></td>
			</tr>	

				<?php
			}?>

	</table>
</body>
</html>
