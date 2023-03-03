$(function(){

	$.post("scripts/getNotes.php", {}, function(data){
		if (data != 0) {
            console.log(data);
			data = JSON.parse(data);
			console.log(data);
			for (var i = 0; i < data.length; i++){
				var users = data[i];
				var list = $("#structure .list").clone(true);
                $(".table").append(list);
                list.find(".name").attr("myid", users.id);
                list.find(".delete").attr("myid", users.id);
                list.find(".name").text(users.title);
                $(".update").attr("myid", users.id);
			}
		}
	});
});





