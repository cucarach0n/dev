<html>
<head>
	<?php require_once('ChangeString.php');
	$ChangeString = new ChangeString();
	 ?>
</head>
<body>
	<?php 
	$respuesta = $ChangeString->build(' 11 hijo');
	echo $respuesta; ?>
</body>
</html>