<?php  include "view/layout1/base_login.php" ;?>

<?php class Login {
    public static function first_conten() {?>
<form class="form-signin" action="controller/controller_login.php" method="POST">
    <img class="w-50" src="view/layout2/logo.png" alt="">
    <h1 class="h3 mb-3 fw-bold">Selamat Datang!!</h1>

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

    <div class="checkbox mb-3 ">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <div class="row">
        <div class="col-12 mb-3"><button class="w-100 btn btn-lg btn-success fw-bold" name="submit"
                type="submit">LogIn</button>
        </div>
        <div class="col-12"><a href="register.php" class="w-100 btn btn-lg btn-primary fw-bold">Register</a></div>
    </div>
    <p class="mt-4 text-muted">© FRZI - 2022</p>
</form>
<?php } 
}
?>