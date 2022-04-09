let total = 0;
let nAdol = 0;
let nPandol = 0;
let nVento = 0;
let nbiotic = 0;
let nVapo = 0;
let nBand = 0;
let nStrep = 0;
let nElastic = 0;





//get total for adol
function adol() {
    total += 2;
    nAdol += 1
    document.getElementById("adol_num").innerHTML = nAdol
    document.getElementById("total").innerHTML = total + "  OMR";
}

function rm_adol() {
    if (nAdol > 0) {
        total -= 2;
        nAdol -= 1
        document.getElementById("adol_num").innerHTML = nAdol
        document.getElementById("total").innerHTML = total + "  OMR";
    }
}


// ge total for panadol
function panadol() {
    total += 1;
    nPandol += 1
    document.getElementById("panadol_num").innerHTML = nPandol
    document.getElementById("total").innerHTML = total + "  OMR";
}

function rm_panadol() {
    if (nPandol > 0) {
        total -= 1;
        nPandol -= 1
        document.getElementById("panadol_num").innerHTML = nPandol
        document.getElementById("total").innerHTML = total + "  OMR";
    }
}


//get total for ventolin
function ventolin() {
    total += 1.5;
    nVento += 1;
    document.getElementById("ventolin_num").innerHTML = nVento;
    document.getElementById("total").innerHTML = total + "  OMR";
}

function rm_ventolin() {
    if (nVento > 0) {
        total -= 1.5;
        nVento -= 1;
        document.getElementById("ventolin_num").innerHTML = nVento;
        document.getElementById("total").innerHTML = total + "  OMR";
    }
}


// get total for antiBiotics
function biotic() {
    total += 3;
    nbiotic += 1;
    document.getElementById("anitbio_num").innerHTML = nbiotic;
    document.getElementById("total").innerHTML = total + "  OMR";
}

function rm_biotic() {
    if (nbiotic > 0) {
        total -= 3;
        nbiotic -= 1
        document.getElementById("anitbio_num").innerHTML = nbiotic;
        document.getElementById("total").innerHTML = total + "  OMR";
    }
}


// get total  for vaporub
function vaporub() {
    total += 0.5;
    nVapo += 1;
    document.getElementById("vaporub_num").innerHTML = nVapo;
    document.getElementById("total").innerHTML = total + "  OMR";
}

function rm_vaporub() {
    if (nVapo > 0) {
        total -= 0.5;
        nVapo -= 1;
        document.getElementById("vaporub_num").innerHTML = nVapo;
        document.getElementById("total").innerHTML = total + "  OMR";
    }
}


// get total for bandaid
function bandaid() {
    total += 0.8;
    nBand += 1;
    document.getElementById("bandaid_num").innerHTML = nBand;
    document.getElementById("total").innerHTML = total + "  OMR";
}

function rm_bandaid() {
    if (nBand > 0) {
        total -= 0.8;
        nBand -= 1;
        document.getElementById("bandaid_num").innerHTML = nBand;
        document.getElementById("total").innerHTML = total + "  OMR";
    }
}


// get total for streplis
function streplis() {
    total += 2;
    nStrep += 1;
    document.getElementById("strepsils_num").innerHTML = nStrep;
    document.getElementById("total").innerHTML = total + "  OMR";
}

function rm_streplis() {
    if (nStrep > 0) {
        total -= 2;
        nStrep -= 1
        document.getElementById("strepsils_num").innerHTML = nStrep;
        document.getElementById("total").innerHTML = total + "  OMR";
    }
}

// get total for knee
function knee() {
    total += 1.8;
    nElastic += 1
    document.getElementById("elastic_num").innerHTML = nElastic
    document.getElementById("total").innerHTML = total + "  OMR";
}

function rm_knee() {
    if (nElastic > 0) {
        total -= 1.8;
        nElastic -= 1
        document.getElementById("elastic_num").innerHTML = nElastic
        document.getElementById("total").innerHTML = total + "  OMR";
    }
}

// discount
function discount() {
    var dis = document.getElementById("discount_code").value;
    if (dis == "15OF") {
        var discounted = total * 0.15;
        total *= 0.85;
        document.getElementById("disc-msg").innerHTML = "congrats, U got a 15% discount"
        document.getElementById("discount_charge").innerHTML = discounted;
        document.getElementById("total").innerHTML = total + "  OMR";
        document.getElementById("discount_code").setAttribute('readonly', 'readonly')
        discount = sudo;
    } else {
        document.getElementById("disc-msg").innerHTML = "Invalid discount code";
    }
}

function sudo() {

}

function back() {
    sudo = discountpic}
//products XHTML table functions
var pAdol = {name:"adol",pic:"assets/imgs/adol2.png",price:"2"};
var  pPanadol= {name:"panadol",pic:"assets/imgs/panadol.avif",price:"1"};
var pVentolin = {name:"ventolin",pic:"assets/imgs/ventolin.png",price:"1.5"};
var pAntiBiotic = {name:"antiBiotic",pic:"assets/imgs/anitbiotics.png",price:"3"};
var pVaporub = {name:"vaporub",pic:"assets/imgs/vaporub.png",price:"0.5"};
var pBandaid = {name:"bandaid",pic:"assets/imgs/bandaid.png",price:"0.8"};
var pStrepslis = {name:"strepslis",pic:"assets/imgs/strepsils.png",price:"1"};
var pElastic = {name:"elastic",pic:"assets/imgs/elasticknee.png",price:"1.8"};

var products = [pAdol,pPanadol,pVentolin,pAntiBiotic,pVaporub,pBandaid,pStrepslis,pElastic];

function loadProducts(){
    // get table document object
    var t1 = document.getElementById("productsTable");

    // get number of rows that already exist and delete them
    var pRows = t1.rows.length;
    for (var x = pRows - 1; x >= 0; x--) t1.deleteRow(x);
    //get num of rows
    var numRows = products.length/4;
    // populate table with data
    for (var i = 0; i < numRows; i++) {
        var tr = t1.insertRow(i);

        var cell = tr.insertCell(0);
        cell.innerHTML = "<img src="+products[i].pic+" alt='dsdsd'>";
       

        var cell = tr.insertCell(1);
        cell.innerHTML = "<img src="+products[i+1].pic+" alt='dsdsd'>";
        var cell = tr.insertCell(2);
        cell.innerHTML = "<img src="+products[i+2].pic+" alt='dsdsd'>";
        var cell = tr.insertCell(3);
        cell.innerHTML = "<img src="+products[i+3].pic+" alt='dsdsd'>";    }
}