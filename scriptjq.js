jQuery(function()
{


	$(".intro").mouseover(function() {
 		$("#exemple-un").css("opacity", "1");
 		$("#exemple-un").css("transition", "opacity 2s");

		$("#exemple-trois" ).css("opacity", "1");
		$("#exemple-trois").css("transition", "opacity 2s");

	});

	$("#un").mouseover(function() {
		$(".1").css("opacity", "1");
		$(".1").css("transition", "1s");
	});
	$("#deux").mouseover(function() {
		$(".2").css("opacity", "1");
		$(".2").css("transition", "1s");
	});
	$("#trois").mouseover(function() {
		$(".3").css("opacity", "1");
		$(".3").css("transition", "1s");
	});
});