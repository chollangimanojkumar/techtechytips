	/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.getElementById("heading").style.marginLeft="250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  document.getElementById("heading").style.marginLeft="0";
}
function darkToggle() {
	if(document.getElementById("body").style.backgroundColor=="black")
	{
		document.getElementById("body").style.backgroundColor="white";
		document.getElementById("text").style.color="black";
		document.getElementById("text1").style.color="black";
		document.getElementById("text2").style.color="black";
		document.getElementById("text3").style.color="black";
	}
	else{
		document.getElementById("body").style.backgroundColor="black"
		document.getElementById("text").style.color="white";
		document.getElementById("text1").style.color="white";
		document.getElementById("text2").style.color="white";
		document.getElementById("text3").style.color="white";
	}
}
