let secCon = document.getElementById('container');
let sec3 = document.getElementById('body');
let sec = document.getElementById('popup');

function setOpc(select,value){
    return select.style.opacity = value;
}
function setWtdh(slct,val){
    return slct.style.width = val;
}
function setDsply(sl,vl){
    return sl.style.display = vl;
}
function setPvnt(s,v){
    return s.style.pointerEvents = v;
}
function setOvr(se,va){
    return se.style.overflowY = va;
}
function on_mouse(id) {
    let select = document.getElementById(id);
    setWtdh(select,'100%');
}
function out_mouse(id){
    let select = document.getElementById(id);
    setWtdh(select,'0');
}
function eventStart(){
    setDsply(sec,'block');
    setOpc(secCon,'0.4');
    setPvnt(secCon,'none');
    setOvr(sec3,'hidden');
}
window.addEventListener('load', ()=> {
    setTimeout(eventStart,2000);
});
function closer(){
    setDsply(sec,'none');
    setOpc(secCon,'1');
    setPvnt(secCon,'auto');
    setOvr(sec3,'auto');
}
