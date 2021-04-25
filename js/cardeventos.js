class Card {
	Item;
	blogInfo = document.getElementById("brasaobloginfo").value;
	constructor(obj) {
		this.Item = obj;
		let container = document.querySelector(".cards-lives-groups");
		if(this.Item != undefined){
			container.appendChild(this.cardcontainer());
		}
	}
	cardcontainer() {
		let div = document.createElement("div");
		div.setAttribute("class", "cards-lives");
		div.appendChild(this.cardInfo());
		div.appendChild(this.cardTheme());
		div.appendChild(this.cardLink());
		return div;
	}
	cardInfo() {
		let cardInfo = document.createElement("div");
		cardInfo.setAttribute("class", "cards-info");

		let cardInfoT = document.createElement("div");
		cardInfoT.setAttribute("class", "cards-info-title d-flex fd-col j-cent");

		/*subtitulo*/
		let cardInfoSub = document.createElement("div");
		cardInfoSub.setAttribute("class", "cards-info-subtitle");

		/*primeira linha de informações: data e horário */
		let row1 = document.createElement("div");
		row1.setAttribute("class", "row-1");
		let row1col1 = document.createElement("div");
		row1col1.setAttribute("class", "row-2");

		let img1 = document.createElement("img");
		img1.setAttribute("src", this.blogInfo + "/img/icon-calendario.svg");

		let p1 = document.createElement("p");
		p1.setAttribute("class", "cards-info-text d-flex fd-col j-end");

		row1col1.appendChild(img1);
		row1col1.appendChild(p1);

		row1.appendChild(row1col1);

		let row1col2 = document.createElement("div");
		row1col2.setAttribute("class", "row-2");

		let img2 = document.createElement("img");
		img2.setAttribute("src", this.blogInfo + "/img/icon-horario.svg");

		let p2 = document.createElement("p");
		p2.setAttribute("class", "cards-info-text d-flex fd-col j-end");

		row1col2.appendChild(img2);
		row1col2.appendChild(p2);

		row1.appendChild(row1col2);

		/*segunda linha de informações: modalidade e tipo */
		let row2 = document.createElement("div");
		row2.setAttribute("class", "row-1");
		let row2col1 = document.createElement("div");
		row2col1.setAttribute("class", "row-2");

		let img3 = document.createElement("img");
		img3.setAttribute("src", this.blogInfo + "/img/icon-localizacao.svg");

		let p3 = document.createElement("p");
		p3.setAttribute("class", "cards-info-text d-flex fd-col j-end");

		row2col1.appendChild(img3);
		row2col1.appendChild(p3);

		row2.appendChild(row2col1);

		let row2col2 = document.createElement("div");
		row2col2.setAttribute("class", "row-2");

		let img4 = document.createElement("img");
		img4.setAttribute("src", this.blogInfo + "/img/icon-informacao.svg");

		let p4 = document.createElement("p");
		p4.setAttribute("class", "cards-info-text d-flex fd-col j-end");

		row2col2.appendChild(img4);
		row2col2.appendChild(p4);

		row2.appendChild(row2col2);

		/*inserção dos dados da Query nos elementos HTML*/
		if (this.Item != undefined) {
			cardInfoT.appendChild(document.createTextNode(this.Item.titulo));
			cardInfoSub.appendChild(document.createTextNode(this.Item.subtitulo));
			p1.appendChild(document.createTextNode(this.Item.data));
			p2.appendChild(document.createTextNode(this.Item.horario));
			p3.appendChild(document.createTextNode(this.Item.modalidade));
			p4.appendChild(document.createTextNode(this.Item.tipo));
			cardInfo.appendChild(cardInfoT);
			cardInfo.appendChild(cardInfoSub);
			cardInfo.appendChild(row1);
			cardInfo.appendChild(row2);
			return cardInfo;
		}else{
			return undefined;
		}


	}

	cardTheme(){
		let cardtheme = document.createElement('div');
		cardtheme.setAttribute('class','cards-categoria');
		let p = document.createElement('p');
		if(this.Item != undefined){
			p.appendChild(document.createTextNode(this.Item.tema));
			cardtheme.appendChild(p);
			return cardtheme;
		}else{
			return undefined;
		}

	}

	cardLink(){
		let cardlink = document.createElement('div');
		cardlink.setAttribute('class','cards-temas');

		let desc = document.createElement('p');
		desc.setAttribute('class','cards-info-subtitle');
		let b = document.createElement('b');
		b.appendChild(document.createTextNode('Descrição'));
		desc.appendChild(b);

		let resumo = document.createElement('div');
		resumo.setAttribute('class','cards-info-text');
		let pres = document.createElement('p');


		let link = document.createElement('a');
		link.setAttribute('class','btn-blue');
		link.innerText="Saiba Mais";

		let row1 = document.createElement('div');
		row1.setAttribute('class','row-1');

		let row1col1 = document.createElement('div');
		row1col1.setAttribute('class','row-2');

		let row1col2 = document.createElement('div');
		row1col2.setAttribute('class','row-2');

		row1col2.appendChild(this.cardIconLink('/img/icon-internet.svg'));
		row1col2.appendChild(this.cardIconLink('/img/icon-twitter.svg'));
		row1col2.appendChild(this.cardIconLink('/img/icon-facebook.svg'));
		row1col2.appendChild(this.cardIconLink('/img/icon-instagram.svg'));

		row1.appendChild(row1col1);
		row1.appendChild(row1col2);


		if(this.Item != undefined){

			link.setAttribute('href',this.Item.link);
			pres.innerText = this.filterTxt(this.Item.resumo);
			resumo.appendChild(pres);
			cardlink.appendChild(desc);
			cardlink.appendChild(resumo);
			cardlink.appendChild(link);
			cardlink.appendChild(row1);
			return cardlink;
		}else{
			return undefined;
		}

	}

	cardIconLink(link){
		let a = document.createElement('a');
		let img = document.createElement('img');
		img.setAttribute('src', this.blogInfo+link);
		a.appendChild(img);
		return a;
	}
	filterTxt(txt){
		let txt1 = txt.replaceAll(/&hellip;/g,"...");

		txt1 = txt1.replaceAll(/don&#8217;/g,"don'");
		txt1 = txt1.replaceAll(/&rsqb/g,"");

		txt1 = txt1.replaceAll(/&#8221;/g,'"');

		txt1 = txt1.replaceAll(/&#8216;/g,"'");
		return txt1;
	}

}
var maxposts = 0;
var allEvents;
var eventsLength;
function postsContagem() {
	let container = document.querySelector(".cards-lives-groups");
	container.innerHTML = "";
	let subc = 0;
	console.log(subc);
	while (subc < 3 && maxposts <= eventsLength) {
		subc++;
		maxposts++;
	}
	console.log(allEvents);
	console.log(eventsLength);

	for (let c = 0; c < maxposts; c++) {
		new Card(allEvents[c]);
	}
}
