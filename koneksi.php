<?php
session_start();c

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$koneksi =mysqli_connect("localhost","root","", "perpus");

// chek connection
if (mysql_connect_error()) {
    echo "Falied to connect to MYSQL:". mysqli_connect_error();
}
?>