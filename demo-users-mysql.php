<?php
	$nombreUser = $_POST['nombre'];
	$nick = $_POST['nick'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];
	
	// Cada uno de las variables son requeridas obligatorias, por tanto
	// si algunos de estos valores son cero, el resultado es cero
	$reqlen = strlen($nick) * strlen($pass) * strlen($rpass);

	// Si es mayor que cero es que se han escrito los valoes requeridos
	if ($reqlen > 0) {
		if ($pass === $rpass) {
			require('connected_db.php');
			$pass = md5($pass);
			mysql_query("INSERT INTO registros_users VALUES('','$nombreUser','$nick','$email','$pass')");
			mysql_close($cnx);
			echo "Se ha registrado correctamente !!!";
		}else{
			echo "Por favor, introduzca dos contraseñas identicas";
		}
	}else{
		echo "Por favor, rellene todos los campos requeridos...";
	}

?>