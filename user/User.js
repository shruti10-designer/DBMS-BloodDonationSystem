let h=document.getElementById('head');

let currentDate= new Date();
let cDay = currentDate.getDate();
let cMonth = currentDate.getMonth() + 1;
let cYear = currentDate.getFullYear();
let date =cDay + "/" + cMonth + "/" + cYear;
let time = currentDate.getHours() + ":" + currentDate.getMinutes() + ":" + currentDate.getSeconds();
h.innerHTML="<p>Welcome <br>"+date+"&nbsp;&nbsp;&nbsp;&nbsp;"+time+"</p>";

setInterval( ()=>{
    let currentDate= new Date();
let cDay = currentDate.getDate();
let cMonth = currentDate.getMonth() + 1;
let cYear = currentDate.getFullYear();
let date =cDay + "/" + cMonth + "/" + cYear;
let time = currentDate.getHours() + ":" + currentDate.getMinutes() + ":" + currentDate.getSeconds();

h.innerHTML="<p>Welcome <br>"+date+"&nbsp;&nbsp;&nbsp;&nbsp;"+time+"</p>";
},1000 );
