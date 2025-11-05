<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Princess Touch</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="csss/cart.css">

    <link href="https://fonts.googleapis.com/css?family=Aboreto" rel="stylesheet">
    <link rel="icon" href="images/trylogo.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light py-3 fade-scale">
        <div class="container">
            <a class="navbar-brand fw-bolder fs-2" href="index.php">PRINCESS TOUCH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6 gap-4">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="trending.php">Trending</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contact.php">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="About.php">About Us</a></li>
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6 gap-6 d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">
                            <img src="img/SEARCH.png" alt="" class="icon zoom-on-hover">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Cart.php">
                            <img src="img/CARTTTT.png" alt="" class="icon zoom-on-hover">
                        </a>

                    </li>
                    <li class="nav-item">
                <a class="nav-link" href="Fav.php">
               <img src="img/HEART.jpg" alt="Favorites" class="icon">
             </a>
                  </li>

                    <li class="nav-item">
                         <a class="nav-link" href="Profile.php">
                          <img src="img/pROFILE.png" alt="Profile" class="icon">
                        </a>
                   </li>

                </ul>
            </div>
        </div>
    </nav>

    <hr class="navbar-line">

   <div class="container mt-5">
  <div class="favorites-header d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold">MY SHOPPING CART</h2>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="removeAll">
      <label class="form-check-label" for="removeAll">
        REMOVE CHECKLIST
      </label>
    </div>
  </div>

  <div class="favorites-list" id="cartItems"></div>

  <div class="text-center mt-5">
    <button class="btn btn-dark px-4 py-2 rounded-pill">GO TO CHECKOUT</button>
  </div>
</div>

<script>
function loadCart() {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  const container = document.getElementById('cartItems');
  container.innerHTML = '';

  if (cart.length === 0) {
    container.innerHTML = '<p class="text-center">Your cart is empty.</p>';
    return;
  }

  cart.forEach((item, index) => {
    container.innerHTML += `
      <div class="favorite-item mb-3">
        <div class="d-flex align-items-center bg-pink-light p-3 rounded-4">
          <input type="checkbox" class="form-check-input me-3 item-check" data-index="${index}">
          <img src="${item.image}" alt="${item.name}" class="product-img me-3">
          <div class="product-info">
            <h5 class="mb-2">${item.name}</h5>
            <div class="d-flex gap-4">
              <span class="price">₱ ${item.price.toFixed(2)}</span>
              <span class="quantity">QUANTITY: ${item.quantity}</span>
            </div>
          </div>
        </div>
      </div>
    `;
  });
}

document.getElementById('removeAll').addEventListener('change', function() {
  if (this.checked) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const checks = document.querySelectorAll('.item-check');

    checks.forEach(check => {
      if (check.checked) {
        const index = parseInt(check.dataset.index);
        cart.splice(index, 1);
      }
    });

    localStorage.setItem('cart', JSON.stringify(cart));
    this.checked = false;
    loadCart();
    alert("Selected items removed!");
  }
});

loadCart();
</script>
