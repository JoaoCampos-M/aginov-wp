function barraNavbarAnimate(elF, opc) {
  let barra = elF.querySelector(".barra-navbar");
  if (opc == 1) {
    barra.style.animationName = "margin-left-rmv";
    barra.style.animationDuration = "0.4s";
  } else {
    barra.style.animationName = "margin-left-add";
    barra.style.animationDuration = "0.4s";
  }
}

function listaToggle(elClass) {
  let el = document.querySelector(elClass);
  let bt = document.querySelector(elClass + "-op");
  if (el.classList.contains("d-none")) {
    el.classList.remove("d-none");
    el.classList.add("d-block");
    bt.style.animationName = "padding-bottom-add";
    bt.style.animationDuration = "0.4s";
    barraNavbarAnimate(el.parentNode, 1);
  } else {
    el.classList.remove("d-block");
    el.classList.add("d-none");
    bt.style.animationName = "padding-bottom-rmv";
    bt.style.animationDuration = "0.4s";
    barraNavbarAnimate(el.parentNode, 2);
  }
}

addClickLista(".inicio-op", ".inicio");
addClickLista(".menu2-op", ".menu2");
addClickLista(".menu3-op", ".menu3");
addClickLista(".contato-op", ".contato");
addClickLista(".empreend-op", ".empreend");

function addClickLista(elClass, opClass) {
  el = document.querySelector(elClass);
  el.addEventListener("click", () => {
    listaToggle(opClass);
  });
}
