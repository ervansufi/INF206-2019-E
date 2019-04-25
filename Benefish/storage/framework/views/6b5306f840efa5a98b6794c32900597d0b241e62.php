<!DOCTYPE html>
<html>
<head>
	<title>SIGN IN</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <h1>Benefish.com </h1>
	<div class="kotak_login">
		<p class="tulisan_login"><b>Silahkan login</b></p>

        <form method="POST" action="/register">
			<label><b>Username</b></label>
			<input type="text" name="username" class="form_login" placeholder="Masukkan Username"> <br>

			<label><b>Password</b></label>
			<input type="text" name="password" class="form_login" placeholder="Masukkan Password"> <br>

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<a class="link" href="index.php"><b>Kembali</b></a>
			</center>
		</form>

	</div>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\resources\views/login.blade.php ENDPATH**/ ?>