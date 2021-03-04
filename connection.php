<?php
$connect = mysqli_connect('localhost', 'root', 'pondokit', 'mysql-php');

if (!$connect)
    exit('Gagal koneksi databse..');
