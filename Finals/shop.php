<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Princess Touch | Shop</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Aboreto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    <style>
        body {
            background-color: #fdeef1;
        }
    </style>

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

    <!--  Product Section -->
    <section class="py-5 mt-3">
        <div class="container">
            <div class="text-center position-relative mb-5">
                <h3 class="fw-bold">Our Products</h3>
                <div class="position-absolute top-0 end-0">
                    <a href="#" class="see-all-design">See all</a>
                </div>
            </div>

            <div class="row text-center g-4">

                <!-- Product 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="images/Best1.png" class="card-img-top rounded-top" alt="Product 1">
                        <div class="card-body">
                            <h6 class="fw-semibold">Soft Pinch Dewy Liquid Blush Mini</h6>
                            <p class="fw-bold mb-2">₱1,200.00 <span
                                    class="text-decoration-line-through text-muted fw-normal">₱1,500.00</span></p>
                            <div>
                                <i class="bi bi-heart fs-4 text-secondary me-2" onclick="toggleHeart(this)"></i>
                                <i class="bi bi-cart fs-4 text-secondary" onclick="addToCart(this)"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="images/Best2.png" class="card-img-top rounded-top" alt="Product 2">
                        <div class="card-body">
                            <h6 class="fw-semibold">Vinopure Purifying Gel Cleanser</h6>
                            <p class="fw-bold mb-2">₱1,600.00 <span
                                    class="text-decoration-line-through text-muted fw-normal">₱1,700.00</span></p>
                            <div>
                                <i class="bi bi-heart fs-4 text-secondary me-2" onclick="toggleHeart(this)"></i>
                                <i class="bi bi-cart fs-4 text-secondary" onclick="addToCart(this)"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="images/Best3.png" class="card-img-top rounded-top" alt="Product 3">
                        <div class="card-body">
                            <h6 class="fw-semibold">Vanish Seamless Finish Foundation Brush</h6>
                            <p class="fw-bold mb-2">₱3,500.00 <span
                                    class="text-decoration-line-through text-muted fw-normal">₱4,500.00</span></p>
                            <div>
                                <i class="bi bi-heart fs-4 text-secondary me-2" onclick="toggleHeart(this)"></i>
                                <i class="bi bi-cart fs-4 text-secondary" onclick="addToCart(this)"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="images/Best1.png" class="card-img-top rounded-top" alt="Product 4">
                        <div class="card-body">
                            <h6 class="fw-semibold">Resveratrol-Lift Serum</h6>
                            <p class="fw-bold mb-2">₱2,499.00 <span
                                    class="text-decoration-line-through text-muted fw-normal">₱2,999.00</span></p>
                            <div>
                                <i class="bi bi-heart fs-4 text-secondary me-2" onclick="toggleHeart(this)"></i>
                                <i class="bi bi-cart fs-4 text-secondary" onclick="addToCart(this)"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="images/Best2.png" class="card-img-top rounded-top" alt="Product 5">
                        <div class="card-body">
                            <h6 class="fw-semibold">Hydra Glow Moisturizer</h6>
                            <p class="fw-bold mb-2">₱1,850.00 <span
                                    class="text-decoration-line-through text-muted fw-normal">₱2,200.00</span></p>
                            <div>
                                <i class="bi bi-heart fs-4 text-secondary me-2" onclick="toggleHeart(this)"></i>
                                <i class="bi bi-cart fs-4 text-secondary" onclick="addToCart(this)"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="images/Best3.png" class="card-img-top rounded-top" alt="Product 6">
                        <div class="card-body">
                            <h6 class="fw-semibold">Glow Boost Vitamin C Toner</h6>
                            <p class="fw-bold mb-2">₱1,450.00 <span
                                    class="text-decoration-line-through text-muted fw-normal">₱1,700.00</span></p>
                            <div>
                                <i class="bi bi-heart fs-4 text-secondary me-2" onclick="toggleHeart(this)"></i>
                                <i class="bi bi-cart fs-4 text-secondary" onclick="addToCart(this)"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 1 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="images/Best1.png" class="card-img-top rounded-top" alt="Product 1">
                        <div class="card-body">
                            <h6 class="fw-semibold">Soft Pinch Dewy Liquid Blush Mini</h6>
                            <p class="fw-bold mb-2">₱1,200.00 <span
                                    class="text-decoration-line-through text-muted fw-normal">₱1,500.00</span></p>
                            <div>
                                <i class="bi bi-heart fs-4 text-secondary me-2" onclick="toggleHeart(this)"></i>
                                <i class="bi bi-cart fs-4 text-secondary" onclick="addToCart(this)"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="images/Best2.png" class="card-img-top rounded-top" alt="Product 2">
                        <div class="card-body">
                            <h6 class="fw-semibold">Vinopure Purifying Gel Cleanser</h6>
                            <p class="fw-bold mb-2">₱1,600.00 <span
                                    class="text-decoration-line-through text-muted fw-normal">₱1,700.00</span></p>
                            <div>
                                <i class="bi bi-heart fs-4 text-secondary me-2" onclick="toggleHeart(this)"></i>
                                <i class="bi bi-cart fs-4 text-secondary" onclick="addToCart(this)"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-4 col-sm-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="images/Best3.png" class="card-img-top rounded-top" alt="Product 3">
                        <div class="card-body">
                            <h6 class="fw-semibold">Vanish Seamless Finish Foundation Brush</h6>
                            <p class="fw-bold mb-2">₱3,500.00 <span
                                    class="text-decoration-line-through text-muted fw-normal">₱4,500.00</span></p>
                            <div>
                                <i class="bi bi-heart fs-4 text-secondary me-2" onclick="toggleHeart(this)"></i>
                                <i class="bi bi-cart fs-4 text-secondary" onclick="addToCart(this)"></i>
                            </div>
                        </div>
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



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let cartCount = 0;

        function toggleHeart(element) {
            element.classList.toggle('bi-heart');
            element.classList.toggle('bi-heart-fill');
            element.classList.toggle('text-danger');
        }

        function addToCart(icon) {
            // If already added, remove it
            if (icon.classList.contains('bi-cart-fill')) {
                icon.classList.remove('bi-cart-fill', 'text-warning');
                icon.classList.add('bi-cart');
                cartCount--;
            } else {
                // If not added yet, add it
                icon.classList.remove('bi-cart');
                icon.classList.add('bi-cart-fill', 'text-warning');
                cartCount++;
            }

            // Update cart count display
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