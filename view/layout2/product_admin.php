<?php  include "../layout1/admin/base_index_admin.php" ;

?>

<?php class ProductAdmin {
    public static function first_conten() {
        include "../../controller/menampilkan.php";
        include "../../model/koneksi.php";
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $query = $db->query("SELECT * FROM produk WHERE nama_produk like '%".$cari."%'");
            $data = $query->fetchAll();
          } elseif ( isset($_GET['katagori'])) {
            $katagori = $_GET['katagori'];
            $query = $db->query("SELECT * FROM produk WHERE catagory='$katagori' ORDER BY nama_produk ASC");
            $data = $query->fetchAll();
          } elseif ( isset($_GET['harga'])) {
            $harga = $_GET['harga'];
            if ($harga == 'up') {
                $query = $db->query("SELECT * FROM produk ORDER BY harga_produk DESC");
                $data = $query->fetchAll();
            }elseif ($harga == 'down') {
                $query = $db->query("SELECT * FROM produk ORDER BY harga_produk ASC");
                $data = $query->fetchAll();
            } 
            
          } else {
            $data = Menampilkan::data_product();
          }
        
    foreach ($data as $d):?>
<?php $id =$d['id_produk']; ?>
<div class="col-12 col-lg-2 mt-4">
    <a href="detail_produk_admin.php?id_produk=<?php echo $id?>" class="text-decoration-none">
        <div class="card h-100">
            <div class="image w-100 h-100">
                <img width="100%" height="100%" src="../../image/<?php echo $d['nama_foto']; ?>" alt="">
            </div>

            <div class="card-body">

                <h5 class="card-title fs-6 text-dark text-capitalize">
                    <?php 
                    $k = strlen($d['nama_produk']);
                    if ( $k>20) {
                        echo substr($d['nama_produk'],0,40) . "...";
                    }else {
                        echo substr($d['nama_produk'],0,38) . " <br> <br> <br>";
                    } ?></h5>
                <p class="card-text fs-6 text-danger mb-1">Rp<?php echo number_format($d['harga_produk'], 0,',','.') ;?>
                </p>
                <a href="detail_produk_admin.php?id_produk=<?php echo $id?>" class="btn btn-primary w-100 mb-2">Lihat
                    Detail</a>
                <div class="row">
                    <div class="col-6 "><a href="edit_admin.php?id_produk=<?php echo $id?>"
                            class="btn btn-success w-100"><i class="fas fa-pen"></i></a>
                    </div>
                    <div class="col-6"><a href="../../model/hapus.php?id_produk=<?php echo $id?>"
                            class="btn btn-danger w-100"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
<?php endforeach;} 
}
?>