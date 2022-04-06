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

    var mazin = { name: "Mazin", phone: "92494935", Email: "Mazin@gmail.com", Date: "13/5/2022" }
    var abdulaziz = { name: "Abdulaziz", phone: "97797756", Email: "Abdo@gmail.com", Date: "17/4/2022" }
    var Hamood = { name: "Hamood", phone: "98984545", Email: "0cool@gmail.com", Date: "11/6/2022" }
    var mohammed = { name: "Mohammed", phone: "90908787", Email: "Mohd@gmail.com", Date: "10/9/2022" }



    var patients = [mazin, abdulaziz, Hamood, mohammed]
    var k = 0

    patients.forEach((patients, index, tr = t1.insertRow(index + 1)) => {
        //tr = t1.insertRow(index+1)
        for (let key in patients) {
            var cell = tr.insertCell(k);
            cell.innerText = `${patients[key]}`;
            k++
        }
    });

}