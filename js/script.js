/* Author:
	Lucas Rockett Gutterman
*/

/* Modified version of JQuery Retina Display Plugin
 * https://github.com/mcilvena/jQuery-Retina-Display-Plugin */
(function( $ ){
	$.fn.retina = function(retina_part) {
		// Set default retina file part to '@2x'
		// Eg. some_image.jpg will become some_image@2x.jpg
		var settings = {'retina_part': '@2x'};
		if(retina_part) jQuery.extend(settings, { 'retina_part': retina_part });

		if(window.devicePixelRatio >= 1.5) {
			this.each(function(index, element) {
				if(!$(element).attr('src')) return;

				var checkForRetina = new RegExp("(.+)("+settings['retina_part']+"\\.\\w{3,4})");
				if(checkForRetina.test($(element).attr('src'))) return;

				var new_image_src = $(element).attr('src').replace(/(.+)(\.\w{3,4})$/, "$1"+ settings['retina_part'] +"$2");
				$.ajax({url: new_image_src, type: "HEAD", success: function() {
					$(element).attr('src', new_image_src);
				}});
			});
		}
		return this;
	}
})( jQuery );

Call jQuery.retina all all images
(function() {
	jQuery('img').retina();
})();

//Add active class to nav-elem that user is visting.
//Doesn't work for index/home. Done manually in index.html
$(function(){
	var path = location.pathname.substring(1);
	if ( path )
		$('div.nav a[href$="' + path + '"]').addClass('active');
})
