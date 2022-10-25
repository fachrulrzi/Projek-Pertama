<?php  include "view/layout1/base_register.php" ?>
<?php class Register {
    public static function first_conten() {?>
<form class="form-signin" action="model/input.php" method="POST">
    <img class="w-50" src="view/layout2/logo.png" alt="">
    <h1 class="h3 mb-3 fw-bold">Register</h1>

    <div class="form-floating mb-3">
        <input type="hidden" name="peran" value="Costumer">
        <input type="text" class="form-control" id="floatingInput" placeholder="Nama Lengkap" name="username" required
            oninvalid="this.setCustomValidity('Masukkan Nama Lengkap')">
        <label for="floatingInput">Nama Lengkap</label>
    </div>
    <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" placeholder="Telepon" name="telepon" required
            oninvalid="this.setCustomValidity('Masukkan Telepon')">
        <label for="floatingInput">Telepon</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Alamat" name="alamat" required
            oninvalid="this.setCustomValidity('Masukkan Alamat')">
        <label for="floatingInput">Alamat</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email" required
            oninvalid="this.setCustomValidity('Masukkan Email')">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password"
            required oninvalid="this.setCustomValidity('Masukkan Password')">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="row">
        <div class="col-12 mb-3"><button class="w-100 btn btn-lg btn-success fw-bold" type="submit">Submit</button>
        </div>
        <div class="col-12"><a href="index.php" class="w-100 btn btn-lg btn-primary fw-bold">LogIn</a></div>
    </div>

</form>
<?php } 
}
?>