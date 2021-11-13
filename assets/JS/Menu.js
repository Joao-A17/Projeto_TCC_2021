var d = document.querySelector('#d');
var d2 = document.querySelector('#d2');

$('#B_Nav').on('mouseover', function() {  
    d.style.display = 'grid';
});

$('#B_Nav').on('mouseout', function() {
    d.style.display = 'none';
});
/* -----------Menu d----------- */
$('#d').on('mouseover', function() { 
    d.style.display = 'grid';
});

$('#d').on('mouseout', function() {
    d.style.display = 'none';
});
/* ------------------------------------- */
$('#B_Nav2').on('mouseover', function() {  
    d2.style.display = 'grid';
});

$('#B_Nav2').on('mouseout', function() {
    d2.style.display = 'none';
});
/* -----------Menu d2----------- */
$('#d2').on('mouseover', function() {  
    d2.style.display = 'grid';
});

$('#d2').on('mouseout', function() {
    d2.style.display = 'none';
});