var mazin = { name: "Mazin", phone: "92494935", Email: "Mazin@gmail.com", Date: "13/5/2022" }
var abdulaziz = { name: "Abdulaziz", phone: "97797756", Email: "Abdo@gmail.com", Date: "17/4/2022" }
var Hamood = { name: "Hamood", phone: "98984545", Email: "0cool@gmail.com", Date: "11/6/2022" }
var mohammed = { name: "Mohammed", phone: "90908787", Email: "Mohd@gmail.com", Date: "10/9/2022" }
var nRows = 0;


var patientsList = [mazin, abdulaziz, Hamood, mohammed];


function patients() {
    // get table document object
    var t1 = document.getElementById("appont-table");

    // get number of rows that already exist and delete them
    var n = t1.rows.length;
    for (var x = n - 1; x >= 0; x--) t1.deleteRow(x);

    // heading for the table
    var tr = t1.insertRow(0);

    var cell = tr.insertCell(0);
    cell.innerText = "Name";
    cell.style.fontWeight = "bold"

    var cell = tr.insertCell(1);
    cell.innerText = "Phone";
    cell.style.fontWeight = "bold"

    var cell = tr.insertCell(2);
    cell.innerText = "Email";
    cell.style.fontWeight = "bold"

    var cell = tr.insertCell(3);
    cell.innerText = "Date";
    cell.style.fontWeight = "bold"



    // populate table with data
    for (var i = 0; i < patientsList.length; i++) {
        var tr = t1.insertRow(i + 1);

        var cell = tr.insertCell(0);
        cell.innerText = patientsList[i].name;

        var cell = tr.insertCell(1);
        cell.innerText = patientsList[i].phone;

        var cell = tr.insertCell(2);
        cell.innerText = patientsList[i].Email;

        var cell = tr.insertCell(3);
        cell.innerText = patientsList[i].Date;
    }
    return patientsList;
}
// add patient to the list of patients
function addPatient() {
    var pName = document.getElementById("name").value;
    var pNumber = document.getElementById("phone").value;
    var pEmail = document.getElementById("email").value;
    var pDate = document.getElementById("date").value;
    var patientsList = patients();
    var newPatient = { name: pName, phone: pNumber, Email: pEmail, Date: pDate };
    patientsList.push(newPatient);
    localStorage.setItem("jpatients", JSON.stringify(patientsList));
    patients();
}

function searchFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchIn");
    filter = input.value.toUpperCase();
    table = document.getElementById("appont-table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

// function newApp() {
//     // get table document object
//     var t1 = document.getElementById("appont-table");

//     //get existing patietns list
//     var patients = [mazin, abdulaziz, Hamood, mohammed];
//     pName = document.getElementById("name").value;
//     pNumber = document.getElementById("email").value;
//     pEmail = document.getElementById("phone").value;
//     pDate = document.getElementById("date").value;
//     var newPatient = {
//         name: pName,
//         phone: pNumber,
//         Email: pEmail,
//         Date: pDate
//     }
//     patients.unshift(newPatient);


//     // get number of rows that already exist
//     var n = t1.rows.length;
//     // insert new row 
//     var tr = t1.insertRow(n);

//     var cell = tr.insertCell(0);
//     cell.innerText = newPatient.name;


//     var cell = tr.insertCell(1);
//     cell.innerText = newPatient.Email;


//     var cell = tr.insertCell(2);
//     cell.innerText = newPatient.phone;

//     var cell = tr.insertCell(3);
//     cell.innerText = newPatient.Date;




// }