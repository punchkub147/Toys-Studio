<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - ToysStudio</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script language="javascript">
	function fncSubmit()
	{
		if(document.form_register.ID.value == "")
		{
			alert('Please input ID');
			document.form_register.ID.focus();
			return false;
		}
		if(document.form_register.Password.value == "")
		{
			alert('Please input Password');
			document.form_register.Password.focus();
			return false;
		}
		if(document.form_register.ConfirmPassword.value == "")
		{
			alert('Please input ConfirmPassword');
			document.form_register.ConfirmPassword.focus();
			return false;
		}
		if(document.form_register.Email.value == "")
		{
			alert('Please input Email');
			document.form_register.Email.focus();
			return false;
		}
		if(document.form_register.Tel.value == "")
		{
			alert('Please input Tel');
			document.form_register.Tel.focus();
			return false;
		}	
		document.form_register.submit();
	}
	</script>
</head>
<body>

	<?php include 'header.php'; ?>
	<div class="container bg2 cb">
		<div class="wrapper">
			<div class="con-c col-6 bg1">
				<h1 class="mb-10">Register</h1>

				<form action="register.php" method="post" name="form_register" onSubmit="JavaScript:return fncSubmit();">
					<input type="text" name="ID" placeholder="ID">
					<input type="password" name="Password" placeholder="Password">
					<input type="password" name="ConfirmPassword" placeholder="Confirm Password">
					<input type="text" name="Email" placeholder="Email" class="fl">
					<input type="text" name="Tel" placeholder="Tel." class=" fr">
					<input type="submit" value="Confirm" class="submit">
				</form>

			</div>
			
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
</html>