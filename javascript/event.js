/**
 * Created by Skyler Rexroad on 8/3/2015.
 */

function findAndReplace() {
	// Grab user input (No sanitization OMG!)
	var find = document.getElementById("find").value;
	var replace = document.getElementById("replace").value;

	// Stick it in a regex, yo
	var regex = new RegExp(find, "g");

	// Grab big chunk o' text
	var text = document.getElementById("text").innerHTML;

	// Replace word in the text
	var replacement = text.replace(regex, replace);

	// Put it back in the element
	document.getElementById("text").innerHTML = replacement;
}

function rot13() {
	var text = document.getElementById("text").innerHTML;
	var output = "";

	for(var i = 0; i < text.length; i++) {
		var char = text.charAt(i).toLowerCase();

		var charCode = char.charCodeAt(0);

		//console.log(charCode);

		if(charCode >= 97 && charCode <= 122) {
			charCode += 13;
		}

		if(charCode > 122) {
			charCode -= 26;
		}

		char = String.fromCharCode(charCode);

		output += char;
	}

	// Put it back in the element
	document.getElementById("text").innerHTML = output;
}
