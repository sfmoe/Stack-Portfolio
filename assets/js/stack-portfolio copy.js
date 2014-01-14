/*!
 * Stack Portfolio JS
 * by Moe Martinez
 * http://github.com/sfmoe
 */
document.createElement('header');
document.createElement('footer');
document.createElement('section');
document.createElement('article');
document.createElement('aside');
document.createElement('nav');

//wrapper for jquery $ to make it safe to run and easier to write/read ...i hate having to write jQuery over and over :P
;(function($) {

$(document).ready(function(){



$('.nav-button').click(function(){  
	$('.nav').toggle();  
    $('.nav-list').toggle();  
	 $('.nav').toggleClass("nav-inblock");  
    $('.nav-list').toggleClass("nav-inblock");  
});


		$('.menu-item-has-children > a').first().on('click', function(e){
			
				e.preventDefault();
				$('.sub-menu', this).toggle();
	
			
			
		});


});

})(jQuery);