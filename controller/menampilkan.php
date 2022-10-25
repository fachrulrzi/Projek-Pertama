<?php 
require "../../model/read.php";

class Menampilkan{
    public static function data_user() {
        $data = Read::user();
        return $data;
    }
    public static function data_product() {
        $data = Read::product();
        return $data;
    }
}

?>