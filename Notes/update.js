
$(function(){

	$(".update").click(function(){	

        var myid = $(this).attr("myid");	
        $(".blockred").css("display", 'flex');
        $("#saves").attr("myid", myid);
        $.post("scripts/getOpis.php", {"myid": myid}, function(data){
            data = JSON.parse(data);
            for (var i = 0; i < data.length; i++){
				var users = data[i];
                $("#opisanie").val(users.opis);
                
			}
        });				
    
    });


});

$(function(){

	$(".closed").click(function(){	
	
        $(".blockred").css("display", 'none');			
    
    });


});

