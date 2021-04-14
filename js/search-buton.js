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

function faztroca(urlA, urlN, qr) {
	img = document.querySelector(qr);
	let valor = document.getElementById("brasaobloginfo").value;
	console.log(valor);
	img.src = valor + urlN;
	img.addEventListener("mouseout", () => {
		img.src = valor + urlA;
	});
}

trocaImage("/img/brasao-unemat.svg","/img/brasao-unemat-colorido.svg","#brasao");
trocaImage("/img/brasao-unemat.svg","/img/brasao-unemat-colorido.svg",".brasao_unemat_footer");
trocaImage("/img/RiscLogobranca.svg","/img/RiscLogoFUNDOBRANCO.svg","#brasaoRisc");

function trocaImage(urlA, urlN, qr) {
	console.log(qr);
	if (qr != null) {
		img = document.querySelector(qr);
		img.addEventListener("mouseover", () => {
			faztroca(urlA, urlN, qr);
		});
	}
}
