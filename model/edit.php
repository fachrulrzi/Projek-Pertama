<?php
include("koneksi.php") ;
$id_produk = $_POST['id_produk'];
$nama_produk = ucwords($_POST['nama_produk']) ;
$merek_produk = ucwords($_POST['merek_produk']) ;
$harga_produk = $_POST['harga_produk'];
$stok_produk = $_POST['stok_produk'];
$catagory = $_POST['catagory'];
$deskripsi_produk = $_POST['deskripsi_produk'];
// foto
$nama_file = $_FILES['nama_foto']['name'];
$ukuran_file = $_FILES['nama_foto']['size'];
$tipe_file = $_FILES['nama_foto']['type'];
$tmp_file = $_FILES['nama_foto']['tmp_name'];
// Set path folder tempat menyimpan gambarnya
$path = "../image/".$nama_file;
// echo $nama_produk.PHP_EOL. $harga_produk.PHP_EOL. $stok_produk. PHP_EOL.$catagory. PHP_EOL.$deskripsi_produk;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
      // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
      // Proses upload
      if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
        // Jika gambar berhasil diupload, Lakukan :  
        // Proses simpan ke Database
        $query = "UPDATE produk SET nama_produk='$nama_produk', merek_produk='$merek_produk', harga_produk='$harga_produk', stok_produk='$stok_produk', catagory='$catagory', deskripsi_produk='$deskripsi_produk', nama_foto='$nama_file',ukuran_foto='$ukuran_file',tipe_foto='$tipe_file' WHERE id_produk='$id_produk'";
        $result = $db->query($query); // Eksekusi/ Jalankan query dari variabel $query
        
        if($result){ // Cek jika proses simpan ke database sukses atau tidak
          // Jika Sukses, Lakukan :
          header("location:../view/layout2/product_admin.php?pesan=input"); // Redirectke halaman index.php
        }else{
          // Jika Gagal, Lakukan :
          echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
          echo "<br><a class='btn btn-primary' href='../view/layout2/edit_admin.php?id_produk={$id_produk}'>Kembali Ke Form</a>";
        }
      }else{
        // Jika gambar gagal diupload, Lakukan :
        echo "Maaf, Gambar gagal untuk diupload.";
        echo "<br><a class='btn btn-primary' href='../view/layout2/edit_admin.php?id_produk={$id_produk}'>Kembali Ke Form</a>";
      }
    }else{
      // Jika ukuran file lebih dari 1MB, lakukan :
      echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
      echo "<br><a class='btn btn-primary' href='../view/layout2/edit_admin.php?id_produk={$id_produk}'>Kembali Ke Form</a>";
    }
  }else{
    // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
    echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
    echo "<br><a class='btn btn-primary' href='../view/layout2/edit_admin.php?id_produk={$id_produk}'>Kembali Ke Form</a>";
  }
?>