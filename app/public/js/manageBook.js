
var table = document.getElementById("dsTable"),rIndex;

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

