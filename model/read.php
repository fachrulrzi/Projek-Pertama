<?php 
class Read {
    public static function user() {
        include "koneksi.php";
        $query = $db->query("SELECT * FROM user");
	    $data = $query->fetchAll();
        return $data;
    }
    public static function product() {
        include "koneksi.php";
        $query = $db->query("SELECT * FROM produk ORDER BY RAND()");
	    $data = $query->fetchAll();
        return $data;
    }
    public static function login() {
        $email = $_POST['email'];
        $password = $_POST['password'];
        session_start();
        include "koneksi.php";
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
        $admin = $db->prepare('SELECT * FROM user WHERE email = :email and password = :password');
        $admin->execute(array(
                  ':email' => $_POST['email'],
                  'password' => $_POST['password']
                  ));
        $row = $admin->fetch(PDO::FETCH_ASSOC);
 
        if(empty($row['email'])){

        header("location:../view/layout2/login.php?=gagal");

        }else {

        $_SESSION['login_user'] = $_POST['email'];

        if ($row['peran']=='Admin') {
            header("location:../view/layout2/product_admin.php");
        }elseif ($row['peran']=='Costumer') {
            header("location:../view/layout2/index.php");
        }
}
}
    }
}

?>