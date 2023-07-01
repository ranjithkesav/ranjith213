<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>color picker</title>
	<link rel="stylesheet" type="text/css" href="css_task/css/color_picker.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body  class="form_body">
	<br>
	<br>
	<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="color1"><center style="padding-top: 10px;"></center></div><br>
        </div>
        <div class="col-md-3">
			<div class="color2"></div><br>
		</div>
		<div class="col-md-3">
			<div class="color3"></div><br>
		</div>
		<div class="col-md-3">
			<div class="color4"></div><br>
		</div>
		</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="color5"></div><br>
		</div>
		<div class="col-md-3">
			<div class="color6"></div><br>
		</div><div class="col-md-3">
			<div class="color7"></div><br>
		</div><div class="col-md-3">
			<div class="color8"></div><br>
		</div>
    </div>
</div>
<div class="container">
	<div></div>
</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".color1").click(function()
  {
  	alert("you select green");
    //$(".form_body").removeClass("form_body");
    $(".form_body").addClass("set_color1");
  });
  ////////////////
  $(".color2").click(function()
  {
  	alert("you select red");
    //$(".form_body").removeClass("form_body");
    $(".form_body").addClass("set_color2");
  });
  //////////////
   $("color3").click(function()
  {
  	alert("you select violet");
    //$(".form_body").removeClass("form_body");
    $(".form_body").addClass("set_color3");
  });
   ////////////////
    $(".color4").click(function()
  {
  	alert("you select red");
    //$(".form_body").removeClass("form_body");
    $(".form_body").addClass("set_color4");
  });
    ////////////////////
     $(".color5").click(function()
  {
  	alert("you select red");
    //$(".form_body").removeClass("form_body");
    $(".form_body").addClass("set_color5");
  });
    //////////////////
         $(".color6").click(function()
  {
  	alert("you select pink");
    //$(".form_body").removeClass("form_body");
    $(".form_body").addClass("set_color6");
  });
    //////////////
           $(".color7").click(function()
  {
  	alert("you select black");
    //$(".form_body").removeClass("form_body");
    $(".form_body").addClass("set_color7");
  });
    ///////////
             $(".color8").click(function()
  {
  	alert("you select rosybrown");
    //$(".form_body").removeClass("form_body");
    $(".form_body").addClass("set_color8");
  });
});
</script>