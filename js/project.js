$(function() {
	$(".tab").on("click", function(){
		$(this).siblings().css("color", "dimgray");
		$(this).siblings().css("border-bottom", "none");
		$(this).siblings().removeClass("selected");
		$(this).addClass("selected");

		var parent = $(this).parent().parent();
		var color = $(parent).attr("class")[0];
		if (color == "r"){
			$(this).css({"color": "var(--main-color-1)",
			"border-bottom": "solid 5px var(--main-color-1)"});
		} else if (color == "g") {
			$(this).css({"color": "var(--main-color-2)",
			"border-bottom": "solid 5px var(--main-color-2)"});
		} else if (color == "b"){
			$(this).css({"color": "var(--main-color-3)",
			"border-bottom": "solid 5px var(--main-color-3)"});
		} else if (color == "o"){
			$(this).css({"color": "var(--main-color-4)",
			"border-bottom": "solid 5px var(--main-color-4)"});
		}
		
		var text = $(this).text();
		if (text == "project"){
			$(parent).css("min-height", 0);
		} else {
			$(parent).css("min-height", $(parent).height());
		}
		
		$(this).parent().siblings().each(function(){
			if ($(this).attr("id") == text){
				$(this).css("display", "block");
			} else if ($(this).attr("id") == "project" ||
				$(this).attr("id") == "info"){
				$(this).css("display", "none");
			}
		});
	});
}); 

