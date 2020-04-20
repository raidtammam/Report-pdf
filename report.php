<?php
require 'vendor/autoload.php';
// untuk menggunakan dompdf
use Dompdf\Dompdf;

// mencetak pdf
$dompdf = new Dompdf();
$dompdf->load_html('Nama saya Raidtammam, saya bersekolah di SMK TARUNA BHAKTI. saya sedang belajar dompdf');

// setup untuk ukuran kertas
$dompdf->setPaper('A4', 'landscape');

// render html sebagai pdf
$dompdf->render();

// output
$dompdf->stream('report_hasil.pdf');