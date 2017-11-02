var subreddits = ["java", "learnjava", "programming", "learnprogramming", "python", "learnpython"];
var input;

$(function(){	
	$("#r_form").change(function() {
		if(subreddits.indexOf($(":checked").val()) != -1){
            input = $(":checked").val();
        }
		$.ajax({
			url: "php/scraping.php",
			data: {
					subreddit: input
			},
			beforeSend: function() {
				$("#output").addClass("loading-icon");
				$("#output").html("<i class='fa fa-spinner fa-pulse'></i>");
			},
			error: function() {
				$("#output").html("Failed...").show("slow");
			},
			success: function (data) {
				$("#output").removeClass("loading-icon");
				$("#output").html(data).show();
			}
		});
	});
});

function startScraper(){
	$("#r_form").trigger("change");
}
