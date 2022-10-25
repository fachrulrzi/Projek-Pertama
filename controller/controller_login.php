<?php 
include "../model/read.php";
// include '../model/koneksi.php';
class CtrlLogin{
    public static function proses() {
        Read::login();
    }
}
CtrlLogin::proses();
?>