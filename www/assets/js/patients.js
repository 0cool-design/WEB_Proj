function patients() {
    // get table document object
    var t1 = document.getElementById("appont-table"); 
  
    // get number of rows that already exist and delete them
    var n= t1.rows.length;
    for (var x=n-1; x>=0; x--) t1.deleteRow(x); 
    
    // heading for the table
    var tr= t1.insertRow(0);
  
    var cell= tr.insertCell(0);
    cell.innerText = "Name";
    
    var cell= tr.insertCell(1);
    cell.innerText = "Phone";

    var cell= tr.insertCell(2);
    cell.innerText = "Email";

    var cell= tr.insertCell(3);
    cell.innerText = "Date";

    for(var j=1;j<=11;j++){
        tr = t1.insertRow(j)
        for(var k=0;k<=3;k++){
            var cell= tr.insertCell(k);
            cell.innerText = "Empty";
        }
    }

}