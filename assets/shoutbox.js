(function($,Contao){$(function(){
	var request = null;

	function getNewMessages() {
		if(request)
			request.abort();

		request = $.ajax({
			type: "POST",
			url: "ajax.php",
			data: { getNewShouts: 1, REQUEST_TOKEN: Contao.request_token },
			success: function(txt,status){
				$('#messages').html('');
				$($.parseJSON(txt).content).appendTo('#messages');
			}
		});
	}

	if(typeof $('.mod_shoutbox')[0] != 'undefined'){
		getNewMessages();
		setInterval(getNewMessages,60000);
	}

});})(jQuery,Contao)