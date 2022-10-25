<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,700&display=swap" rel="stylesheet">
    <style>
    .fm {
        font-family: 'Merriweather', serif;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary d-none d-md-block sticky-top">
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <a class="navbar-brand fw-bold fs-1 fm " href="../layout2/product_admin.php">D'Razka</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="row w-50 mt-4">
                    <div class="col-12">
                        <form class="d-flex" action="../../../../pdo/view/layout2/product_admin.php" method="GET"
                            role="search">
                            <input class="form-control me-2" type="search" name="cari" placeholder="Search" value="<?php  if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        echo $cari;
                      } ?>" aria-label="Search">
                            <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                    <div class="col-12 d-flex justify-content-start">
                        <div class="row">
                            <div class="col-4"><a href="../../../../pdo/view/layout2/product_admin.php?katagori=baju"
                                    class="text-light text-decoration-none">Baju</a></div>
                            <div class="col-4"><a href="../../../../pdo/view/layout2/product_admin.php?katagori=sepatu"
                                    class="text-light text-decoration-none">Sepatu</a></div>
                            <div class="col-4"><a href="../../../../pdo/view/layout2/product_admin.php?katagori=laptop"
                                    class="text-light text-decoration-none">Laptop</a></div>
                        </div>
                    </div>
                </div>

                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="../layout2/product_admin.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="../layout2/add_admin.php">Add Product</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Filter <i class="bi bi-filter"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"
                                    href="../../../../pdo/view/layout2/product_admin.php?harga=up">Harga <i
                                        class="bi bi-sort-up"></i></a></li>
                            <li><a class="dropdown-item"
                                    href="../../../../pdo/view/layout2/product_admin.php?harga=down">Harga <i
                                        class="bi bi-sort-down"></i></a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link btn btn-danger text-light"
                            href="../../../../pdo/controller/controller_logout.php">LogOut</a>
                </ul>
            </div>
        </div>
    </nav>


</body>

</html>