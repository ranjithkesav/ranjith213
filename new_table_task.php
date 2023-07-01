<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="white">
<table border="2" align="center">
	<center>
	<h3>STUDENT REGISTOR FORM</h3>
	<p>you have <span style="color: red;">health conditions</span> and you want to be healthy as possible</p>
</center>
	<tr>
		<td>Name</td>
		<td><input type="text"> </td>
	</tr>
	<tr>
		</td>
		<td>Roll no</td>
		<td><input type="text"> </td>
	</tr>
	<tr>
		<td>Department</td>
         <td><label></label>
		<select>
		<option>UG</option>
		<option>PG</option>
		<option>OTHERS</option>
		</select>
	</td></tr>
	</tr> 
    <tr>
		<td>section</td>
		<td>A<input type="checkbox" name="section">
		B<input type="checkbox" name="section">
		c<input type="checkbox" name="section"></td>
	</tr>
	<tr>
		<td>gender</td>
		<td>male<input type="radio" name="gender">
		female<input type="radio"name="gender"></td>
	</tr>
	<tr>
		<td>blood group</td>
		<td><label></label>
<select>
	<option>a+</option>
	<option>b+</option>

</select>
		</td>
	</tr>
	<tr>
		<td>address</td>
		<td><input type="text" name=""> </td>

	</tr>
	<tr>
		<td>contact</td>
		<td><input type="text" name=""> </td>
	</tr>
	<tr>
		<td>parent contact</td>
		<td><input type="text" name=""> </td>
	</tr>
	<tr>
		<td>profile photo</td>
        <td><input type="file"name=""></td>
    </tr>
	<tr>
<td>
	<button onclick="myFunction()" id="access">submit</button>
	<style type="text/css">
	#access
	{
		background-color: green;
	}

</style>
	</td>
	</tr>
</table>
</body>
</html>