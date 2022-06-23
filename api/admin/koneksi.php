<?php

$koneksi = mysqli_connect("localhost", "root", "", "api_066_085_125_128_143");

if (mysqli_connect_errno()) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
