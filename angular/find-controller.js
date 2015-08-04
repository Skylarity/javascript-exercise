app.controller("FindController", function($scope) {

	// Not sure if I should be using document.getElementById, but it was the only way I could make it work.
	this.text = document.getElementById("text").innerHTML;

	this.highlight = function(find) {
		// Stick it in a regex, yo
		var regex = new RegExp(find, "g");

		// Replace word in the text
		// "<span style='background: yellow'>" + find + "</span>"
		var regexMatches = this.text.match(regex);

		// Sort of almost-working hacky replacement of the match and not the expression
		var replacement = this.text.replace(regex, "<span style='background: yellow'>" + regexMatches[0] + "</span>");

		// Put it back in the element
		document.getElementById("text").innerHTML = replacement;
	};
});
