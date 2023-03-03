$(function(){

	$("#save").click(function(){	

		$.post(
			"scripts/create.php", 
			{"title": $("#title").val(), "opis": $("#opis").val()}, 
			function(data){
				if (data == 0)
                {
                    alert("Не заполнен Заголовок или Описание")
                }
			});				

	});


});
