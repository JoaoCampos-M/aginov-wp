
var face = {
   control:document.querySelector('.check-face'),
   content:document.querySelector('.check-content-face'),
   type:'face',
}, insta = {
   control:document.querySelector('.check-insta'),
   content:document.querySelector('.check-content-insta'),
   type:'insta',
},twit = {
   control:document.querySelector('.check-twit'),
   content:document.querySelector('.check-content-twit'),
   type:'twit',
};
var redes = [face,insta,twit];

function checkToggle(obj){
  let result;
  if(obj.checked == true){
    result=true;
  }else{
    result =false;
  }
  return result;
}

function setContent(el,tg){
  // console.log(el);
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

function removeContents(ctr1,cnt1,ctr2,cnt2){
  let config =[];
  config.push({control:ctr1,content:cnt1});
  config.push({control:ctr2,content:cnt2});
  for(let c =0;c<2;c++){
    config[c].control.checked=false;
    setContent(config[c].content,false);
  }

}

function typeDisable(type, content){
  if(type=='face'){
    removeContents(insta.control, insta.content, twit.control, twit.content);
  }else if(type=='insta'){
    removeContents(face.control, face.content, twit.control, twit.content);
  }else{
    removeContents(face.control, face.content, insta.control, insta.content);
  }
}

function verify(obj){
  if(obj.control.checked){
    typeDisable(obj.type, obj.content);
    setContent(obj.content,true);
  }else{
    obj.control.checked = false;
    setContent(obj.content,false);
  }
}

for(let c =0;c<3;c++){
  redes[c].control.addEventListener('change',()=>{
    verify(redes[c]);
  });
}