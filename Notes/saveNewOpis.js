$(function(){

	$("#saves").click(function(){	

        var myid = $(this).attr("myid");
		$.post(
			"scripts/saveNewOpis.php", 
			{"opis": $("#opisanie").val(), "myid": myid}, 
			function(data){
				if (data == 0)
                {
                    alert("Не заполнено Описание")
                }
			});				

	});


});
