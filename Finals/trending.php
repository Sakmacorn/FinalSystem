<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending 2025 Skincare Products | Princess Touch</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Aboreto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light py-3">
        <div class="container">
            <a class="navbar-brand fw-bolder fs-2" href="#">PRINCESS TOUCH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6 gap-4">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="trending.php">Trending</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img src="images/searching.png" alt="" class="icon">
                        </a>
                    </li>

                    <!-- ✅ Updated Cart Icon with Badge -->
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="#">
                            <img src="images/addtocart.png" alt="" class="icon">
                            <span id="cartCount"
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning d-none">
                                0
                            </span>
                        </a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#">Log in</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <hr class="navbar-line">

    <section class="trending-section text-center py-5">
        <div class="container">
            <h2 class="fw-bold mb-3">Trending 2025 Skincare Products</h2>

            <div class="d-flex justify-content-center align-items-center mb-3">
                <img src="images/flowerr.png" alt="Flower" width="50" class="me-2">
                <img src="images/flowerr.png" alt="Flower" width="50" class="ms-2">
            </div>

            <p class="mx-auto mb-5" style="max-width:800px;">
                Discover what everyone’s raving about! These are the most-loved products our beauty community can’t get
                enough of. From skincare must-haves to makeup essentials, explore the latest trending picks that are
                making waves — and glowing faces — all over.
            </p>

            <div
                class="d-flex flex-column flex-md-row align-items-center justify-content-between border rounded p-4 mb-4 bg-white shadow-sm">
                <img src="images/arrival6.png" alt="Manyo Cleansing Oil" class="img-fluid mb-3 mb-md-0"
                    style="max-width:250px;">
                <div class="text-start ms-md-4">
                    <h5>1. Manyo Pure Cleansing Oil Deep Clean</h5>
                    <p>
                        A cult classic in South Korea, known as the #1 cleansing oil at Olive Young. Inspired by the
                        success of the original, this edition is even better — formulated with plant oils like grape
                        seed,
                        lavender, and sunflower seed to remove waterproof makeup without feeling heavy or greasy.
                    </p>
                    <p class="fw-semibold">₱1,000.00</p>
                    <div>
                        <i class="bi bi-heart fs-4 text-secondary me-2" onclick="toggleHeart(this)"></i>
                        <i class="bi bi-cart fs-4 text-secondary" onclick="addToCart(this)"></i>
                    </div>
                </div>
            </div>

            <div
                class="d-flex flex-column flex-md-row align-items-center justify-content-between border rounded p-4 mb-4 bg-white shadow-sm">
                <img src="images/arrival4.png" alt="COSRX Toner" class="img-fluid mb-3 mb-md-0"
                    style="max-width:250px;">
                <div class="text-start ms-md-4">
                    <h5>2. COSRX AHA/BHA Clarifying Treatment Toner</h5>
                    <p>
                        Gentle enough for daily use, even on sensitive skin. The spray applicator gives an even coat and
                        makes it easy to treat back acne too. Perfect for post-gym or daily refresh.
                    </p>
                    <p class="fw-semibold">₱2,000.00</p>
                    <div>
                        <i class="bi bi-heart fs-4 text-secondary me-2" onclick="toggleHeart(this)"></i>
                        <i class="bi bi-cart fs-4 text-secondary" onclick="addToCart(this)"></i>
                    </div>
                </div>
            </div>

            <div
                class="d-flex flex-column flex-md-row align-items-center justify-content-between border rounded p-4 bg-white shadow-sm">
                <img src="images/arrival1.png" alt="Sulwhasoo Cream" class="img-fluid mb-3 mb-md-0"
                    style="max-width:250px;">
                <div class="text-start ms-md-4">
                    <h5>3. Sulwhasoo Concentrated Ginseng Rejuvenating Cream</h5>
                    <p>
                        A luxurious moisturizer — deeply hydrating yet lightweight, with a subtle ginseng scent that
                        leaves skin plumper and radiant after every use.
                    </p>
                    <p class="fw-semibold">₱3,800.00</p>
                    <div>
                        <i class="bi bi-heart fs-4 text-secondary me-2" onclick="toggleHeart(this)"></i>
                        <i class="bi bi-cart fs-4 text-secondary" onclick="addToCart(this)"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section mt-5">
        <div class="footer-content container py-5">
            <div class="row align-items-center justify-content-between text-white">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <h4><span class="fw-bold">Princess Touch</span> offers gentle yet luxurious skincare made with
                        nature’s finest ingredients and backed by science. Our mission is to illuminate, nourish, and
                        restore your natural glow — helping every skin type feel confident, radiant, and cared for.</h4>
                    <button class="footer-btn mt-4">Explore more</button>
                </div>

                <div class="col-lg-4 text-lg-end">
                    <ul class="list-unstyled mb-4">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Trending</a></li>
                    </ul>

                    <ul class="list-unstyled social-links">
                        <li><a href="#">Facebook ↗</a></li>
                        <li><a href="#">Instagram ↗</a></li>
                        <li><a href="#">Twitter ↗</a></li>
                    </ul>
                </div>
            </div>

            <hr class="footer-line mt-4 mb-3">
            <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between text-white-50 small">
                <a href="ToS.php"><span>Terms of Service</span></a>
                <span>© 2025 Princess Touch. All rights reserved.</span>
                <a href="policy.php"><span>Privacy Policy</span></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let cartCount = 0;

        function toggleHeart(element) {
            element.classList.toggle('bi-heart');
            element.classList.toggle('bi-heart-fill');
            element.classList.toggle('text-danger');
        }

        function addToCart(icon) {
            if (icon.classList.contains('bi-cart-fill')) {
                icon.classList.remove('bi-cart-fill', 'text-warning');
                icon.classList.add('bi-cart');
                cartCount--;
            } else {
                icon.classList.remove('bi-cart');
                icon.classList.add('bi-cart-fill', 'text-warning');
                cartCount++;
            }

            const cartBadge = document.getElementById('cartCount');
            if (cartBadge) {
                cartBadge.textContent = cartCount;
                if (cartCount > 0) {
                    cartBadge.classList.remove('d-none');
                } else {
                    cartBadge.classList.add('d-none');
                }
            }
        }
    </script>

</body>

</html>