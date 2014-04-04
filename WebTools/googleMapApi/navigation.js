var screenwidth = screen.availWidth;
var screenheight = screen.availHeight;
//alert("screen" + screenwidth + "x" + screenheight);

// NAVIGATION
function hideAllMenus() {
	
	document.getElementById("menu3").style.display = "none";
	document.getElementById("map-canvas2").style.display = "none";
}

 

function menu3() {
	hideAllMenus();
	document.getElementById("menu3").style.display = "block";
	document.getElementById("map-canvas2").style.display = "block";
	postAjaxForm('controller=menu3Controller&method=returnSomeData', 'page3.php', 'menu3');
}

