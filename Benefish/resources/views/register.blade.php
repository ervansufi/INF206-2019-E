<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
</head>
<body>
    <h1>Benefish.com </h1>
	<div class="kotak_login">
		<p class="tulisan_login"><b>Silahkan Daftar </b></p>

        <form method="POST" action="/insert">
            {{ csrf_field() }}

			<label><b>Username</b></label>
			<input type="text" name="name" class="form_login" placeholder="Masukkan Username" required> <br>

            <label><b>Email</b></label>
			<input type="email" name="email" class="form_login" placeholder="Masukkan Email" required> <br>

            <label><b>No HP</b></label>
			<input type="number" name="no_hp" class="form_login" placeholder="Masukkan No HP" required> <br>

            <label><b>Password</b></label>
			<input type="password" name="password" class="form_login" placeholder="Masukkan Password" required> <br>

            <label><b>Konfirmasi Password</b></label>
			<input type="password" name="password2" class="form_login" placeholder="Masukkan Konfirmasi Password" required> <br>


			<input type="submit" class="tombol_login" value="CREATE ACCOUNT">

			<br/>
			<br/>
			<center>
				<a class="link" href="#"><b>Kembali</b></a>
			</center>
		</form>

	</div>


</body>
</html>
