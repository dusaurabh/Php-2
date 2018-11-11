function time_function() {
var Year = document.getElementById("Year").value;
var Sem = document.getElementById("Sem").value;
var PDFSelect = document.getElementById("PDFSelect").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'Year1=' + Year + '&Sem1=' + Sem + '&PDFSelect1=' + PDFSelect;
if (Year == '' || Sem == '' || PDFSelect == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "time_table.php",
data: dataString,
cache: false,
success: function(php) {
alert(php);
}
});
}
return false;
}