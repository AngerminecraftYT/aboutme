var finished_typing = false;
var filled = false;

// set up text to print, each item in array is new line
var aText = new Array(
"> Hello!", 
"> My name is Anger!", 
"> I love programming and challenges.",
"> I am interested in Computer and Website Engineering.",
"> I currently work on a lot of projects with HTML, JS, CSS and more.",
"> If you want to know more about me, you are in the right place :) credits to iucc for the page"
);
var iSpeed = 10; // time delay of print out
var iIndex = 0; // start printing array at this posision
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 20; // start scrolling up at this many lines
 
var iTextPos = 0; // initialise text position
var sContents = ''; // initialise contents variable
var iRow; // initialise current row
 
function fill_typewriter() {
	var destination = document.getElementById("typedtext");
	var text = "";
	for (var i = 0; i < aText.length; i++) {
		text += aText[i] +  '<br />';
	}
	destination.innerHTML = text;
	filled = true;
}

function typewriter() {
	sContents =  ' ';
	iRow = Math.max(0, iIndex-iScrollAt);
	var destination = document.getElementById("typedtext");
	while ( iRow < iIndex ) {
    	sContents += aText[iRow++] + '<br />';
   	}
	if (finished_typing == false) {
		destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
	}
   	if ( iTextPos++ == iArrLength ) {
    	iTextPos = 0;
    	iIndex++;
    	if ( iIndex != aText.length ) {
			iArrLength = aText[iIndex].length;
			if (finished_typing == false) {
				setTimeout("typewriter()", 500);
			} 	
    	}
		else {
			finished_typing = true;
			filled = true;
			showcontent();
			destination.innerHTML = destination.innerHTML.replace("_", "");
		}
   	} 
	else {
		if (finished_typing == false) {
			setTimeout("typewriter()", iSpeed);
		} 	
   	}

  }
