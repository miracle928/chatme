$(document).ready(function(){
	//SEND MESSAGES TO DB
	$("#send").click(function() {
		var message = $("#message").val();
		$.ajax({
			type: "POST",
			url: "send.php",
			data: {message: message},
			success: function(){
				//alert('Message Sent!');
				$("#message").val('');
			}
		});
	});
	//DISPLAY MESSAGES
	setInterval(function() {
		$.ajax({
			type: "POST",
			url: "display.php",
			data: {},
			success: function(data){
				$('.messages_center').html(data);
			}
		});
	}, 250);
	//CHANGING NAME
	$("#change_name").click(function() {
		var name = $("#name").val();
		$.ajax({
			type: "POST",
			url: "name.php",
			data: {name: name},
			success: function(){
				alert('Identity changed!, you have now a new name :)');
				//$("#message").val('');
			}
		});
	});
});

