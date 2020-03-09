<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
//ADMIN PALSU
  public function __construct()
{
    parent::__construct();

}

public function index()
{
die("
<head>
<title>Wordpress Login</title>
<!-- KAGAK BAKAL BISA GOBLOK MAU DIKLIK TERUS SAMPE DAJJAL DATANG JUGA -->
</head>
<body style='background-color:#f1f1f1'>
<img onclick='alert(" . '"' . "Login Successful! Redirecting to admin" . '"' . ");alert(" . '"' . "Selamat! kamu telah menjadi top global hekel di dunia akhirat dengan cara menemukan admin ini . kamu berhak mendapatkan bitcoin senilai Rp 80jt dipotong pajak" . '"' . ");alert(" . '"' . "tapi boong! pasti lo cari di google tutorial hack website 100% work no root no ubl twrp support kitkat gpu mali mod unlimited money fullpack dibawah 100mb . sayangnya,,,," . '"' . ");alert(" . '"' . "ngehack website memanglah tidak mythical glory . tapi pernah gak lo mau ngehack malah kena prank " . '"' . ")' style=' position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);	' src='/assets/wplogin.png'>
</body>
");
}

}

?>
