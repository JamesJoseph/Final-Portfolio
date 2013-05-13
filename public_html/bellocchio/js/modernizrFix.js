if (Modernizr.csstransitions) {
	
	$('#nav a').css( 'color', '#000' );

} else {
	
	$('#nav a').mouseenter().animate({

		color : '#000',
		borderBottom : '#000'

	}, 500);

	$('#nav a').mouseleave().animate({

		color : '#ccc',
		borderBottom : '#fff'

	}, 500);

}



if (Modernizr.csstransitions) {
	
	$('.description').css('opacity', '1');

} else {
	
	$('.description').mouseenter().animate({

		opacity : '1'

	}, 250);

	$('.description').mouseleave().animate({

		opacity : '0'

	}, 250);

}



if (Modernizr.csstransitions) {
	
	$('.facebook', '.twitter', '.pintrest', '.instagram').css('background-position', '0px -30px');

} else {
	
	$('.facebook', '.twitter', '.pintrest', '.instagram').hover().animate({

		backgroundPosition : '0px -30px'

	}, 500);

}



