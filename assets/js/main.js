
var loader = document.getElementById("preloader");
window.addEventListener("load", function(){
	loader.style.display = "none";
});

// Review form validation

$(document).ready(function () {
	$("#review_submit_btn").click(function(){
		var username = $("#username_review_textarea").val();
		var shortreview = $("#short_review_textarea").val();

		if (username == '' || shortreview == '') {
			alert("Please Fill Completly");
			return false;
		}
		else{
			alert("Review Added !");
		}
		
	})
});

