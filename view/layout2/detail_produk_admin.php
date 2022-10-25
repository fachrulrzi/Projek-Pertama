<?php  include "../layout1/admin/base_detail_produk.php" ;
?>

<?php class DetailProdukA {
    public static function first_conten() {
        include "../../model/koneksi.php";
        $id = $_GET['id_produk'];
        $query = $db->query("SELECT * FROM produk where id_produk=$id");
	    $data = $query->fetchAll();
    foreach ($data as $d):?>
<div class="row">
    <div class="col-4"> <img width="100%" height="100%" src="../../image/<?php echo $d['nama_foto']; ?>" alt=""></div>
    <div class="col-8 p-4">
        <h3 class="fw-bold">
            <?php echo $d['nama_produk']; ?></h3>
        <!-- <div class="row my-3">
            <div class="col-6">
                <div class="row">
                    <div class="col-3">Star</div>
                    <div class="col-1">|</div>
                    <div class="col-3">7 Penilaian</div>
                    <div class="col-1">|</div>
                    <div class="col-3">20 Terjual</div>
                </div>
            </div>
        </div> -->
        <div class="card p-3 mb-3 text-danger fw-bold bg-light border-0 rounded-3 bg-gradient">
            <h2>Rp<?php echo number_format($d['harga_produk'], 0,',','.') ;?></h2>
        </div>
        <div class="row card m-0  p-3 mb-3  bg-light border-0 rounded-3 bg-gradient ">
            <div class="col-6">
                <div class="row">
                    <div class="col-6 fw-bold text-primary">Merek</div>
                    <div class="col-6 fw-bold"><?php echo $d['merek_produk']; ?></div>
                    <div class="col-6 fw-bold text-primary">Kategori</div>
                    <div class="col-6 fw-bold"><?php echo $d['catagory']; ?></div>
                    <div class="col-6 fw-bold text-primary">Stok</div>
                    <div class="col-6 fw-bold"><?php echo $d['stok_produk']; ?></div>
                </div>
            </div>
        </div>



    </div>
</div>

<?php
 endforeach;
} 
    public static function second_conten() {
        include "../../model/koneksi.php";
        $id = $_GET['id_produk'];
        $query = $db->query("SELECT * FROM produk where id_produk=$id");
	    $data = $query->fetchAll();
    foreach ($data as $d):?>
<div class="row">
    <div class="col-12">
        <div class="card p-3 mb-3  fw-bold bg-light border-0 rounded-3 bg-gradient">
            <h3>Deskripsi Produk</h3>
        </div>
    </div>
    <div class="col-12">
        <div class="deskripsi">
            <p><?php echo $d['deskripsi_produk']; ?></p>
        </div>
    </div>
</div>
<?php
 endforeach;
} 
}
?>