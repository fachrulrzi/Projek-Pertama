<?php  include "../layout1/admin/base_transaksi.php" ;
?>

<?php class Transaksi {
    public static function first_conten() {
        include "../../model/koneksi.php";
        $kuantitas =$_GET['kuantitas'];
        $id = $_GET['id_produk'];
        $query = $db->query("SELECT * FROM produk where id_produk=$id");
	    $data = $query->fetchAll();
    foreach ($data as $d):?>
<div class="row">
    <div class="col-12">
        <h1 class="h3 mb-3 fw-bold text-center">Pemesanan Produk</h1>
    </div>
    <div class="col-12 ">
        <div class="card p-3 mb-3 fw-bold bg-primary text-light  rounded-3 bg-gradient">
            <h5 class="fw-bold">Data Pesanan</h5>
        </div>
        <table class="table card">
            <tbody>
                <tr>
                    <td class="w-25 fw-bold ">Nama Produk</td>
                    <td><?php echo $d['nama_produk'];  ?></td>
                </tr>
                <tr>
                    <td class="fw-bold">Merek</td>
                    <td><?php echo $d['merek_produk'];  ?></td>
                </tr>
                <tr>
                    <td class="fw-bold">Kategori</td>
                    <td><?php echo $d['catagory'];  ?></td>
                </tr>
                <tr>
                    <td class="fw-bold">Foto Produk</td>
                    <td><img width="30%" height="30%" src="../../image/<?php echo $d['nama_foto']; ?>" alt=""></td>
                </tr>
                <tr>
                    <td class="fw-bold">Kuantitas</td>
                    <td><?php echo $kuantitas;?></td>
                </tr>
                <tr>
                    <td class="fw-bold text-danger">Total Harga</td>
                    <?php $hasil = $kuantitas * $d['harga_produk']?>
                    <td class="text-danger fw-bold">Rp<?php echo number_format($hasil, 0,',','.') ;?></td>
                </tr>
            </tbody>
        </table>

    </div>

</div>
<form class="form-signin" action="../../model/input_pemesan.php?id_produk=<?php echo$d['id_produk'] ?>" method="POST">
    <div class="card p-3 mb-3 fw-bold bg-primary text-light  rounded-3 bg-gradient">
        <h5 class="fw-bold">Data Pembeli</h5>
    </div>
    <div class="form-floating mb-3">
        <input type="hidden" name="kuantitas" value="<?php echo $kuantitas ?>">
        <input type="hidden" name="id_produk" value="<?php echo $d['id_produk']  ?>">
        <input type="text" class="form-control" id="floatingInput" placeholder="Nama Penerima" name="nama_penerima"
            required oninvalid="this.setCustomValidity('Masukkan Nama Penerima')">
        <label for="floatingInput">Nama Penerima</label>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Deskripsi Produk" id="floatingTextarea" required
            oninvalid="this.setCustomValidity('Masukkan Alamat')" name="alamat"></textarea>
        <label for="floatingTextarea">Alamat</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" placeholder="Telepon" name="telepon" required
            oninvalid="this.setCustomValidity('Masukkan Telepon')">
        <label for="floatingInput">Telepon</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Email" name="email" required
            oninvalid="this.setCustomValidity('Masukkan Email')">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="row">
        <div class="col-3"><input type="submit" value="Buat Pesanan" class="btn btn-success"></div>
        <div class="col-3"><input type="reset" value="Reset" class="btn btn-danger"></div>
    </div>

</form>

<?php
 endforeach;
} 
}
?>