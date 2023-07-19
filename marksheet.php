<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bootstrap</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg">
	<center><h2>MARKSHEET</h2></center>
	<br>
	<div class="container">
	<center>
	<div class="col-md-3">
		<label><b>Name</b></label>
		<input type="text" name="" placeholder="enter the name">
	</div>
	</center>
	<br>
	<center>
	<div class="col-md-3">
		<label><b>roll no</b></label>
		<input type="text" name="" placeholder="enter the roll no">
	</div>

	</center>
	 <table class="table table-bordered">
    <thead>
      <tr>
        <th>SUBJECT</th>
        <th>MAX MARKS</th>
        <th>OBTAINED MARKS</th>
        <th>PERCENTAGE</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>TAMIL</td>
        <td>100</td>
        <td>90</td>
        <td></td>
      </tr>
      <tr>
        <td>ENGLISH</td>
        <td>100</td>
        <td>80</td>
        <td></td>
      </tr>
      <tr>
        <td>MATHS</td>
        <td>100</td>
        <td>95</td>
        <td></td>
      </tr>
      <tr>
      	<td>science</td>
      	<td>100</td>
      	<td>97</td>
      	<td></td>
      </tr>
      <tr>
      	<td>social</td>
      	<td>100</td>
      	<td>90</td>
      	<td></td>
      </tr>
      <tr>
      	<td>total</td>
      	<td>500</td>
      	<td>450</td>
      </tr>
    </tbody>
  </table>
</div>
    		<center><button type="button" class="btn btn-primary">calculate</button></center> 
</body>
<style type="text/css">
	.bg
	{
		background-color: pink;
	}
</style> 