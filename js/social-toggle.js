
var face=document.querySelector('.check-face'), insta = document.querySelector('.check-insta'), twit = document.querySelector('.check-twit');
// var redes = [face,insta,twit];

function resetAll(){
  for(let c =0;c<3;c++){
    redes[c].checked=false;
  }
}

function checkToggle(obj){
  let result;
  if(obj.checked == true){
    result=true;
  }else{
    result =false;
  }
  return result;
}

function disableAll(){

}
function setContent(el,tg){
  console.log(el);
  if (tg){
    el.classList.remove("d-none");
    el.classList.add("d-block");
  } else {
    el.classList.remove("d-block");
    el.classList.add("d-none");
  }
}
function bsc(elclass){
  let el = document.querySelector(elclass);
  return el;
}
function typeDisable(type){
  let ini = ".check-content-";
  let c1 = bsc(ini+'face');
  let c2 = bsc(ini+'insta');
  let c3 = bsc(ini+'twit');
  
  if(type=='face'){
    insta.checked=false;
    setContent(c2,false);
    twit.checked=false;
    setContent(c3,false);
  }else if(type=='insta'){
    face.checked=false;
    setContent(c1,false);
    twit.checked=false;
    setContent(c3,false);
  }else{
    face.checked=false;
    setContent(c1,false);
    insta.checked=false;
    setContent(c2,false);
  }
}

function verify(type){
  let obj = document.querySelector('.check-'+type);
  let content = document.querySelector('.check-content-'+type);
  if(obj.checked){
    typeDisable(type);
    setContent(content,true);
  }else{
    obj.checked = false;
    setContent(content,false);
  }
}

face.addEventListener('change',()=>{
  verify('face');
});

insta.addEventListener('change',()=>{
  verify('insta');
});

twit.addEventListener('change',()=>{
  verify('twit');
});