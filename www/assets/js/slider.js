// code to display the current date and time
var d = new Date();
document.getElementById("demo").innerHTML = d;

//functions to transfer the images
function imgSrcToLink1(event) {
    event.preventDefault();
    var imgSrc = document.getElementById("Img1").src;
    window.location = "index.html?ver=" + imgSrc;
}

function imgSrcToLink2(event) {
    event.preventDefault();
    var imgSrc = document.getElementById("Img2").src;
    window.location = "index.html?ver=" + imgSrc + "&price=" + p;
}

function imgSrcToLink3(event) {
    event.preventDefault();
    var imgSrc = document.getElementById("Img3").src;
    window.location = "index.html?ver=" + imgSrc;
}

//function to transfer the value of quantity from singl-page.html to cart.html
function passValue() {
    var qty = document.getElementById("quantity").value;
    localStorage.setItem("textvalue", qty);
    return false;
}