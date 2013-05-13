var $mailing = $("#mailing");

$mailing.submit( stopSubmit );

function stopSubmit(e) {
	e.preventDefault();

	var data = $(this).serialize();
	//console.log(data);

	$.post( this.action, data, removeForm );
}

function removeForm(response) {
	var $html = $(response).find("#mailList").html();
	console.log(response);

	//$myForm.parent().html($html);

	var $popup = $( '<div class="popup"></div>)');
	$( "#mailing" ).fadeOut( 1500 );
	$popup.append( $html ).fadeIn( 1500 );
	$('#mailList').append( $popup );
	//$popup.delay( 1500 );
	
}