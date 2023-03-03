
$(function(){

	$(".delete").click(function(){	

        var myid = $(this).attr("myid");	
        
        $.post("scripts/deleteNote.php", {"myid": myid}, function(data){
            window.location.reload();
        });				
    
    });


});