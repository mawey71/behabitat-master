    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

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