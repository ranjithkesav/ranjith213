<!DOCTYPE html>
<html>
    <head>
         <title>
            student marklist creation
        
         </title>
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
         <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet"> 
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script src="mark.js"></script>
<link rel="stylesheet" href="mark.css">
        </head>
        <body>
            <table  border= "1"  class="table table-hover" style="background-color:rgb(145, 235, 142);">
                <tr>
                <th rowspan="2" class="nametab"> Name</th>
                <th colspan="6" style="text-align: center;" class="marktab"> marlist</th>
     
            </tr>
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
                    <input type="submit" value="Add To Table" onclick="marklist()"></th>
                </tr>	
            </table>
            <br>
            <br>
            <table border="1" cellspacing="5" 
                height="100" width="500" cellpadding="5" id="TableScore" class="data">
                       <caption style="text-align: center; color: red;"><b>Student marklist</b></caption> 
                <tr class="tab">
                    <th width="180">Name</th>
                    <th>Total</th>
                    <th>Average</th>
                    <th>Pass Or Fail</th>
                    
                </tr>
            </tr>
              </table>
        </body>
</html>



// mark.js file///


function marklist(){
    var n, k, r, e, v, sum, avg;
            n=(document.getElementById('nme').value);
			k=parseFloat(document.getElementById('ENG').value);
			r=parseFloat(document.getElementById('TAM').value);
			e=parseFloat(document.getElementById('MAT').value);
			v=parseFloat(document.getElementById('SCI').value);
			f=parseFloat(document.getElementById('SOC').value);
        //   calculate the total
        sum=k+v+r+e+f;
        avg=sum/5;
// display the marklist of the student......
var newTable = document.getElementById('TableScore');
			var row = newTable.insertRow(-1);
			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(0);
			var cell3 = row.insertCell(0);
			var cell4 = row.insertCell(0);

			cell4.innerHTML= n;
			cell3.innerHTML=sum;
			cell2.innerHTML = avg;

			if(avg>=70){
				cell1.innerHTML="<font color=green>Pass</font>";
			}else{
				cell1.innerHTML="<font color=red>Fail</font>";
			}

        }
        
        