<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio | Raira Nuraidah</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial bold;
            background-color: rgb(244, 240, 221);
        }
        .form-label>span{
          color: red;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:rgba(145, 118, 66, 0.817)">
    <div class="container">
    <a class="navbar-brand" href="#">Raira Nuraidah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Shop
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
      </ul>
    </div>
      <div>
        <button type="button" class="btn btn-outline-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            Cart
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-0-circle-fill" viewBox="0 0 16 16">
                <path d="M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895Z"/>
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.012 4.158c1.858 0 2.96-1.582 2.96-3.99V7.84c0-2.426-1.079-3.996-2.936-3.996-1.864 0-2.965 1.588-2.965 3.996v.328c0 2.42 1.09 3.99 2.941 3.99Z"/>
            </svg>
        </button>
      </div>
  </div>
</nav>
<!-- Akhir navbar -->
<!-- Home -->
<section id="home" class=" pt-5">
        <div class="container p-0 text-center pt-5">
            <div class="row justify-content-center p-0">
                <img src="img/online.jpg" alt="Raira Nuraidah" width="1000" height="300" >
            </div>
        </div>
</section>
<!-- Akhir Home -->
<!-- Shop -->
<section>
<div class="container pt-4 px-1">
    <div class="row justify-content-center">
        @foreach ($product as $item)
        <div class="col col-md-4 mb-5 text-center">
            <div class="card mt-5 ms-4" style="width: 18rem;">
                <img src="/storage/{{ $item->gambar }}" class="card-img-top" alt="Shop">
                <div class="card-body text-center ">
                    <div class="product">
                        <h5 class="card-title">{{ $item->nama_barang }}</h5>
                        <p class="card-text">Rp. {{ number_format($item->harga) }}</p>
                        <a href="product/detail/{{ $item->id }}" class="btn btn-outline-primary mt-auto">View options</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>    
</section>

<!-- Akhir Shop -->
<!-- Awal footer -->
<div class="container-fluid ">
    <footer class="py-3 my-3 border-top border-primary text-primary">
      <p class="text-center">Copyright &copy; <a href="https://api.whatsapp.com/send?phone=6285321050427&text=%22halloo%22" class="text-decoration-none"> Raira Nuraidah 2023</a></p>
    </footer>
  </div>
<!-- Akhir footer -->
</body>
<script src="js/bootstrap.bundle.js"></script>
</html>

