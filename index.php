<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkincareIn</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./indexstyle.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary px-5 py-2 fs-5" style="background-color: #e3f2fd; box-shadow: 0px 8px 25px rgba(0,0,0,0.4); z-index: 1; position: fixed; width: 100%;">
    <div class="container-fluid justify-content-between">
      <a class="navbar-brand fs-3 text-primary" href="#"><b>SkinkerIn</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul> -->
        <form class="d-flex mx-auto w-50" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
        
        <div>
          <a href="login.php" class="btn btn-outline-primary border-0" id="tombol-login">Login</a>
          <a href="register.php" class="btn btn-outline-primary border-1" id="tombol-login">Join Now</a>
        </div>
      </div>
    </div>
  </nav>
  
  <!-- Banner corousel (auto slide/geser sendiri wwkwk) -->
  <div id="carouselExampleCaptions" class="carousel slide z-0" style="" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.dior.com/on/demandware.static/-/Library-Sites-DiorSharedLibrary/default/dw0321ae2c/images/beauty/05-PRODUCTS/01-FRAGRANCES/SAUVAGE/Y0998004/RELAUNCH2023/SVG_S223_PDP_IngredientParfumNight_1850x2000.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Dior Sauvage</h3>
          <p>Rasakan sensasi wewangian fakboy aseli.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://cdn.shopify.com/s/files/1/1323/4713/products/Laneige-BTS-_-AMOREPACIFIC-Lip-Sleeping-Mask-Lip-_-Pop-Edition_800x.jpg?v=1680162633" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Lip Balm</h3>
          <p>Bibir tampak cerah dan sehat.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://3.bp.blogspot.com/-H-COfkDpv5Y/WLgmCjgW7QI/AAAAAAAA95E/B1eT3I8BDCwwbI6gtJl7hyz3SUcWoR45ACLcB/s1600/2017-02-20%2B02.36.09%2B1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Innisfree Serum</h3>
          <p>Mencerahkan, melembabkan, dan menyamarkan bekas jerawat.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- bungkus semua konten produk -->
  <div class="py-3 px-5">
    <h1 class="m-0 pb-2 border-bottom border-dark" style="font-size: 4rem;"><b>Browse</b></h1>

    <nav class="navbar navbar-expand-lg p-0">
      <div class="container-fluid p-0">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav fs-5 mb-4">
            <a class="nav-link active ps-0" aria-current="page" href="#">Semua Produk</a>
            <a class="nav-link" href="#">Parfume</a>
            <a class="nav-link cek" href="#">Skincare</a>
            <a class="nav-link" href="#">Makeup</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Kotak buat semua produk -->
    <div class="all-card d-flex flex-wrap gap-3 justify-content-center">
      <!-- produk satu satu (card) -->
      <div class="card" style="width: 18rem;" id="product-card">
        <img src="img/dior_sauvage.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title fs-2 mb-2">Card title</h5>
          <h5 class="card-title fs-5 mb-3">Rp500.000</h5>
          <a href="#" class="btn btn-secondary">Go somewhere</a>
        </div>
      </div>
    </div> <!-- akhir kotak semua produk -->
  </div> <!-- akhir bungkus semua konten produk -->

  <div class="z-2" style="height: 100vh; position: fixed; display: none; align-items: center; justify-content: center; background-color: rgba(0, 0, 0, 0.8); top: 0; left: 0;" id="popup">
    <div class="d-flex rounded align-items-center gap-4" style="width: 70%; height: 70vh; background-color: white; padding: 3rem;">
      <img src="img/dior_sauvage.webp" alt="parfum dior" style="height: 100%; width: 50%; object-fit: cover;" class="rounded">
      <div class="h-100">
        <h1 class="fs-1">Dior Sauvage</h1>
        <h1 class="fs-3">Rp500.000</h1>
        <div class="">
          <p>Detail:</p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae voluptate, praesentium nemo, esse, doloribus facere voluptatibus nihil delectus consequatur dicta ex. Sit fugiat iure deleniti nesciunt odit fuga voluptas cupiditate!</p>
        </div>
      </div>
      <div style="position: absolute; top: 0; right: 0;">
        X
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script src="./index.js"></script>
</body>
</html>