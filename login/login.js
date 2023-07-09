let type1=document.getElementById("type1");
let type2=document.getElementById("type2");
let type3=document.getElementById("type3");
let type=document.getElementById("acctype");
let typeofacc=document.getElementById("typeof");
typeofacc.value=1;

type1.addEventListener("click",(e)=>{
    type1.classList.add('active');
    type2.classList.remove('active');
    type3.classList.remove('active');
    typeofacc.value=1;
})
type2.addEventListener("click",(e)=>{
    type2.classList.add('active');
    type1.classList.remove('active');
    type3.classList.remove('active');
    typeofacc.value=2;
})
type3.addEventListener("click",(e)=>{
    type3.classList.add('active');
    type2.classList.remove('active');
    type1.classList.remove('active');
    typeofacc.value=3;
})