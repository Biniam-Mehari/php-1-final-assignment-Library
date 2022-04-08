
var table = document.getElementById("dsTable"),rIndex;
//manipulating data from the table to the form in order to edit or remove
for(var i = 1; i < table.rows.length; i++){
    table.rows[i].onclick = function() {
        rIndex = this.rowIndex;
        document.getElementById("bookid").value = this.cells[0].innerHTML;
        document.getElementById("title").value = this.cells[1].innerHTML;
        document.getElementById("author").value = this.cells[2].innerHTML;
        document.getElementById("numberOfCopies").value = this.cells[3].innerHTML;
        document.getElementById("description").value = this.cells[4].innerHTML;
    }
}

//checks if number of copies are in proper data type
const form = document.getElementById("bookinfo");
const copies = document.getElementById("numberOfCopies");
form.addEventListener('submit', (e) => {
    const numberOfCopies = copies.value.trim();
 
    if (isNaN(numberOfCopies)) {
        e.preventDefault();
        document.getElementById("errornumber").innerHTML = " Number of copies must be numbers";
    }


});      
   
