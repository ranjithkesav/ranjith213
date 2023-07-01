<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>student marklist</title>
</head>
<body> 
<center><h2>student marklist</h2></center>
</body>
</html>
 <table  border= "1"  class="table table-hover" style="background-color:rgb(145, 235, 142);">
                <tr>
                <th rowspan="2" class="nametab"> Name</th>
                <th colspan="6" style="text-align: center;" class="marktab"> marlist</th>
    <tr style="font-family: 'Courier New', Courier, monospace;" >
                <th> eng</th>
                <th> tam</th>
                <th> mat</th>
                <th>sci</th>
                <th> soc</th>
            </tr>
                <td><input type="text" id="nme"></td>
                <td><input type="text" id="ENG"></td>
                <td><input type="text" id="TAM"></td>
                <td><input type="text" id="MAT"></td>
                <td><input type="text" id="SCI"></td>
                <td><input type="text" id="SOC"></td>

                <tr>
                    <th colspan="6" height="30" class="nexttab">
                    <input type="submit" value="totals" onclick="marklist()"></th>
                </tr>	
            
</table>
