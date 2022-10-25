<?php  include "../layout1/admin/base_edit_admin.php" ;
?>

<?php class EditAdmin {
    public static function first_conten() {
        include "../../model/koneksi.php";
        $id = $_GET['id_produk'];
        $query = $db->query("SELECT * FROM produk where id_produk=$id");
	    $data = $query->fetchAll();
    foreach ($data as $d):?>
<form class="form-signin" action="../../model/edit.php" enctype="multipart/form-data" method="POST">
    <h1 class="h3 mb-3 fw-bold text-center">Edit Data Produk</h1>

    <div class="form-floating mb-3">
        <input type="hidden" name="id_produk" value="<?php echo $d['id_produk']; ?>">
        <input type="text" class="form-control" id="floatingInput" placeholder="Nama"
            value="<?php echo $d['nama_produk']; ?>" name="nama_produk">
        <label for="floatingInput">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="hidden" name="id_produk" value="<?php echo $d['id_produk']; ?>">
        <input type="text" class="form-control" id="floatingInput" placeholder="Merek"
            value="<?php echo $d['merek_produk']; ?>" name="merek_produk">
        <label for="floatingInput">Merek</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" step="any" class="form-control" id="floatingInput" placeholder="Harga"
            value="<?php echo $d['harga_produk']; ?>" name="harga_produk">
        <label for="floatingInput">Harga</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" placeholder="Stok"
            value="<?php echo $d['stok_produk']; ?>" name="stok_produk">
        <label for="floatingInput">Stok</label>
    </div>
    <div class="form mb-3">
        <select class="form-select p-3" aria-label="Default select example" name="catagory">
            <option selected value="<?php echo $d['catagory']; ?>"><?php echo $d['catagory']; ?></option>
            <option value="Sepatu">Sepatu</option>
            <option value="Baju">Baju</option>
            <option value="Laptop">Laptop</option>
        </select>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Deskripsi Produk" id="floatingTextarea"
            name="deskripsi_produk"><?php echo $d['deskripsi_produk']; ?></textarea>
        <label for="floatingTextarea">Deskripsi</label>
    </div>
    <div class="mb-3">
        <label class="mb-1 mb-1" for="floatingTextarea">Foto Produk :</label><br>
        <img width="50%" height="50%" src="../../image/<?php echo $d['nama_foto']; ?>" alt="">
        <input class="form-control mt-3" type="file" id="formFileMultiple" name="nama_foto"
            value="<?php echo $d['nama_foto'];?>" required multiple>
    </div>
    <div class="row">
        <div class="col-3"><input type="submit" value="Submit" class="btn btn-success"></div>
        <div class="col-3"><input type="reset" value="Reset" class="btn btn-danger"></div>
    </div>

</form>

<?php
 endforeach;
} 
}
?>