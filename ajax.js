$(document).ready(function(){
	
	$('.select1').change(function() {

		var ID = $(this).children(":selected").attr("id");
    	$('.select1').css('color', ID);

    	if ($(this).val() === "ON") {
        	var clicked = new XMLHttpRequest();
			clicked.open("GET", "1on.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}else{
    		var clicked = new XMLHttpRequest();
			clicked.open("GET", "1off.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}
	});
	$('.select2').change(function() {

		var ID = $(this).children(":selected").attr("id");
    	$('.select2').css('color', ID);

    	
    	if ($(this).val() === "ON") {
        	var clicked = new XMLHttpRequest();
			clicked.open("GET", "2on.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}else{
    		var clicked = new XMLHttpRequest();
			clicked.open("GET", "2off.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}
	});

	$('.select3').change(function() {

		var ID = $(this).children(":selected").attr("id");
    	$('.select3').css('color', ID);

    	
    	if ($(this).val() === "ON") {
        	var clicked = new XMLHttpRequest();
			clicked.open("GET", "3on.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}else{
    		var clicked = new XMLHttpRequest();
			clicked.open("GET", "3off.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}
	});

	$('.select4').change(function() {

		var ID = $(this).children(":selected").attr("id");
    	$('.select4').css('color', ID);

    	
    	if ($(this).val() === "ON") {
        	var clicked = new XMLHttpRequest();
			clicked.open("GET", "4on.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}else{
    		var clicked = new XMLHttpRequest();
			clicked.open("GET", "4off.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}
	});	

	$('.select5').change(function() {

		var ID = $(this).children(":selected").attr("id");
    	$('.select5').css('color', ID);

    	
    	if ($(this).val() === "ON") {
        	var clicked = new XMLHttpRequest();
			clicked.open("GET", "5on.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}else{
    		var clicked = new XMLHttpRequest();
			clicked.open("GET", "5off.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}
	});	

	$('.select6').change(function() {

		var ID = $(this).children(":selected").attr("id");
    	$('.select6').css('color', ID);

    	
    	if ($(this).val() === "ON") {
        	var clicked = new XMLHttpRequest();
			clicked.open("GET", "6on.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}else{
    		var clicked = new XMLHttpRequest();
			clicked.open("GET", "6off.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}
	});	

	$('.select7').change(function() {

		var ID = $(this).children(":selected").attr("id");
    	$('.select7').css('color', ID);

    	
    	if ($(this).val() === "ON") {
        	var clicked = new XMLHttpRequest();
			clicked.open("GET", "7on.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}else{
    		var clicked = new XMLHttpRequest();
			clicked.open("GET", "7off.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}
	});	

	$('.select8').change(function() {

		var ID = $(this).children(":selected").attr("id");
    	$('.select8').css('color', ID);

    	
    	if ($(this).val() === "ON") {
        	var clicked = new XMLHttpRequest();
			clicked.open("GET", "8on.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}else{
    		var clicked = new XMLHttpRequest();
			clicked.open("GET", "8off.php");
			clicked.onreadystatechange=function(){
			if(clicked.readyState==4){
				if(clicked.status==200){
				}
				else alert("ERROR");
			}
		}
		clicked.send();
    	}
	});	
});