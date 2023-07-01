<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>emp sal</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body bgcolor="lightblue">
<center><h2>EMP SAL CALCULATION</h2></center>
<table border="1" align="center">
	<tr>
		<td>Name</td>
		<td><input type="text"></td>
	</tr>
	<tr>
		<td>EMP ID</td>
		<td><input type="text"></td>
	</tr>
	<tr>
		<td>MONTH</td>
		<td><select id="month">
			<option value="0">select month</option>
			<option value="1">jan</option>
			<option value="2">feb</option>
			<option value="3">mar</option>
			<option value="4">apr</option>
			<option value="5">may</option>
			<option value="6">jun</option>
			<option value="7">jul</option>
			<option value="8">aug</option>
			<option value="9">sep</option>
			<option value="10">oct</option>
			<option value="11">nov</option>
			<option value="12">dec</option>
		</select></td>
	</tr>
	<tr>
		<td>PER DAY SALARY</td>
		<td><input type="text" id="per_day_sal"></td>
	</tr>
	<tr>
		<td>LEAVE</td>
		<td><input type="text" id="leave_days"></td>
	</tr>
	<tr>
		<td>PERMISSION</td>
		<td><input type="text" id="permission"></td>
	</tr>

	<tr>
		
		<td colspan="2"  align="center"><input type="button" value="FIND" id="find_res" style="color:red"></td>
	</tr>
</table><br>
<center>YOUR SALRY </center>
<table border="1" align="center">
	<tr>
		<td>MONTH</td>
		<td><input type="text" id="selected_month"></td>
	</tr>
	<tr>
		<td>TOTAL WORKING DAYS</td>
		<td><input type="text" id="tot_working_days" readonly></td>
	</tr>
	<tr>
		<td>PER DAY SALARY</td>
		<td><input type="text" id="per_day_sall"></td>
	</tr>
	<tr>
		<td>PRESNET DAYS</td>
		<td><input type="text"></td>
	</tr>
	<tr>
		<td>ABSCENT DAYS</td>
		<td><input type="text" id="abs_days"></td>
	</tr>
	<tr>
		<td>PERMISSION</td>
		<td><input type="text"></td>
	</tr>
	
</table>
</body>
</html>
<script>

</script>               