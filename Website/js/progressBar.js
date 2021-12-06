let progress = document.getElementById("progressBar");
let totalHeight = document.body.scrollHeight - window.innerHeight;
const navbar = document.querySelector(".nav"); //Declaring variable for nav bar

window.onscroll = function () {
	let progressHeight = (window.pageYOffset / totalHeight) * 100;
	progress.style.height = progressHeight + "%";

	var top = window.scrollY; //getting position
	if (top >= 600) {
		//if position is >= 600 pixel active class is aaded
		navbar.classList.add("active");
	} else {
		//else active class is removed
		navbar.classList.remove("active");
	}
};
