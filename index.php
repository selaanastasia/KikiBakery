
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Kiki's Bakery</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(249, 113, 113, 0.1);
        border: white;
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <img src="chocolatecake.png" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Kiki Bakery</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil.php">PROFIL</a>
          </li>
         </ul>
        
        <a href="../keranjang/keranjang.php"><img src="img/keranjang3.jpg" height="50" width="50"></img></a>
            
        <a class="nav-link d-flex align-items-center" href="../admin/sign.php">
                <button type="button" class="btn btn-success">Log In</button>
              </a>
            
            
              <a class="nav-link d-flex align-items-center" href="logout.php" >
                <button type="button" class="btn btn-success">Log Out</button>
              </a>
              
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="cinnamaoncake2.jpg" width="100%" height="150%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Choose what your heart decide</h1>
            <p class="opacity-75"><p><a class="btn btn-lg btn-primary" href="../register/pelanggan.php">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="tiramisucake2.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Taste every flavour</h1>
            <p></p>
            <p><a class="btn btn-lg btn-primary" href="#bestseller">Best Seller</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../gambar/cakelogo.png" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Try another flavour of heaven</h1>
            <p>.</p>
            <p><a class="btn btn-lg btn-primary" href="#galeri">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <hr class="featurette-divider">
    <hr class="featurette-divider">
    <div class="py-5 text-center">
    <h1 class="display-4 fw-normal text-body-emphasis" id="galeri">⌘ G ล๋ ƪ ē я ƴ ⌘</h1>
    </div>
    <hr class="featurette-divider">
    <hr class="featurette-divider">
    <div class="row">
      <div class="col-lg-4">
        <img src="Matcha Cake - Green Tea Cake.jpeg" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal">Matcha Cake</h2>
        <p>Experience the refined taste of our Matcha Cake, with authentic green tea essence.</p>
        <p><a class="btn btn-secondary" href="#matchacake">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="strawberrycake.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal">Strawberry Cake</h2>
        <p>Savor the freshness of summer with our Strawberry Delight Cake, bursting with the sweetness of ripe strawberries and layered with velvety cream.</p>
        <p><a class="btn btn-secondary" href="#strawberrycake">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="chocolatecake.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal">Chocolate Cake</h2>
        <p>Indulge in pure decadence with our Chocolate Bliss Cake, featuring rich, velvety layers of chocolate and a luscious, smooth ganache.</p>
        <p><a class="btn btn-secondary" href="#chocolatecake">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="gingercake.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal">Ginger Cake</h2>
        <p>Embrace the warmth of our Ginger Spice Cake, perfectly balanced with rich ginger notes and a hint of sweetness, for a comforting, aromatic treat.</p>
        <p><a class="btn btn-secondary" href="#gingercake">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="cinnamoncake.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal">Cinnamon Cake</h2>
        <p>Delight in our Cinnamon Cake, warmly spiced and fragrant.</p>
        <p><a class="btn btn-secondary" href="#cinnamoncake">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="tiramisucake.png" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal">Tiramissu Cake</h2>
        <p>Indulge in the luxury of our Tiramisu Cake, soft and rich with captivating coffee flavors.</p>
        <p><a class="btn btn-secondary" href="#tiramisucake">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->
    
    
    <hr class="featurette-divider">
    <hr class="featurette-divider">
    <div class="py-5 text-center">
    <h1 class="display-4 fw-normal text-body-emphasis" id="bestseller">⌘ BEST SELLER ⌘</h1>
    </div>
    <hr class="featurette-divider">
    <hr class="featurette-divider">
      <form action="keranjang.php?id=<?= $h?>">
    <div class="row featurette">
      <div class="col-md-7" id="matchacake">
        <h2 class="featurette-heading fw-normal lh-1">Matcha Cake<span class="text-body-secondary"> - 20$</span></h2>
        <p class="lead">Indulge in the luxury of our Matcha Cake, soft and fresh with captivating green tea flavors.</p>
      <div class="tombol gap-1">
      <div class="row">
  <div class="col">
    <div class="tombol gap-5">
   
  </div>
  </div>
</div>
       </div>
      </div>
      <div class="col-md-5">
        <img src="Matcha Cake - Green Tea Cake.jpeg" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette" id="cinnamoncake">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Cinnamon Cake<span class="text-body-secondary"> - 20$</span></h2>
        <p class="lead">Treat yourself to our Cinnamon Cake, a warm and fragrant delight with a mesmerizing hint of cinnamon.</p>
        <div class="tombol gap-5">
        
       </div>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="cinnamoncake.png" width="450" height="450" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7" id="tiramisucake">
        <h2 class="featurette-heading fw-normal lh-1">Tiramisu Cake<span class="text-body-secondary"> - 20$</span></h2>
        <p class="lead">Indulge in the luxury of our Tiramisu Cake, soft and rich with captivating coffee flavors.</p>
        <div class="tombol gap-5">
        
       </div>
      </div>
      <div class="col-md-5">
        <img src="tiramisucake.png" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    
    </form>
      

    <hr class="featurette-divider"> 
    <div class="py-5 text-center">
    <h1 class="display-4 fw-normal text-body-emphasis">⌘ THE MENU ⌘</h1>
    </div>
    <hr class="featurette-divider">
    <hr class="featurette-divider">
<div class="row">
<div class="album py-5 bg-body-tertiary">
    <div class="container">

    <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php
include 'koneksi.php';
$tambah = mysqli_query($koneksi, "SELECT * FROM produk");
while ($product = mysqli_fetch_array($tambah)){
?>
    <form method="POST" action="../keranjang/keranjang.php?id=<?= $product['id'] ?>">
        <div class="col">
            <div class="">
                <img src="img/<?= $product['foto'] ?>" alt="" class="bd-placeholder-img card-img-top" width="800%" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <div class="card-body">
                    <p class="card-text"><b><?= $product['nama_barang'] ?></b></p>
                    <p class="card-text"><?= $product['deskripsi'] ?></p>
                    <p class="card-text"><b>$<?= $product['harga_barang'] ?></b></p>
                    <input type="hidden" name="nama_barang" value="<?= $product['nama_barang'] ?>">
                    <input type="hidden" name="harga_barang" value="<?= $product['harga_barang'] ?>">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="submit">Beli Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
<?php
}
?>

      </form>                                                                                                                                        
      </div>  
    </div> 
  </div>

 <br>
 <script>
            function changeQuantity(amount) {
                var quantityInput = document.getElementById('quantity');
                var currentQuantity = parseInt(quantityInput.value);
                if (!isNaN(currentQuantity)) {
                    quantityInput.value = Math.max(1, currentQuantity + amount);
                }
            }
            </script>

 

  

<br>
  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2024 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
