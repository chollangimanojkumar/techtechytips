function showpass() {
	  var x = document.getElementById('passwd');
	  if (x.type == "password") {
		x.type = "text";
	  } else {
		x.type = "password";
	  }
	}
	
function validate(){
	 var x=document.getElementById('uname').value;
	 var y=document.getElementById('passwd').value;
  if (x.length>15 || x.length<5) {
    alert("UserName must be of length 5-15");
    return false;
  }
  if (y.length>15 || y.length<5) {
  	alert("Password must be of length 5-15");
  	return false;
  }
}
