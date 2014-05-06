/*!
 * Stack Portfolio JS
 * by Moe Martinez
 * http://github.com/sfmoe
 */
/*!
 * Stack Portfolio JS
 * by Moe Martinez
 * http://github.com/sfmoe
 */
$(document).ready(function(){
var subclicked = 0; //keep track of clicked for toggling sub-menu
var menuheight = $('#mast').height();


$('.nav-select').on('click', function(e){
if($("#mast").height() != menuheight){
		$('#mast').height(function (index, height) {
		subclicked = 0;
		return (menuheight);
		});
}else{
		$('#mast').height(function (index, height) {
		return (menuheight+60);
		});
}
});




$('.menu-item a').on('click', function(e){
//if it has a sub-menu then prevent it from following the link and show sub-menu
if($(this).next('ul.sub-menu').length != 0){
e.preventDefault();
if (subclicked == 1){
$('#mast').height(function (index, height) {
return (height - 40);
});
subclicked =0;
}else{
$('#mast').height(function (index, height) {
return (height + 40);
});
subclicked =1;
}
}
});

$( window ).resize(function() {
		$('#mast').height(function (index, height) {
		subclicked = 0;
		return (menuheight);
		});
});

$('.gallery').freetile(
	{
	  animate: true,
    elementDelay: 10
	});



});