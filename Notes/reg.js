$(function(){

	$("#reg_btn").click(function(){	

		$.post("scripts/reg.php", 
		{"nickname": $("#nickname").val(), "password1": $("#password1").val(), "password2": $("#password2").val()}, 
		function(data){
			
			if (data == "success"){
				alert("User zaregestrirovan");
				$(".okno_yes_pass").css("display", 'flex');
			}
			else if (data == "failed") {
				alert("Paroli ne sovpadauyt");
				$(".okno_los_pass").css("display", 'flex');
			}
			
			else if (data == "login") {
				alert("nickname zanyat");
				$(".okno_nick").css("display", 'flex');
			}

			
			});				

	});


});