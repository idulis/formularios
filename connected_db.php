<?php
	$host = "localhost";
	$name_db = "db_form_users";
	$user_db = "root";
	$psw_db = "";

	$cnx = mysql_connect($host,$user_db,$psw_db) or die("Problemas al conectarse al host !!!");
	if ($cnx) {
		mysql_select_db($name_db,$cnx) or die("Problemas al conectare a la Base de Datos !!!");
	}
?>