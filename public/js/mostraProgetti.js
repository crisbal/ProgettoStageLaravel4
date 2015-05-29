$("#sInvernali").click(function() {
    $("#pannelloAlternanze").hide();
    $("#pannelloStageEstivi").hide();
    $("#pannelloStageInvernali").show();
    $("#titolo").text("STAGE INVERNALI");
});

$("#alternanze").click(function() {
    $("#pannelloAlternanze").show();
    $("#pannelloStageEstivi").hide();
    $("#pannelloStageInvernali").hide();
    $("#titolo").text("ALTERNANZE SCUOLA-LAVORO");
});

$("#sEstivi").click(function() {
    $("#pannelloAlternanze").hide();
    $("#pannelloStageEstivi").show();
    $("#pannelloStageInvernali").hide();
    $("#titolo").text("STAGE ESTIVI");
});

$(document).ready(function () {
	(function ($) {
		$("#pannelloAlternanze").hide();
	    $("#pannelloStageEstivi").hide();
	    $("#pannelloStageInvernali").hide();
    }(jQuery));
});