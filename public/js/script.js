document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
});

// Initialize collapsible (uncomment the lines below if you use the dropdown variation)
// var collapsibleElem = document.querySelector('.collapsible');
// var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

// Or with jQuery

$(document).ready(function () {
    $('.sidenav').sidenav();
});
let windowwith = $(window).width();
if (windowwith < 992) {
	document.getElementById('hide').style.display = "inline-block";
}
function math(){
	window.location.href + "view/content/math.php"
}
function logic(){
	window.location.href + "view/content/logic.php"
}
function memory(){
	window.location.href + "view/content/memory.php"
}
function attent(){
	window.location.href + "view/content/attention.php"
}