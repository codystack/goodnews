<!-- <meta http-equiv="refresh" content="120;url=access-code" /> -->

<?php
$page = "Access Code";

session_start();

if (!isset($_SESSION['code'])) {
    header('location: access-code');
}

// if ($_GET['status'] !== "success") {
//     header("location:javascript://history.go(-1)");
// }

include "./components/header.php";
require_once "./auth/access-code-query.php";
?>


    <div class="pt-5 pb-5">
        <div class="container">
            <?php include "./components/userinfo.php"; ?>
            <!-- Content -->

            <div class="row mt-0 mt-md-4">
                <?php include "./components/navbar.php"; ?>
                <div class="col-lg-9 col-md-8 col-12">

                    <!-- Card -->
                    <div class="card mb-4">
                        <div class=card-body>
                            <div class="mt-6 mb-6 text-center">
                                <img src="./assets/images/svg/check.svg" alt="payment successful" width="150px">
                                <h3 class="mt-3 mb-3">Access Code Generated</h3>
                                <div class="col-lg-6 mx-auto">
                                    <div class="mb-3 mt-3" id="clipboardCodeAlert"></div>
                                </div>
                                <div class="col-lg-6 mx-auto text-center">
                                    <textarea class="form-control" id="accessCode" rows="3" readonly>You're invited to visit Goodnews Estate by <?php echo $firstName; ?>, This CODE give you access within the next 24hrs, Pass Code: <?php echo $_SESSION['code']; ?></textarea>
                                </div>
                                <p></p>
                                <button class="btn btn-primary mb-4" type="button" onClick="copyCodeToClipboard()" id="clipboardCodeBtn"><i class="fe fe-copy"></i> Copy Access Code</button><br>
                                <a href="access-code" class="text-primary mt-4"><i class="bi bi-arrow-left-circle-fill"></i> Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->


<?php include "./components/footer.php"; ?>