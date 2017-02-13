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
		if(document.form_login.ID.value == "")
		{
			alert('Please input ID');
			document.form_login.ID.focus();
			return false;
		}
		if(document.form_login.Password.value == "")
		{
			alert('Please input Password');
			document.form_login.Password.focus();
			return false;
		}
		document.form_login.submit();
	}
	</script>
</head>
<body>

	<?php include 'header.php'; ?>
	<div class="container bg2 cb">
		<div class="wrapper">
			
			<div class="con-c col-6 bg1">
				<h1 class="mb-10">Login</h1>
				<form action="" method="post" name="form_login" onSubmit="JavaScript:return fncSubmit();">
					<input type="text" name="ID" placeholder="ID">
					<input type="text" name="Password" placeholder="Password">
					<input type="submit" value="Login" class="submit">
				</form>
				<div class="p-c">
					<a href="register.php">Create New Account</a>
				</div>
				
				
			</div>
			
		</div><!-- wrapper -->
	</div>

	<?php include 'footer.php'; ?>
</body>
</html>