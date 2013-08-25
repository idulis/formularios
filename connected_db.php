<?php
	$cnx = mysql_connect('localhost',root,'');
	if ($cnx) {
		mysql_select_db('registro',$cnx);
	}
?>