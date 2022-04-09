let total = 0;
let nAdol = 0;
let nPandol = 0;
let nVento = 0;
let nbiotic = 0;
let nVapo = 0;
let nBand = 0;
let nStrep = 0;
let nElastic = 0;



function getTotal() {
    document.getElementById("total").innerHTML = total + "  OMR";
    
}

//get total for adol
function adol() {
    total += 2;
    nAdol += 1
    document.getElementById("adol_num").innerHTML = nAdol

}

function rm_adol() {
    if (nAdol > 0) {
        total -= 2;
        nAdol -= 1
        document.getElementById("adol_num").innerHTML = nAdol
    }
}


// ge total for panadol
function panadol() {
    total += 1;
    nPandol += 1
    document.getElementById("panadol_num").innerHTML = nPandol

}

function rm_panadol() {
    if (nPandol > 0) {
        total -= 1;
        nPandol -= 1
        document.getElementById("panadol_num").innerHTML = nPandol
    }
}


//get total for ventolin
function ventolin() {
    total += 1.5;
    nVento += 1;
    document.getElementById("ventolin_num").innerHTML = nVento;

}

function rm_ventolin() {
    if (nVento > 0) {
        total -= 1.5;
        nVento -= 1;
        document.getElementById("ventolin_num").innerHTML = nVento;
    }
}


// get total for antiBiotics
function biotic() {
    total += 3;
    nbiotic += 1;
    document.getElementById("anitbio_num").innerHTML = nbiotic;
}

function rm_biotic() {
    if (nbiotic > 0) {
        total -= 3;
        nbiotic -= 1
        document.getElementById("anitbio_num").innerHTML = nbiotic;
    }
}


// get total  for vaporub
function vaporub() {
    total += 0.5;
    nVapo += 1;
    document.getElementById("vaporub_num").innerHTML = nVapo;
}

function rm_vaporub() {
    if (nVapo > 0) {
        total -= 0.5;
        nVapo -= 1;
        document.getElementById("vaporub_num").innerHTML = nVapo;
    }
}


// get total for bandaid
function bandaid() {
    total += 0.8;
    nBand += 1;
    document.getElementById("bandaid_num").innerHTML = nBand;
}

function rm_bandaid() {
    if (nBand > 0) {
        total -= 0.8;
        nBand -= 1;
        document.getElementById("bandaid_num").innerHTML = nBand;
    }
}


// get total for streplis
function streplis() {
    total += 2;
    nStrep += 1;
    document.getElementById("strepsils_num").innerHTML = nStrep;
}

function rm_streplis() {
    if (nStrep > 0) {
        total -= 2;
        nStrep -= 1
        document.getElementById("strepsils_num").innerHTML = nStrep;
    }
}

// get total for knee
function knee() {
    total += 1.8;
    nElastic += 1
    document.getElementById("elastic_num").innerHTML = nElastic
}

function rm_knee() {
    if (nElastic > 0) {
        total -= 1.8;
        nElastic -= 1
        document.getElementById("elastic_num").innerHTML = nElastic
    }
}

// discount
function discount() {
    var dis = document.getElementById("discount_code").value;
    if(dis == "10OF"){
        var discounted = total * 0.15;
        total *= 0.85;
        document.getElementById("disc-msg").innerHTML = "congrats, U got a 15% discount"
        document.getElementById("discount_charge").innerHTML = discounted;
    }
    else{
        document.getElementById("disc-msg").innerHTML = "Invalid discount code";
    }

    // if ($("discount_code").value != "" && $("#discount_code1").val() == "10OF") {
    //     var discount_per = 15;
    //     var discount_amount = parseInt((total * discount_per) / 100);
    //     discount_amount = total - discount_amount;
    //     alert("great u got a discount")

    // } else {
    //     $("#discount-html").css("display", "none !important");
    //     $("#total_cart_amt").html(total + ".00");
    //     $("#discount_charge").html("00.00")
    //     error_trw.html("Invalid Discount Code!");
    //     alert("wrong discount code")
    // }

}