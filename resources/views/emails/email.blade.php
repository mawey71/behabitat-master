<html lang="es">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<h2>Email recibido desde beHABITAT</h2>
		<hr>
		<p><strong>nombre :</strong> {{ $nombre }}</p>
		<p><strong>e-mail :</strong> {{ $email }}</p>
		<p><strong>teléfono :</strong> {{ $telefono }}</p>
		<br/>
		<p><strong>mensaje</strong></p>
		{{ $mensaje }}
		<hr>
		<p><strong>fecha :</strong> {{ \Carbon\Carbon::now()->format('d/m/Y - h:i:s A') }}</p> 
	</body>
</html>