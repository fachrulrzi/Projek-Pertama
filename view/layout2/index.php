<?php  include "../layout1/base_index.php" ;?>
<?php class Index {
    public static function first_conten() {
        include "../../controller/menampilkan.php";
        require "../../model/koneksi.php";
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
          }elseif ( isset($_GET['id_produk'])) {
            $id = $_GET['id_produk'];
            $query = $db->query("SELECT * FROM produk where id_produk='$id'");
            $data = $query->fetchAll();
            foreach ($data as $d):
            $nama_produk=['nama_produk'];
            $katagori =$d['catagory'];
            $merek =$d['merek_produk'];
            endforeach;
            $query = $db->query("SELECT * FROM produk where catagory='$katagori' or merek_produk='$merek'");
            $data = $query->fetchAll();
          }else {
            $data = Menampilkan::data_product();
            }?>

<?php foreach ($data as $d):?>
<?php $id =$d['id_produk']; ?>

<div class="col-12 col-lg-2 mt-4">
    <a href="detail_produk.php?id_produk=<?php echo $id?>" class="text-decoration-none">
        <div class="card rounded-0" id="card">
            <div class="image w-100 h-100">
                <img width="100%" height="100%" src="../../image/<?php echo $d['nama_foto']; ?>" alt="">
            </div>

            <div class="body">
                <div class="card-body">
                    <h5 class="card-title fs-6 text-dark text-capitalize">
                        <?php 
                    $k = strlen($d['nama_produk']);
                    if ( $k>20) {
                        echo substr($d['nama_produk'],0,51) . "...";
                    }else {
                        echo substr($d['nama_produk'],0,38) . " <br> <br> <br>";
                    } ?></h5>
                    <p class="card-text fw-bold fs-6 text-danger mb-1">
                        Rp<?php echo number_format($d['harga_produk'], 0,',','.') ;?>
                    </p>
                </div>
                <div class="button">
                    <a href="index.php?id_produk=<?php echo $id?>" class="btn rounded-0 mb-0  btn-primary w-100">Produk
                        Serupa</a>
                </div>

            </div>

        </div>

    </a>
</div>
<?php endforeach;} 
}
?>