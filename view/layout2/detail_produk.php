<?php  include "../layout1/base_detail_produk.php" ;
?>

<?php class DetailProduk {
    public static function first_conten() {
        include "../../model/koneksi.php";
        $id = $_GET['id_produk'];
        $query = $db->query("SELECT * FROM produk where id_produk=$id");
	    $data = $query->fetchAll();
    foreach ($data as $d):?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Firefox */
input[type="number"] {
    -moz-appearance: textfield;
}
</style>
<div class="row">
    <div class="col-4"> <img width="100%" height="100%" src="../../image/<?php echo $d['nama_foto']; ?>" alt=""></div>
    <div class="col-8 p-4">
        <h3 class="fw-bold">
            <?php echo $d['nama_produk']; ?></h3>
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
        <form action="transaksi.php" method="get">
            <div class="row">
                <div class="col-2 mb-3">
                    <input type="hidden" name="id_produk" value="<?php echo $d['id_produk']  ?>">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn fw-bold btn-default btn-outline-primary btn-number"
                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-
                        </button>
                        <input type="number" name="kuantitas"
                            class=" text-center border text-center border-primary input-number w-50" value="1" min="1"
                            max="<?php echo $d['stok_produk']; ?>" />
                        <button type="button" class=" fw-bold btn btn-default btn-outline-primary btn-number"
                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+
                        </button>
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <button class="btn btn-lg btn-primary" type="submit">Beli
                            Sekarang <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </form>


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