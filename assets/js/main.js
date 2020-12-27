$(function () {
	$("#data_table").addClass("activity");
	// $("#user_manage").addClass("activity");

	$(".navItem").click(function (e) {
		$(".navItem").removeClass("active");
		$(".all-content-wrapper").removeClass("activity");
		var flag = "";
		if ($(e.target)[0].tagName == "SPAN") {
			flag = $(e.target).parent().attr("id");
			$(e.target).parents(".navItem").addClass("active");
		} else {
			flag = $(e.target).parent().find("a").attr("id");
			$(e.target).parent().addClass("active");
		}
		switch (flag) {
			case "manage":
				$("#user_manage").addClass("activity");
				break;
			case "add":
				$("#add_user").addClass("activity");
				break;
			case "offer":
				$("#data_table").addClass("activity");
				break;
		}
	});


});