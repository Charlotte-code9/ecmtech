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
    var password = document.querySelector('[name=password]');

    if(password.getAttribute('type')==='password'){
        password.setAttribute('type', 'text');
        document.getElementById("font");
    }

    else{
        password.setAttribute('type','password');
        document.getElementById('font');
    }
}

function togglePW1(){
    var password = document.querySelector('[name=password_confirmation]');

    if(password.getAttribute('type')==='password'){
        password.setAttribute('type', 'text');

    }

    else{
        password.setAttribute('type','password');
        document.getElementById('font');
    }
}

function togglePWL(){
    var password = document.querySelector('[name=password]');

    if(password.getAttribute('type')==='password'){
        password.setAttribute('type', 'text');
        document.getElementById("fonts").style.color='black';


    }

    else{
        password.setAttribute('type','password');
        document.getElementById('font');
    }
}

