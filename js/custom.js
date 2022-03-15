$(document).ready(function(){
	$(".nav-link, .footer_tags").click(function(){
		window.location.href="https://dev.metarix.network"+$(this).attr("href");
	});
})


