<?php
require_once "./auth/account.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Growing Digital Income Store Agency | helping you save your passive income" />
    <meta name="description" content="Growing Digital Income Store Agency, Let's help you grow your income " /> 
    <meta name="author" content="ThankGod Okoro"/>
    <link rel="shortcut icon" href="assets/images/gefavicon.png" type="image/x-icon">

    <link href="assets/fonts/feather/feather.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Password Reset | Goodnews Community Estate&trade;</title>
</head>

<body style="background: url('assets/images/dashbg.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">

    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <div class="card shadow">
                    <div class="card-body p-6">
                        <div class="mb-4 text-center">
                            <a href="../">
                                <img src="assets/images/gelogodark.png" class="mb-4" alt="" width="250" />
                            </a>
                            <h1 class="mb-1 fw-bold">Forgot Password</h1>
                            <p>Fill the form to reset your password.</p>
                        </div>
                        <form>
                            <div class="form-floating mb-4">
                                <input type="email" id="email" class="form-control" name="email" placeholder="example@gmail.com" required />
                                <label for="email" class="form-label">Email</label>
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-dark">
                                    Send Reset Link
                                </button>
                            </div>
                            <div class="text-center">Go back to <a href="./">Sign in</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/theme.min.js"></script>
</body>

</html>