
let buttons;

function readyShowPasword() {

	buttons = document.getElementsByClassName('button-with-input');
	
	for (var i = 0; i < buttons.length; i++) {
		buttons[i].addEventListener("click", showInput);
	}
	

}


window.addEventListener("load", readyShowPasword);


function showInput() {

	let box = this.parentElement;

	box.children[2].classList.toggle("hide");
	box.children[3].classList.toggle("hide");

	if (box.children[1].type == "password") {
		box.children[1].type = "text";
	} else {
		box.children[1].type = "password";
	}

}






