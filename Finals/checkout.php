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
            <a href="index.php" class="back-btn">← BACK</a>
            <h2 class="checkout-title">PRODUCT CHECKOUT</h2>
        </div>

        <form action="" method="POST">
            <div class="mb-3 position-relative">
                <label class="form-label fw-bold" style="font-size: 25px">ADDRESS:</label>
                <input type="text" name="address" style="font-size: 25px" class="form-control"
                    value="4697 Chicago Street Don Cornelio Subdivision" required />
                <span class="default" style="font-size: 25px">DEFAULT</span>
            </div>

            <div class="mb-3 position-relative">
                <label class="form-label fw-bold" style="font-size: 25px">CONTACT NUMBER:</label>
                <input type="text" name="contact" style="font-size: 25px" class="form-control" value="0946-133-1580"
                    required />
                <span class="default" style="font-size: 20px">DEFAULT</span>
            </div>

            <div class="product-item d-flex align-items-center p-3 mb-3 rounded">
                <img src="images/best1.png" alt="" class="me-3 rounded" width="60" height="60" />
                <div>
                    <h3 class="mb-1">Cheirosa 62 Perfume Mist</h3>
                    <p class="mb-0" style="font-size: 25px">₱2,750.00 &nbsp;&nbsp;&nbsp; Quantity: 1</p>
                </div>
            </div>

            <div class="product-item d-flex align-items-center p-3 mb-3 rounded">
                <img src="images/best2.png" alt="" class="me-3 rounded" width="60" height="60" />
                <div>
                    <h3 class="mb-1">Soft Pinch Dewy Liquid Blush Mini</h3>
                    <p class="mb-0" style="font-size: 25px">₱1,200.00 &nbsp;&nbsp;&nbsp; Quantity: 1</p>
                </div>
            </div>

            <div class="product-item d-flex align-items-center p-3 mb-4 rounded">
                <img src="images/best3.png" alt="" class="me-3 rounded" width="60" height="60" />
                <div>
                    <h3 class="mb-1">Mid-Day Miracle Essence</h3>
                    <p class="mb-0" style="font-size: 25px">₱3,499.00 &nbsp;&nbsp;&nbsp; Quantity: 1</p>
                </div>
            </div>

            <div class="payment-box border rounded p-3 mb-4">
                <label class="fw-bold mb-2" style="font-size: 25px">Type of Payment</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="Cash on Delivery" id="cod"
                        required />
                    <label class="form-check-label" style="font-size: 25px" for="cod">Cash on Delivery</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="Bank Transfer" id="bank" />
                    <label class="form-check-label" style="font-size: 25px" for="bank">Bank Transfer</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" value="GCash" id="gcash" />
                    <label class="form-check-label" style="font-size: 25px" for="gcash">GCash</label>
                </div>

                <div id="bank-info" class="mt-3 d-none">
                    <strong style="font-size: 25px">Bank Details:</strong>
                    <label for="bankname" class="form-label mt-2" style="font-size: 25px" required>Bank Name:</label>
                    <input type="text" name="bankname" id="bankname" style="font-size: 25px" class="form-control"
                        value="BDO" />
                    <label for="banknumber" class="form-label mt-2" style="font-size: 25px" required>Bank Account
                        Number:</label>
                    <input type="text" name="banknumber" id="banknumber" style="font-size: 25px" class="form-control"
                        value="09-75-655" />
                </div>

                <div id="gcash-info" class="mt-3 d-none">
                    <strong style="font-size: 25px">GCash Details:</strong>
                    <label for="gcashname" class="form-label mt-2" style="font-size: 25px" required>Account
                        Name:</label>
                    <input type="text" name="gcashname" id="gcashname" style="font-size: 25px" class="form-control"
                        value="Princess Touch" />
                    <label for="gcashnumber" class="form-label mt-2" style="font-size: 25px" required>GCash
                        Number:</label>
                    <input type="text" name="gcashnumber" id="gcashnumber" style="font-size: 25px" class="form-control"
                        value="0946-133-1580" />
                </div>
            </div>

            <div class="total-box text-center mb-4">
                <p class="mb-1 fw-semibold" style="font-size: 25px">Total of Payment:</p>
                <h2>₱7,499.00</h2>
            </div>

            <div class="text-center">
                <a href="receipt.php" type="submit" class="btn checkout-btn px-4 py-2">Checkout</a>
            </div>
        </form>

        <h4 class="footer-text text-center mt-5">PRINCESS TOUCH</h4>
    </div>

    <script src="js/bootstrap.js"></script>

    <script>
        const paymentRadios = document.querySelectorAll('input[name="payment"]');
        const bankInfo = document.getElementById('bank-info');
        const gcashInfo = document.getElementById('gcash-info');

        paymentRadios.forEach((radio) => {
            radio.addEventListener('change', () => {
                if (radio.value === 'Bank Transfer') {
                    bankInfo.classList.remove('d-none');
                    gcashInfo.classList.add('d-none');
                } else if (radio.value === 'GCash') {
                    gcashInfo.classList.remove('d-none');
                    bankInfo.classList.add('d-none');
                } else {
                    bankInfo.classList.add('d-none');
                    gcashInfo.classList.add('d-none');
                }
            });
        });
    </script>
</body>

</html>