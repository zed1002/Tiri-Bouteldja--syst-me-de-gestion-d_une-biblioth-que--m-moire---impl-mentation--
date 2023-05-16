$(document).ready(function(){

             $("#send").click(function(){

             	var name = $("#name").val();
				var msg = $("#msg").val();

             	$.post("action.php", {submit:1,userName:name,userMsg:msg}, function(data){

             		$("#done").text(data);
             	});
             });

     setInterval(function () {
                $('#show').load('data.php')
            }, 1000);

		});