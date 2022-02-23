const { toSafeInteger } = require("lodash");

const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});


function togglePW(){
    var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}

function togglePW1(){
    var password = document.querySelector('[name=password_confirmation]');

    if(password.getAttribute('type')==='password'){
        password.setAttribute('type', 'text');
        document.getElementById('hides').style.display = "inline-block";
        document.getElementById('fontss').style.display = "none";
        document.getElementById('hides').style.color='black';
    }



    else{
        password.setAttribute('type','password');
        document.getElementById('fonts');
        document.getElementById('hides').style.display = "none";
        document.getElementById('fontss').style.display = "inline-block";
    }
}

function togglePWL(){
    var password = document.querySelector('[name=password]');

    if(password.getAttribute('type')==='password'){
        password.setAttribute('type', 'text');
        document.getElementById('hide').style.display = "inline-block";
        document.getElementById('fonts').style.display = "none";
        document.getElementById('hide').style.color='black';
    }

    else{
        password.setAttribute('type','password');
        document.getElementById('hide').style.display = "none";
        document.getElementById('fonts').style.display = "inline-block";
    }
}

$(function(){
    $('.datepicker').datepicker({
       format: 'mm-dd-yyyy'
     });
 });

