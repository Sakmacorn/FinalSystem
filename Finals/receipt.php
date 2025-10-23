<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Checkout - Princess Touch</title>

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Aboreto" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container checkout-container my-5 p-4 rounded position-relative">
        <div class="text-center py-3 position-relative" style="background-color: #fff0f4;">
            <a href="checkout.php" class="back-btn">← BACK</a>
            <h2 class="checkout-title">PRODUCT RECEIPTS</h2>
        </div>

        <form action="" method="POST">
            <div class="d-flex flex-column align-items-center text-center">
                <div class="mb-3">
                    <label class="form-label fw-bold" style="font-size: 25px">Customer Name:</label>
                    <p style="font-size: 25px">Miguel M. Lulu</p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold" style="font-size: 25px">Address:</label>
                    <p style="font-size: 25px">Don Cornelio Subdivision, Dau Mabalacat Pampanga</p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold" style="font-size: 25px">Contact Number:</label>
                    <p style="font-size: 25px">0946-133-1580</p>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold" style="font-size: 25px">Date:</label>
                    <p style="font-size: 25px">October 23, 2023</p>
                </div>
            </div>


            <div class="container my-5">
                <div class="row justify-content-center align-items-start">

                    <div class="col-md-5">
                        <div class="mb-4">
                            <label class="form-label fw-bold" style="font-size: 25px">Payment:</label>
                            <p style="font-size: 25px">Cash on Delivery</p>

                            <label class="form-label fw-bold" style="font-size: 25px">Date of Purchase:</label>
                            <p style="font-size: 25px">July 23, 2023</p>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold" style="font-size: 25px">Name:</label>
                            <p style="font-size: 25px">Miguel M. Lulu</p>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold" style="font-size: 25px">Total Payment:</label>
                            <p style="font-size: 25px">₱7,499.00</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="product-item d-flex align-items-center p-3 mb-3 rounded"
                            style="background-color: #f4b7c4;">
                            <img src="images/best1.png" alt="Perfume" class="me-3 rounded" width="60" height="60">
                            <div>
                                <h3 class="mb-2">Cheirosa 62 Perfume Mist</h3>
                                <p class="mb-0" style="font-size: 20px;">₱2,750.00 &nbsp;&nbsp;&nbsp; Quantity: 1</p>
                            </div>
                        </div>

                        <div class="product-item d-flex align-items-center p-3 mb-3 rounded"
                            style="background-color: #f4b7c4;">
                            <img src="images/best2.png" alt="Blush" class="me-3 rounded" width="60" height="60">
                            <div>
                                <h3 class="mb-2">Soft Pinch Dewy Liquid Blush Mini</h3>
                                <p class="mb-0" style="font-size: 20px;">₱1,200.00 &nbsp;&nbsp;&nbsp; Quantity: 1</p>
                            </div>
                        </div>

                        <div class="product-item d-flex align-items-center p-3 mb-3 rounded"
                            style="background-color: #f4b7c4;">
                            <img src="images/best3.png" alt="Essence" class="me-3 rounded" width="60" height="60">
                            <div>
                                <h3 class="mb-2">Mid-Day Miracle Essence</h3>
                                <p class="mb-0" style="font-size: 20px;">₱3,499.00 &nbsp;&nbsp;&nbsp; Quantity: 1</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </form>

        <a href="index.php" class="back-home-btn">← Back to Home</a>

    </div>

    <script src="js/bootstrap.js"></script>
</body>

</html>