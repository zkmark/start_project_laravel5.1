<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="">
	<meta name="copyright" content="© 2016">
	<meta name="author" content="">
	<title>Laravel</title>
 
	{!! Html::style('css/bootstrap.css') !!}

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<h1>Funcionando...</h1>
	<p>Incluye jquery, bootstrap 3.3.7, bootstrap validator</p>
 
	<!-- Scripts -->
	{!! Html::script('js/jquery-3.1.1.min.js') !!}
	{!! Html::script('js/bootstrap.min.js') !!}
	{!! Html::script('js/validator.min.js') !!}

</body>
</html>