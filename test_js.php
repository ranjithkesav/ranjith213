<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<label>first number</label>
<input type="text" name="" id="f_number">
<label>second number</label>
<input type="text" name="" id="s_number">
<select id="sel_operator">
	<option value="0">select operator</option>
	<option value="add" >add</option>
	<option value="sub" >sub</option>
	<option value="mul" >mul</option>
	<option value="div" >div</option>
</select>
<input type="button" name="" value="find" onclick="add()">
<label>answer</label>
<input type="text" name="" id="answer">
</body>
</html>
<script type="text/javascript">
	function add() 
	{
		var a = document.getElementById("f_number").value;
		var b = document.getElementById("s_number").value;
		var op =document.getElementById("sel_operator").value;

		if(op=="add")
		{

            var c = parseInt(a)+parseInt(b);
			document.getElementById("answer").value=c;


	}
	if(op=="sub")
		{

            var c = parseInt(a)-parseInt(b);
			document.getElementById("answer").value=c;
        }
    if(op=="mul")
    {
    	var c = parseInt(a)*parseInt(b);
    	document.getElementById("answer").value=c;
    }
if (op=="div") 
{
	var
}
    }
</script>