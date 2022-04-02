

function moving(){
// to add date 
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
// to print output
document.getElementById("movingtext").innerHTML = "Welcome to Clinicom Oman website, and the time is  " + time ;
console.log(date)
}

window.onload = function(){
    moving();
}

