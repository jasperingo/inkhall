function ready() {

	let form = document.getElementsByTagName('form')[0];

	let dropDown = document.getElementById("drop-down-list");
				
	let btn = document.getElementById('search-link');
	btn.addEventListener("click", (e) => {

		e.preventDefault();

		form.classList.remove("hide");

	});


	let cbtn = document.getElementById('close-search-button');
	cbtn.addEventListener("click", () => {

		form.classList.add("hide");

	});

	let menuBtn = document.getElementById("menu-link");
	menuBtn.addEventListener("click", (e) => {

		e.preventDefault();

		dropDown.classList.toggle("hide");

	});

}


window.addEventListener("load", ready);





