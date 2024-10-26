<?php

echo'<pre>';
print_r($_POST);

$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];
if ($kelas == "3KA06" and $jurusan == "Komputer") {
    echo "sesuai";
} else {
    echo "tidak sesuai";
}
?>