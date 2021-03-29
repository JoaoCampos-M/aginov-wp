function menu() {
    open = document.getElementById('open');
    close = document.getElementById('close');
    if (close.classList.contains('d-none')) {
        close.classList.remove('d-none');
        close.classList.add('d-flex');
        open.classList.add('d-none');
        close.style.animationName = "abre-menu-drop";
        close.style.animationDuration = '.5s';
        setTimeout(() => {
            close.style.animationName = "";
        }, 500);
    } else {
        open.classList.remove('d-none');
        close.style.animationName = "fecha-menu-drop";
        close.style.animationDuration = '.5s';
        setTimeout(() => {
            close.style.animationName = "";
            close.classList.add('d-none');
            close.classList.remove('d-flex');
            dropToggleMob(undefined);
        }, 500);
    }
}
function ola(){
	let opcList = document.querySelector('.opcao-list');
	let t = opcList.getElementsByClassName('dropdown-menu').length;
	console.log(t);
	console.log('olá mundo');
	for(let c =0; c<t; c++){
		console.log('chegou aqui');
		let item = opcList.getElementsByClassName('navbar-item')[c];
		if (!item.classList.contains("d-none")) {
			item.classList.add("d-none");
			item.classList.remove("d-block");
		};
	}
	console.log('olá mundo');
}

function dropToggleMob(el) {
	if (el != undefined) {
		 if (el.classList.contains("d-none")) {
			  el.classList.remove("d-none");
			  el.classList.add("d-block");

		 } else {
			  el.classList.remove("d-block");
			  el.classList.add("d-none");
		 }
	}
}

function addClickMap(a, ul) {
	a.addEventListener('click', () => {
		 dropToggleMob(ul);
		 ola();
	});
}
let opcList = document.querySelector('.opcao-list');
let t = opcList.getElementsByClassName('navbar-item').length;
 for(let c =0; c<t; c++){
   let i = opcList.getElementsByClassName('navbar-item')[c];
   let a = i.getElementsByTagName('a')[0];
   let ul = i.getElementsByTagName('ul')[0];
	if(!(ul==undefined)){
		console.log(ul);
		addClickLista(a,ul)
		console.log("a:"+a+"/ ul:"+ul+"/ i:",i);
	}

 }
