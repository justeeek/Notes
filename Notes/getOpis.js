
$(function(){

	$(".name").click(function(){	

        var myid = $(this).attr("myid");	
        
        $.post("scripts/getOpis.php", {"myid": myid}, function(data){
            data = JSON.parse(data);
            for (var i = 0; i < data.length; i++){
				var users = data[i];
				$(".opis").text(users.opis);
                
			}
        });				
        $(".update").attr("myid", myid);	
        $(".knopki").css("display", 'flex');
        $(".blockred").css("display", 'none');	
    });


});