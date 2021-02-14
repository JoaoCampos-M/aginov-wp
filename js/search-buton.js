var element = document.getElementById('pesquisa');
if (element.addEventListener) {
    element.addEventListener("submit", function(evt) {
        evt.preventDefault();
    
    }, true);
}
else {
    element.attachEvent('onsubmit', function(evt){
        evt.preventDefault();
       
    });
}

function opensearch(){
    open = document.getElementById('pesquisa-img');
    pesq = document.getElementById('pesquisa');
    if(!open.classList.contains('d-none')){
        open.classList.add('d-none');
        pesq.classList.remove('d-none');
        pesq.style.animationName = "aparecer";
        pesq.style.animationDuration = '.5s';
        setTimeout(() => {
            pesq.style.animationName = "";

        },500);
    }else{
        pesq.style.animationName = "sumir";
        pesq.style.animationDuration = '.6s';
        setTimeout(() => {
            pesq.style.animationName = "";
            pesq.classList.add('d-none');
            open.classList.remove('d-none');

        },200); 
    }
    
 }

 function trocaImage(){
     img = document.getElementById('brasao');
     img.src = "img/brasao-unemat-colorido.svg";
     img.addEventListener('mouseout',() => {
        img.src = "img/brasao-unemat.svg";
      });
 }
