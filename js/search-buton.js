var element = document.getElementById("pesquisa");
if (element.addEventListener) {
	element.addEventListener(
		"submit",
		function (evt) {
			evt.preventDefault();
		},
		true
	);
} else {
	element.attachEvent("onsubmit", function (evt) {
		evt.preventDefault();
	});
}

function opensearch() {
	open = document.getElementById("pesquisa-img");
	pesq = document.getElementById("pesquisa");
	if (!open.classList.contains("d-none")) {
		open.classList.add("d-none");
		pesq.classList.remove("d-none");
		pesq.style.animationName = "aparecer";
		pesq.style.animationDuration = ".5s";
		setTimeout(() => {
			pesq.style.animationName = "";
		}, 500);
	} else {
		pesq.style.animationName = "sumir";
		pesq.style.animationDuration = ".6s";
		setTimeout(() => {
			pesq.style.animationName = "";
			pesq.classList.add("d-none");
			open.classList.remove("d-none");
		}, 200);
	}
}

// function trocaImage() {
// 	img = document.getElementById("brasao");
// 	let a = document.getElementById("brasaobloginfo").value;
// 	img.src = a + "/img/brasao-unemat-colorido.svg";
// 	img.addEventListener("mouseout", () => {
// 		img.src = a + "/img/brasao-unemat.svg";
// 	});
// }
// let imgFoot = document.querySelector(".brasao_unemat_footer");
// console.log(imgFoot);
// if((imgFoot != undefined) && (imgFoot != null)){

// 	imgFoot.addEventListener('mouseover',()=>{
// 		console.log('ativou mouseover');
// 		imgSet();
// 	})
// }
// function imgSet(){
// 	let img = document.querySelector(".brasao_unemat_footer");
// 	let a = document.getElementById("brasaobloginfo").value;
// 	img.src = a + "/img/brasao-unemat-colorido.svg";
// 	img.addEventListener("mouseout", () => {
// 		img.src = a + "/img/brasao-unemat.svg";
// 	});
// }

function faztroca(urlA, urlN, qr){
	img = document.querySelector(qr);
	let valor = document.getElementById('brasaobloginfo').value;
	console.log(valor);
	img.src = valor+urlN;
	img.addEventListener('mouseout',() => {
		img.src = valor+urlA;
	 });
}

trocaImage('/img/brasao-unemat.svg','/img/brasao-unemat-colorido.svg','#brasao');
trocaImage('/img/brasao-unemat.svg','/img/brasao-unemat-colorido.svg','.brasao_unemat_footer');
trocaImage('/img/RiscLogobranca.svg','/img/RiscLogoFUNDOBRANCO','#brasaoRisc');


function trocaImage(urlA, urlN, qr){
	img = document.querySelector(qr);
	console.log(img);
	img.addEventListener('mouseover', () =>{
		 faztroca(urlA, urlN, qr);
	});
}
