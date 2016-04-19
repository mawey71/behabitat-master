$('.carousel').carousel({
	interval: 5000 //changes the speed
});

/********* para el rol ****************/
$('#cliente').click(function(event) {
	$('#razon_social').val('');
	$('#cif').val('');
	$('#cif').prop('disabled', true);
	$('#razon_social').prop('disabled', true);
	$('#nif').prop('disabled', false);
});

$('#proveedor').click(function(event) {
	$('#nif').val('');
	$('#nif').prop('disabled', true);
	$('#cif').prop('disabled', false);
	$('#razon_social').prop('disabled', false);
});
/********* fin rol ****************/
/********* para el cambio de menu ****************/
var cambio = false;
$('.nav li a').each(function(index) {
	if(this.href.trim() == window.location){
		$(this).parent().addClass("active");
		cambio = true;
	}
});
if(!cambio){
	$('a.navbar-brand').addClass("active");
};
/********* fin cambio de menu ****************/