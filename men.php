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
  <link rel="stylesheet" href="men.css">
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
      <img src="Images Men/Banner Men2.jpg" alt="Koleksi Men">
        <div class="category-title">
          <p class="category-label">Collection</p>
          <h1>MEN</h1>
        </div>
        <p class="category-desc">Discover footwear designed for every step. From timeless classics to modern essentials, find the perfect pair that matches your style.</p>
    </section>
    <section class="catalog">
      <div class="catalog-grid">
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/adidas Gazelle Blue.jpg" alt="adidas Gazelle Blue">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Gazelle Blue</span></h3>
            <p class="product-price">Rp 2.070.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/adidas Gazelle Red.jpg" alt="adidas Gazelle Red">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Gazelle Red</span></h3>
            <p class="product-price">Rp 1.709.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/adidas Gazelle White.jpg" alt="adidas Gazelle White">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Gazelle White</span></h3>
            <p class="product-price">Rp 1.500.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/adidas Samba Black.jpg" alt="adidas Samba Black">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Samba Black</span></h3>
            <p class="product-price">Rp 1.700.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/adidas Samba White Black.jpg" alt="adidas Samba White Black">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Samba White Black</span></h3>
            <p class="product-price">Rp 1.500.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/adidas Samba White.jpg" alt="adidas Samba White">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Samba White</span></h3>
            <p class="product-price">Rp 1.760.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/adidas Spezial Blue.jpg" alt="adidas Spezial Blue">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Spezial Blue</span></h3>
            <p class="product-price">Rp 1.899.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/adidas Spezial Brown.jpg" alt="adidas Spezial Brown">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Spezial Brown</span></h3>
            <p class="product-price">Rp 1.700.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/adidas Spezial Navy.jpg" alt="adidas Spezial Navy">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas Spezial Navy</span></h3>
            <p class="product-price">Rp 1.899.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/Puma Suede.webp" alt="Puma Suede">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Puma Suede</span></h3>
            <p class="product-price">Rp 1.599.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/Nike Air Jordan 11 Rare Air.avif" alt="Nike Air Jordan 11 Rare Air">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Nike Air Jordan 11 Rare Air</span></h3>
            <p class="product-price">Rp 3.049.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/Vans Skate Rowan.jpg" alt="Vans Skate Rowan">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Vans Skate Rowan</span></h3>
            <p class="product-price">Rp 1.627.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/converse weapon white.png" alt="Converse Weapon White">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Converse Weapon White</span></h3>
            <p class="product-price">Rp 1.349.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/New Balance 9060 Brown.webp" alt="New Balance 9060 Brown">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">New Balance 9060 Brown</span></h3>
            <p class="product-price">Rp 2.899.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/Nike Giannis Immortality 3.jpg" alt="Nike Giannis Immortality 3">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Nike Giannis Immortality 3</span></h3>
            <p class="product-price">Rp 1.299.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/Converse 70 chuck.webp" alt="Converse 70 High">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Converse 70 High</span></h3>
            <p class="product-price">Rp 1.399.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/Air Jordan.webp" alt="Air Jordan">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Air Jordan 1 Low</span></h3>
            <p class="product-price">Rp 1.729.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/Adidas Superstar White.jpg" alt="Adidas Superstar White">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Adidas Superstar White</span></h3>
            <p class="product-price">Rp 1.900.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/Adidas Superstar Black.jpg" alt="Adidas Superstar Black">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Adidas Superstar Black</span></h3>
            <p class="product-price">Rp 1.900.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/Adidas SL2.jpg" alt="Adidas SL 72">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Adidas SL 72 OG Blue</span></h3>
            <p class="product-price">Rp 1.260.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/Adidas SL.jpg" alt="Adidas SL 72">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">adidas SL 72 OG Green</span></h3>
            <p class="product-price">Rp 1.260.000</p>
          </div>
          <div class="keranjang">
            <a href="keranjang.html">Tambah ke Keranjang</a>
          </div>
        </article>
        <article class="product-card">
          <div class="product-image">
            <img src="Images Men/Adidas Spezial.jpg" alt="Adidas Spezial">
          </div>
          <div class="product-details">
            <h3 class="product-name"><span class="product-title">Adidas Spezial Dark Blue</span></h3>
            <p class="product-price">Rp 1.960.000</p>
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