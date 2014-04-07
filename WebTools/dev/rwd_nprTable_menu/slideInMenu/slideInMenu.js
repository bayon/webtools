function slideIn() {
	alert('slideIn');
	var element = document.getElementById("slideInMenu");
	element.style.webkitAnimationPlayState = "paused";
	element.style.webkitAnimationPlayState = "running";

}

function slideOut() {
	alert('slideOut');
	var element = document.getElementById("slideInMenu");
	element.style.display="none";

}