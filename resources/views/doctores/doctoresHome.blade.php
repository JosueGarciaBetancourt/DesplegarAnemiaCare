<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	BIENVENIDO AL HOME DE DOCTORES
	<form id="logoutDoctorForm" method="POST" action="{{ route('logout') }}">
		@csrf
		<button type="submit">Cerrar Sesión</button>
	</form>
</body>
</html>

