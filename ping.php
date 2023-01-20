<?php
define( 'DB_NAME', 'CIAO' );
define( 'DB_USER', 'user' );
define( 'DB_CHARSET', 'utf8' );
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysqli_select_db($connection, DB_NAME);
?>
