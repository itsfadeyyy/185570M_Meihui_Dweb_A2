$(function(){
	$(".switch-login").on("click",ShowLogin);
	$(".switch-login1").on("click",ShowRegis);
});



function ShowLogin() {
$(".formcon").css({"visibility":"hidden"});
$(".formcon1").css({"visibility":"visible"});
}

function ShowRegis() {
$(".formcon").css({"visibility":"visible"});
$(".formcon1").css({"visibility":"hidden"});
	
}