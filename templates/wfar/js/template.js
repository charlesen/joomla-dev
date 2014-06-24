/* Javscript Document  */

$( function () {
	
	// Customers
	if ( $('.page-clients').length > 0 ) {
		$('.page-clients').find('td').append( $('<p />').addClass('page-clients-caption') );
		
		//Add caption
		$('.page-clients').find('img').each( function () {
			$(this).parent().find('.page-clients-caption').text( $(this).attr('title') );
		});
		
		$('.page-clients').find('td').hover(function() {
			$(this).find('img').css('opacity', '0.3');
			$(this).find('.page-clients-caption').show();
		}, function (){
			$(this).find('img').css('opacity', '1');
			$(this).find('.page-clients-caption').hide();
		});;
	}
	
});