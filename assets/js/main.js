
var loader = document.getElementById("preloader");
window.addEventListener("load", function(){
	loader.style.display = "none";
});

// Review form validation

$(document).ready(function () {
	$("#review_submit_btn").click(function(){
		var username = $("#username_review_textarea").val();
		var shortreview = $("#short_review_textarea").val();

		if (username == '') {
			alert("Please Enter User Name");
			return false;
		}
		if (shortreview == '') {
			alert("Please Enter Something as review");
			return false;
		}
	})
});