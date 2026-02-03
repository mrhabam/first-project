<?php
session_start();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$koneksi =mysqli_connect("localhost", "root", "", "eperpus");

// chek connection
if (mysqli_connect_error()) {
    echo "Falied to connect to MYSQL:". mysqli_connect_error();
}
?>