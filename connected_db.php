<?php
	$cnx = mysql_connect('localhost',root,'');
	if ($cnx) {
		mysql_select_db('db_form_users',$cnx);
	}
?>