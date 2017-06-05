<?php
/**
 * @author Pizaini <pizaini@uin-suska.ac.id>
 * http://pizaini.wordpress.com
 * (c) 2017
 */
?>
<html>
<head>
    <title>Contoh Halaman Autentikasi</title>
</head>
<body>
<h1>Silakan masukkan username dan password Anda</h1>
<form action="proses_auth.php" method="post">
    <dl>
        <dt>Username</dt>
        <dd><input type="text" name="username"></dd>
    </dl>
    <dl>
        <dt>Password</dt>
        <dd><input type="password" name="password"></dd>
    </dl>
    <button type="submit">Login</button>
</form>
</body>
</html>
