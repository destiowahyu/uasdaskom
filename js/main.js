//animasi
const inputs = document.querySelectorAll(".input");

//animasi untuk username
function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

//animasi untuk password
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
