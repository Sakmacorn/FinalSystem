<?php
include 'db/db_connect.php'; // database connection

if (isset($_POST['register'])) {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Check password match
    if ($password !== $confirm) {
        echo "<script>alert('Passwords do not match!'); window.history.back();</script>";
        exit;
    }

    // Check if email already exists
    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Email already registered!'); window.history.back();</script>";
        exit;
    }

    // Hash the password
    $hashed = password_hash($password, PASSWORD_DEFAULT);

    // Insert into database
    $query = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$hashed')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Registration successful! You can now log in.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Error saving data. Please try again.');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Princess Touch</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="csss/reg.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <section class="register-section">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="card register-card shadow-lg">
                        <div class="row g-0">

                            <!-- Left image -->
                            <div class="col-md-6 d-none d-md-block">
                                <img src="img/signup.jpg" alt="Sign Up" class="img-fluid rounded-start register-img">
                            </div>

                            <!-- Right form -->
                            <div class="col-md-6 d-flex align-items-center">
                                <div class="register-content w-100 text-center px-4">
                                    <h1 class="brand-title">PRINCESS TOUCH</h1>
                                    <h5 class="subtitle mb-3">Create Your Account</h5>
                                    <p class="intro-text">
                                        Join us to enjoy personalized skincare tips, track your orders, and get
                                        exclusive product offers.
                                    </p>

                                    <form action="reg.php" method="POST">
                                        <div class="form-area text-start">
                                            <div class="mb-3">
                                                <input type="text" name="fullname" class="form-control input-field"
                                                    placeholder="Full Name" required>
                                            </div>

                                            <div class="mb-3">
                                                <input type="email" name="email" class="form-control input-field"
                                                    placeholder="Email" required>
                                            </div>

                                            <div class="mb-2">
                                                <input type="password" name="password" id="password"
                                                    class="form-control input-field" placeholder="Password" required>
                                            </div>

                                            <div class="show-password mb-3">
                                                <input type="checkbox" onclick="togglePassword('password')"
                                                    id="showPass1">
                                                <label for="showPass1">Show Password</label>
                                            </div>

                                            <div class="mb-2">
                                                <input type="password" name="confirm_password" id="confirmPassword"
                                                    class="form-control input-field" placeholder="Confirm Password"
                                                    required>
                                            </div>

                                            <div class="show-password mb-4">
                                                <input type="checkbox" onclick="togglePassword('confirmPassword')"
                                                    id="showPass2">
                                                <label for="showPass2">Show Password</label>
                                            </div>

                                            <button type="submit" name="register"
                                                class="btn btn-register w-100 py-2">Create Account</button>
                                        </div>
                                    </form>


                                    <p class="mt-4 mb-1">
                                        Already have an account?
                                        <a href="login.php" class="login-link">Log in</a>
                                    </p>
                                    <a href="index.php" class="back-link">← Back to website</a>

                                    <div class="divider my-4">or</div>

                                    <div class="d-flex justify-content-center gap-3">
                                        <button class="btn btn-social"><i class="fab fa-google me-2"></i>
                                            Google</button>
                                        <button class="btn btn-social"><i class="fab fa-facebook-f me-2"></i>
                                            Facebook</button>
                                    </div>

                                    <div class="footer-links mt-4 d-flex justify-content-center gap-3">
                                        <a href="ToS.php">Terms of Service</a>
                                        <a href="policy.php">Privacy Policy</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
        function togglePassword(id) {
            const input = document.getElementById(id);
            input.type = input.type === "password" ? "text" : "password";
        }
    </script>
</body>

</html>