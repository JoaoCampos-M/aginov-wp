

function mapToggle(elClass){
  let el = document.querySelector(elClass);
  if (el.classList.contains("d-none")) {
    el.classList.remove("d-none");
    el.classList.add("d-block");
  } else {
    el.classList.remove("d-block");
    el.classList.add("d-none");
  }
}

addClickMap('.map-indicator-1','.map-preview-1');
function addClickMap(elClass,elClassOp){
  let el=document.querySelector(elClass);
  el.addEventListener('click',()=>{
    mapToggle(elClassOp);
  });
}

