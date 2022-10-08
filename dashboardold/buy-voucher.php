<?php
$page = "Vouchers";
include "./components/header.php";
require_once "./auth/voucher-query.php";
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
						<!-- Card body -->
						<div class="p-4 d-flex justify-content-between align-items-center">
							<div>
								<h3 class="mb-0">Purchase Voucher</h3>
								<span>Buy vouchers to and resell to your customers with ease.</span>
							</div>
                            <div class="nav btn-group flex-nowrap">
                                <button onclick="goBack()" class="btn btn-outline-primary btn-sm"><i class="bi bi-arrow-left"></i> Go Back</button>
                            </div>
						</div>
					</div>
					<!-- Tab content -->
					<div class="tab-content">
						<div class="tab-pane fade show active pb-4" id="tabPaneGrid" role="tabpanel" aria-labelledby="tabPaneGrid">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card mb-4">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="./assets/images/png/card1.png" class="rounded-circle avatar-xl mb-3" alt="voucher">
                                                <h4 class="mb-1">₦200 Voucher</h4>
                                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-6" style="display: none">
                                                            <div class="form-group">
                                                                <label class="form-control-label">User ID</label>
                                                                <input class="form-control" type="text" name="userID" value="<?php echo $_SESSION['id'] ?>" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6" style="display: none">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Amount</label>
                                                                <input class="form-control" type="text" name="amount" value="200" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <button type=submit name="voucher_200_btn" class="btn btn-sm btn-outline-primary"> Buy Voucher </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card mb-4">
                                        <!-- Card body -->
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="./assets/images/png/card2.png" class="rounded-circle avatar-xl mb-3" alt="voucher">
                                                <h4 class="mb-1">₦500 Voucher</h4>
                                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-6" style="display: none">
                                                            <div class="form-group">
                                                                <label class="form-control-label">User ID</label>
                                                                <input class="form-control" type="text" name="userID" value="<?php echo $_SESSION['id'] ?>" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6" style="display: none">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Amount</label>
                                                                <input class="form-control" type="text" name="amount" value="500" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <button type=submit name="voucher_500_btn" class="btn btn-sm btn-outline-primary"> Buy Voucher </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card mb-4">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="./assets/images/png/card3.png" class="rounded-circle avatar-xl mb-3" alt="voucher">
                                                <h4 class="mb-1">₦1,000 Voucher</h4>
                                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-6" style="display: none">
                                                            <div class="form-group">
                                                                <label class="form-control-label">User ID</label>
                                                                <input class="form-control" type="text" name="userID" value="<?php echo $_SESSION['id'] ?>" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6" style="display: none">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Amount</label>
                                                                <input class="form-control" type="text" name="amount" value="1000" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <button type=submit name="voucher_1000_btn" class="btn btn-sm btn-outline-primary"> Buy Voucher </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card mb-4">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="./assets/images/png/card4.png" class="rounded-circle avatar-xl mb-3" alt="voucher">
                                                <h4 class="mb-1">₦2,000 Voucher</h4>
                                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-6" style="display: none">
                                                            <div class="form-group">
                                                                <label class="form-control-label">User ID</label>
                                                                <input class="form-control" type="text" name="userID" value="<?php echo $_SESSION['id'] ?>" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6" style="display: none">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Amount</label>
                                                                <input class="form-control" type="text" name="amount" value="2000" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <button type=submit name="voucher_2000_btn" class="btn btn-sm btn-outline-primary"> Buy Voucher </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card mb-4">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="./assets/images/png/card5.png" class="rounded-circle avatar-xl mb-3" alt="voucher">
                                                <h4 class="mb-1">₦5,000 Voucher</h4>
                                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-6" style="display: none">
                                                            <div class="form-group">
                                                                <label class="form-control-label">User ID</label>
                                                                <input class="form-control" type="text" name="userID" value="<?php echo $_SESSION['id'] ?>" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6" style="display: none">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Amount</label>
                                                                <input class="form-control" type="text" name="amount" value="5000" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <button type=submit name="voucher_5000_btn" class="btn btn-sm btn-outline-primary"> Buy Voucher </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <!-- Card -->
                                    <div class="card mb-4">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="./assets/images/png/card6.png" class="rounded-circle avatar-xl mb-3" alt="voucher">
                                                <h4 class="mb-1">Custom Amount</h4>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#rechargeModal" class="btn btn-sm btn-outline-primary mt-3">Buy Voucher</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>

            </div>
        </div>
    </div>
    <!-- Footer -->


<?php include "./components/footer.php"; ?>