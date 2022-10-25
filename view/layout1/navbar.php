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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary d-none d-lg-block d-xl-block sticky-top">
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <a class="navbar-brand fw-bold fs-1 fm " href="../layout2/index.php">D'Razka</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex w-50" action="../../../../pdo/view/layout2/index.php" method="GET" role="search">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Cari Produk" value="<?php  if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        echo $cari;
                      } ?>" aria-label="Search">
                    <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
                </form>

                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="../layout2/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="../layout2/kontak.php">Kontak</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Katagori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"
                                    href="../../../../pdo/view/layout2/index.php?katagori=baju">Baju</a></li>
                            <li><a class="dropdown-item"
                                    href="../../../../pdo/view/layout2/index.php?katagori=sepatu">Sepatu</a></li>
                            <li><a class="dropdown-item"
                                    href="../../../../pdo/view/layout2/index.php?katagori=laptop">Laptop</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Filter <i class="bi bi-filter"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../../../../pdo/view/layout2/index.php?harga=up">Harga <i
                                        class="bi bi-sort-up"></i></a></li>
                            <li><a class="dropdown-item" href="../../../../pdo/view/layout2/index.php?harga=down">Harga
                                    <i class="bi bi-sort-down"></i></a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link btn btn-danger text-light" href="../../../../pdo/index.php">LogOut</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- mobile -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary d-sm-block d-md-block d-lg-none">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-1 fm " href="../layout2/index.php">D'Razka</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="../layout2/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="../layout2/kontak.php">Kontak</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Katagori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"
                                    href="../../../../pdo/view/layout2/index.php?katagori=baju">Baju</a></li>
                            <li><a class="dropdown-item"
                                    href="../../../../pdo/view/layout2/index.php?katagori=sepatu">Sepatu</a></li>
                            <li><a class="dropdown-item"
                                    href="../../../../pdo/view/layout2/index.php?katagori=laptop">Laptop</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Filter <i class="bi bi-filter"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../../../../pdo/view/layout2/index.php?harga=up">Harga <i
                                        class="bi bi-sort-up"></i></a></li>
                            <li><a class="dropdown-item" href="../../../../pdo/view/layout2/index.php?harga=down">Harga
                                    <i class="bi bi-sort-down"></i></a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex" action="../../../../pdo/view/layout2/index.php" method="GET" role="search">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Cari Produk" value="<?php  if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        echo $cari;
                      } ?>" aria-label="Search">
                    <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
</body>

</html>