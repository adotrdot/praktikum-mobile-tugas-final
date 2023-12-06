<?php

require "koneksi.php";

$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Terima data dari mobile
$id = trim($data["id"]);
$nama = trim($data["nama"]);
$jurusan = trim($data["jurusan"]);
http_response_code(201);
if ($nama != "" and $jurusan != "") {
    $query = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan' WHERE id=$id");
    $pesan = true;
} else {
    $pesan = false;
}

echo json_encode($pesan);
echo mysqli_error($koneksi);