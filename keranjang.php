<?php
include "koneksi.php";
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['user'])) {
  header('Location:../admin/sign.php');
  exit();       
}


$id_user = $_SESSION['user'];

    if (isset($_POST['tambah'])){
        if(isset($_SESSION['Keranjang'])){
            $item_array_id = array_column($_SESSION['Keranjang'], 'id');
            if(!in_array($_GET["id"], $item_array_id)){
                $count = count($_SESSION['Keranjang']);
                $item_array = array(
                    'id' => $_GET['id'],
                    'nama' => $_POST['hidden_nama'],
                    'harga' => $_POST['hidden_barang'],
                    'foto' => $_POST['hidden_foto'],
                    'jumlah' => $_POST['jumlah'],
                );

                $_SESSION['Keranjang'] [$count] = $item_array;
                  
                echo "<script>alert('berhasil dimasukkan ke keranjang');</script>";
            }else {
                echo"<script>alert('sudah ada di keranjang');</script>";
         }
        }else{
            $item_array = array(
                'id' => $_GET['id'],
                'nama' => $_POST['hidden_nama'],
                'harga' => $_POST['hidden_harga'],
                'foto' => $_POST['hidden_foto'],
                'jumlah' => $_POST['jumlah'],
            );

            $_SESSION['Keranjang'] [0] = $item_array;
            echo "<script>
            alert('berhasil dimasukkan ke keranjang');
            </script>";
        }
    }
    if(isset($_GET['aksi'])){
        if($_GET['aksi'] == 'hapus'){
            foreach($_SESSION['Keranjang'] as $key => $value){
                if($value['id'] == $_GET['id']){
                    unset($_SESSION['Keranjang'] [$key]);
                    echo"<script>alert('produk dihapus dari keranjang');</script>";
                    echo"<script>window.location = 'keranjang.php';</script>";
                }
            }
        }else if ($_GET['aksi'] == 'beli'){
            foreach($_SESSION['Keranjang'] as $key => $value){
                $total = $total + ($value["jumlah"] * $value['harga']);
            }

            $query = mysqli_query($koneksi, "INSERT INTO tb_transaksi(tanggal,id_pelanggan,total) VALUES ('". date("Y-m-d") . "','$id_user','$total')");
            $id_transaksi = mysqli_insert_id($koneksi);
            
            foreach($_SESSION['Keranjang'] as $key => $value){
                $id_produk = $value['id'];
                $jumlah = $value['jumlah'];
                $sql = "INSERT INTO tb_detail(id_transaksi,id_produk,jumlah) VALUES ('$id_transaksi'.'$id_produk'.'$jumlah')";
                $res = mysqli_query($koneksi, $sql);

                if ($res > 0){
                    unset($_SESSION['Keranjang']);

                    echo "<script>
                    alert('terimakasih sudah berbelanja');
                    </script>";

                    echo "<script>
                    window.location = 'cetak.php?id=". $id_transaksi."';
                    </script>";
                }
            }
        }
    }


?>


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Keranjang - Kki's Bakery</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

    

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
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
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
    <link href="checkout.css" rel="stylesheet">
  </head>
  <body class="bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
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
      <a class="navbar-brand" href="#">Kiki Bakery</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../HalamanUtama/index.php">Home</a>
        </ul>
        
        
              <a class="nav-link d-flex align-items-center" href="../admin/logout.php">
                <button type="button" class="btn btn-success">Log Out</button>
              </a>
      </div>
    </div>
  </nav>
</header>

<div class="container">
  <main>
   
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../HalamanUtama/img/cakelogo2.png" alt="" width="450" height="350">
      <h2>Keranjang Kamu!</h2>
      <p class="lead">Belanja yang banyak sayang! Biar admin makin Kayaaa!</p>
    </div>
    </div> 
   
    <div class="row g-5"> 
      <div class="row g-5 d-flex justify-content-center align-items-center">
      <div class="col-md-5 col-lg-4 order-md-first">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your Cart</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Produk</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga</th>
      <th scope="col">Total</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  
  <tbody>
  <?php
if (!empty($_SESSION["keranjang"])) {
    $total = 0;
    foreach ($_SESSION['keranjang'] as  $value) {
        // Hitung total untuk setiap produk
        $totalHarga = $value["jumlah"] * $value["harga"];
        ?>
        <tr>
            <td><img src="img/<?php echo $value['foto'] ?>" height="100px"> <?php echo $value['id'] ?></td>
            <td><?php echo $value["jumlah"] ?></td>
            <td>$ <?php echo number_format($value['harga'], 2) ?></td>
            <td>$ <?php echo number_format($totalHarga, 2) ?></td>
            <td><a href="../keranjang/keranjang.php?aksi=hapus&id=<?= $value['id']; ?>"><span class="btn btn-danger">Hapus</span></a></td>
        </tr>
        <?php
        // Tambahkan total ke keranjang
        $total + $totalHarga;
    }?>
    <?php
}
?>
  </tbody>

</table>       
</ul>         
          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-body-secondary">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>
            
            <div class="col-md-3">
              
            </div>
            
            <div class="col-md-3">
              
            </div>
          </div>

          <hr class="my-4">
          <div class="row">
  <div class="col">
  <button class="w-100 btn btn-primary btn-lg" type="submit">BUY !</button>
  </div>
  <div class="col">
  <a href="../HalamanUtama/index.php"><button class="w-100 btn btn-primary btn-lg" type="submit"> Order More</button></a>
  </div>
</div>
</body>
          
        </div>
        </form>
      </div>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">&copy; 2017–2024 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="checkout.js"></script></body>
</html>
