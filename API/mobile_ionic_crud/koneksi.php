<?php

// Header untuk menangani CORS Policy
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Authorization, Accept, Client-Security-Token, Accept-Encoding");
header("Content-Type: application/json, charset=utf-8");

// Membuat variable koneksi ke MySQL
$koneksi = mysqli_connect("localhost", "root", "", "sinau_ionic") or die("Koneksi gagal");