<?php
    require_once "./auth/account.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThankGod Okoro"/>
    <link rel="shortcut icon" href="assets/images/gefavicon.png" type="image/x-icon">

    <link href="assets/fonts/feather/feather.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Login | Goodnews Community Estate&trade;</title>
</head>

<body style="background: url('assets/images/dashbg.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">


    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0 min-vh-100">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow ">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4 text-center">
                            <a href="../">
                                <img src="assets/images/gelogodark.png" class="mb-4" alt="" width="250">
                            </a>
                            <h2 class="mb-1 fw-bold">Welcome back!</h2>
                            <span>Sign in using correct credentials.</span>
                        </div>
                        <?php
                        if (isset($_SESSION['error_message'])) {
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <div class="alert-message text-center">
                                    <?php
                                    echo $_SESSION['error_message'];
                                    session_destroy();
                                    ?>
                                </div>
                            </div>
                            <?php
                            unset($_SESSION['error_message']);
                        }
                        ?>
                        <?php
                        if (isset($_SESSION['success_message'])) {
                            ?>
                            <div class="alert alert-success" role="alert">
                                <div class="alert-message text-center">
                                    <?php echo $_SESSION['success_message']; ?>
                                </div>
                            </div>
                            <?php
                            unset($_SESSION['success_message']);
                        }
                        ?>
                        <!-- Form -->
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                            <div class="form-floating mb-4">
                                <input type="email" id="email" class="form-control" name="email" placeholder="example@gmail.com" required>
                                <label for="email" class="form-label">Email</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required>
                                <label for="password" class="form-label">Password</label>
                            </div>
                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberme">
                                    <label class="form-check-label " for="rememberme">Remember me</label>
                                </div>
                                <div>
                                    <a href="password-reset">Forgot your password?</a>
                                </div>
                            </div>
                            <div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-dark" name="login_btn">Sign in</button>
                                </div>
                            </div>
                            <div class="text-center mt-3">Don't have an account yet? <a href="register">Sign up</a></div>
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