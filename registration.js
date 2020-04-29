function check() {
 	 document.getElementById("Male").checked = true;
	
function uncheck() {
  	document.getElementById("Female").checked = false;
	}
function validate(){
	var x=document.getElementById('uname').value;
	var y=document.getElementById('passwd').value;
  if (x.length>15 || x.length<8) {
    alert("UserName must be of lenth 8-15");
    return false;
  }
  if (y.length>10 || x.length<5) {
  	alert("Password must be of length 5-10")
  	return false;
  }
}