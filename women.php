<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>StepUp Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="stylesheet" href="women.css">
  <link rel="icon" href="iconbrowser/Shoes Icon Browser.jpg">
</head>
<body>
  <header class="main-header">
    <div class="navbar">
      <div class="left-nav">
        <a href="index.php" class="logo">STEP UP</a>
      </div>

      <div class="center-nav">
        <form action="" method="get">
          <input type="search" name="q" placeholder="Cari sepatu idealmu di sini">
          <button type="submit">Cari</button>
        </form>
      </div>
      <div class="right-nav">
          <?php if (isset($_SESSION['id_user'])): ?>
            <a href="#">
              <img src="icons/icons8-user-48.png" alt="User">
              Halo, <?= htmlspecialchars($_SESSION['nama']) ?>
            </a>
            <a href="koneksi/logout.php">
              <img src="icons/icons8-log-out-30.png" alt="Logout">
              Logout
            </a>
          <?php else: ?>
            <a href="login.php">
              <img src="icons/icons8-log-in-32.png" alt="">
              Login
            </a>
          <?php endif; ?>
          <a href="index.php">
            <img src="icons/icons8-shopping-basket-32.png" alt="">
            Keranjang
          </a>
      </div>
    </div>

    <nav class="categories">
      <ul>
        <li><a href="men.php">Men</a></li>
        <li><a href="women.php">Women</a></li>
        <li><a href="kids.php">Kids</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="category-banner">
      <img src="Images Women/Women Banner.webp" alt="Koleksi Women">
        <div class="category-title">
          <p class="category-label">Collection</p>
          <h1>WOMEN</h1>
        </div>
        <p class="category-desc">Step into confidence with footwear that blends comfort, elegance, and style. Find your perfect pair for every occasion.</p>
    </section>
    <section class="catalog">
      <div class="catalog-grid">
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/Adidas Ballet Shoe Jennie.webp" alt="adidas Ballet Shoe Jennie">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Ballet Shoe Jennie</span></h3>
            <p class="product-price">Rp 2.400.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/Adidas Samba Ballet.png" alt="adidas Samba Ballet">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Samba Ballet</span></h3>
            <p class="product-price">Rp 1.600.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/ADIDAS SAMBA OG W.png" alt="adidas Samba OG W">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Samba OG W</span></h3>
            <p class="product-price">Rp 2.300.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/adidas tokyo women's sneakers - white.jpg" alt="adidas Tokyo Women's Sneakers - White">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Tokyo Women's Sneakers - White</span></h3>
            <p class="product-price">Rp 1.600.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/Converse Chuck Taylor All Star Lift.jpg" alt="Converse Chuck Taylor All Star Lift">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Converse Chuck Taylor All Star Lift</span></h3>
            <p class="product-price">Rp 1.399.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/Converse Chuck Taylor Lo.jpg" alt="Converse Chuck Taylor Lo">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Converse Chuck Taylor Lo</span></h3>
            <p class="product-price">Rp 1.119.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/Converse Run Star Trainer.jpg" alt="Converse Run Star Trainer">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Converse Run Star Trainer</span></h3>
            <p class="product-price">Rp 1.399.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/HOKA Bondi 9.webp" alt="HOKA Bondi 9">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">HOKA Bondi 9</span></h3>
            <p class="product-price">Rp 2.000.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/HOKA Clifton 10.webp" alt="HOKA Clifton 10">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">HOKA Clifton 10</span></h3>
            <p class="product-price">Rp 1.899.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/NB 983 unisex sneakers - pink.jpg" alt="NB 983 Unisex Sneakers - Pink">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">NB 983 Unisex Sneakers - Pink</span></h3>
            <p class="product-price">Rp 2.599.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/New Balance 740 Unisex Sneakers - Black Pink.jpg" alt="New Balance 740 Unisex Sneakers - Black Pink">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">New Balance 740 Unisex Sneakers - Black Pink</span></h3>
            <p class="product-price">Rp 1.899.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/New Balance Ellipse Womens Running Shoes - Pink.jpg" alt="New Balance Ellipse Womens Running Shoes - Pink">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">New Balance Ellipse Womens Running Shoes - Pink</span></h3>
            <p class="product-price">Rp 2.399.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/Nike Air Max Moto 2K SE.webp" alt="Nike Air Max Moto 2K SE">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Nike Air Max Moto 2K SE</span></h3>
            <p class="product-price">Rp 1.759.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/Nike p-6000 women's sneakers.jpg" alt="Nike p-6000 women's sneakers">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Nike p-6000 women's sneakers</span></h3>
            <p class="product-price">Rp 1.383.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/Nike Sabrina 4.webp" alt="Nike Sabrina 4">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Nike Sabrina 4</span></h3>
            <p class="product-price">Rp 2.149.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/Palermo Dress-Up Sneakers Women.avif" alt="Palermo Dress-Up Sneakers Women">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Puma Palermo Dress-Up Sneakers Red Maroon </span></h3>
            <p class="product-price">Rp 1.599.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Women/Suede Bloom Sneakers Women.avif" alt="Suede Bloom Sneakers Women">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Puma Suede Bloom - White</span></h3>
            <p class="product-price">Rp 1.599.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
      </div>
    </section>
  </main>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <div>
          <a href="" class="me-4 text-reset"><i class="fab fa-facebook-f"></i></a>
          <a href="" class="me-4 text-reset"><i class="fab fa-twitter"></i></a>
          <a href="" class="me-4 text-reset"><i class="fab fa-google"></i></a>
          <a href="" class="me-4 text-reset"><i class="fab fa-instagram"></i></a>
          <a href="" class="me-4 text-reset"><i class="fab fa-linkedin"></i></a>
          <a href="" class="me-4 text-reset"><i class="fab fa-github"></i></a>
        </div>
      </section>

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Step Up
              </h6>
              <p>
                Step into your style. Discover footwear for every moment, every move, and every journey.
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">SHOP</h6>
              <p><a href="men.html" class="text-reset">Men</a></p>
              <p><a href="women.html" class="text-reset">Women</a></p>
              <p><a href="kids.html" class="text-reset">Kids</a></p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Customer Service</h6>
              <p><a href="contact.html" class="text-reset">Contact Us</a></p>
              <p><a href="faq.html" class="text-reset">FAQ</a></p>
              <p><a href="shipping.html" class="text-reset">Shipping Policy</a></p>
              <p><a href="returns.html" class="text-reset">Returns & Exchanges</a></p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Get In Touch</h6>
              <p><i class="fas fa-home me-3"></i> Indonesia, Jakarta, Thamrin</p>
              <p><i class="fas fa-envelope me-3"></i> hello@stepup.com</p>
              <p><i class="fas fa-phone me-3"></i> +62 812-7394-5061</p>
              <p><i class="fas fa-print me-3"></i> +62 859-5331-8544</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2026 Copyright:
        <a class="text-reset fw-bold" href="index.html">StepUpStore.com</a>
      </div>
    </footer>
</body>
</html>