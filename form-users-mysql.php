<!DOCTYPE html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Creaciones de formularios...</title>
			<link rel="stylesheet" href="css/bootstrap.css">

	</head>
	<body>
		<form class="form-horizontal" action="demo-users-mysql.php" method="post">
			<fieldset>
				<legend>Controls Bootstrap supports</legend>
				<div class="control-group">
					<label class="control-label" for="input01">Su nombre</label>
					<div class="controls">
						<input type="text" name="nombre" class="input-xlarge" id="input01">
					</div><br>
					<label class="control-label" for="input01">Su nick</label>
					<div class="controls">
						<input type="text" name="nick" class="input-xlarge" id="input01">
					</div><br>
					<label class="control-label" for="input01">Su email</label>
					<div class="controls">
						<input type="text" name="email" class="input-xlarge" id="input01">
					</div>
					<label class="control-label" for="input01">Password</label>
					<div class="controls">
						<input type="password" name="pass" class="input-xlarge" id="input01">
					</div>
					<label class="control-label" for="input01">Vuelva a escribir su password</label>
					<div class="controls">
						<input type="password" name="rpass" class="input-xlarge" id="input01">
					</div>

				</div>
				<div class="form-actions">
					<button type="submit" name="submit" value="guardar" class="btn btn-primary">Save changes</button>
					<button class="btn">Cancel</button>
					<button type="reset" name="reset" value="Reset">Reset</button>
				</div>
				</fieldset>
		</form>
		<?php
			if (isset($_POST['submit'])) {
				require('demo-users-mysql.php');
			}

		?>
		<script type="js/jquery-1.10.1.js"></script>
		<script type="js/bootstrap.js"></script>
	</body>
</html>