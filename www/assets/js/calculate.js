let total=0;
let nAdol=0;
let nPandol=0;
let nVento=0;
let nBiotic=0 ;
let nVapo=0 ;
let nBand=0;
let nStrep=0 ;
let nElastic=0 ;



function getTotal(){
    document.getElementById("total").innerHTML = total +"  OMR";
}

//get total for adol
function adol(){
    total +=2;
    nAdol +=1
    document.getElementById("adol_num").innerHTML = nAdol
    
}

// ge total for panadol
function panadol(){
    total +=1;
    nPandol +=1
    document.getElementById("panadol_num").innerHTML = nPandol
   
}

//get total for ventolin
function ventolin(){
    total +=1.5;
    nVento +=1;
    document.getElementById("ventolin_num").innerHTML = nVento;
    
}
// get total for antibiotics
function Biotic(){
    total +=3;
    nBiotic +=1;
    document.getElementById("anitbio_num").innerHTML = nBiotic;
    
}
// get total  for vaporub
function vaporub(){
    total +=0.5;
    nVapo +=1;
    document.getElementById("vaporub_num").innerHTML = nVapo;
}
// get total for bandaid
function bandaid(){
    total +=0.8;
    nBand +=1;
    document.getElementById("bandaid_num").innerHTML = nBand;
}
// get total for streplis
function streplis(){
    total +=2;
    nStrep +=1;
    document.getElementById("strepsils_num").innerHTML = nStrep;
}

// get total for knee
function knee(){
    total +=1.8;
    nElastic +=1
    document.getElementById("elastic_num").innerHTML = nElastic
}
