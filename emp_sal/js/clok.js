$(document).ready(function(){
	var pin ="";
	var correctpin="2001";
	$(".ranjith").on("click",function(){
		var digit=$(this).text();
		pin+=digit;
		$("#script").val(pin);
	});
	$(".cancel").on("click",function(){
		pin="";
		$("#script").val(pin);
	});
	$(".press").on("click",function(){
		pin="";
		$("#script").val(pin);
	});
	$("#unlock").on("click",function(){
		var enteredPin=$("#script").val();
		if(enteredPin==="2001"){

			console.log("unlocking with PIN:"+ enteredPin);
			$("#script").val("unlocked");
		}
		else{
			console.log("incorrect PIN:"+enteredPin)
		}
		pin="";
	});


});