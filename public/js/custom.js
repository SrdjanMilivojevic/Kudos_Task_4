$(document).ready(function(){
	$.getJSON('public/js/data.json', function(json){
		/* Continue... */
	});
});

function delete_message(id){
	console.log('Delete message with id: '+id);
}

function reply_message(id, sender){
	console.log('Message id: '+id);
	console.log('Reply to: '+sender);
}
