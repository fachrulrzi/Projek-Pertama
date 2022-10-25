<?php  include "../layout1/admin/base_add_admin.php" ?>
<?php class AddAdmin {
    public static function first_conten() {?>
<form class="form-signin" action="../../model/input_produk.php" enctype="multipart/form-data" method="POST">
    <h1 class="h3 mb-3 fw-bold text-center">Add Product</h1>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="nama_produk">
        <label for="floatingInput">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Merek" name="merek_produk">
        <label for="floatingInput">Merek</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" step="any" class="form-control" id="floatingInput" placeholder="Harga" name="harga_produk">
        <label for="floatingInput">Harga</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" placeholder="Stok" name="stok_produk">
        <label for="floatingInput">Stok</label>
    </div>
    <div class="form mb-3">
        <select class="form-select p-3" aria-label="Default select example" name="catagory">
            <option selected>Pilih Katagori</option>
            <option value="Sepatu">Sepatu</option>
            <option value="Baju">Baju</option>
            <option value="Laptop">Laptop</option>
        </select>
    </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Deskripsi Produk" id="floatingTextarea"
            name="deskripsi_produk"></textarea>
        <label for="floatingTextarea">Deskripsi</label>
    </div>
    <div class="mb-3">
        <label class="mb-1" for="floatingTextarea">Foto Produk :</label>
        <input class="form-control" type="file" id="formFileMultiple" name="nama_foto" multiple>
    </div>
    <div class="row">
        <div class="col-3"><input type="submit" value="Submit" class="btn btn-success"></div>
        <div class="col-3"><input type="reset" value="Reset" class="btn btn-danger"></div>
    </div>

</form>
<?php } 
}
?>