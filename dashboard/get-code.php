<?php
$page = "Access Code";
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
						<!-- Card body -->
						<div class="p-4 d-flex justify-content-between align-items-center">
							<div>
								<h3 class="mb-0">Access Code</h3>
								<span>Generate access code for visitors.</span>
							</div>
							<!-- Nav -->
                            <div class="nav btn-group flex-nowrap" role="tablist">
                                <button onclick="goBack()" class="btn btn-outline-primary btn-sm"><i class="bi bi-arrow-left"></i> Go Back</button>
                            </div>
						</div>
					</div>
					<!-- Tab content -->
					<div class="tab-content">
						<div class="tab-pane fade show active pb-4" id="tabPaneGrid" role="tabpanel" aria-labelledby="tabPaneGrid">
                            <div class="card">
                                <div class="card-body mt-5 mb-5 mx-auto">
                                    <div class="col-lg-12 col-md-8 col-12">
                                        <div class="mb-5 text-center">
                                            <h2 class="mb-0">Generate Access Code</h2>
                                            <p>Give visitors hazzle free access.</p>
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
                                        <div class="col-md-6 mx-auto">
                                            <form class="row" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                                                <div class="mb-3 col-12 col" style="display: none;">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="inputstaffID">User ID</label>
                                                        <input type="text" name="userID" class="form-control" value="<?php echo $_SESSION['id']; ?>" readonly />
                                                    </div>
                                                </div>

                                                <div class="mb-3 col-12 col">
                                                    <label class="form-label" for="visitorsName">Visitor's Name</label>
                                                    <input type="text" name="visitorsName" class="form-control" required placeholder="Visitor's First Name & Last Name" />
                                                </div>

                                                <div class="mb-3 col-12 col">
                                                    <label class="form-label" for="visitDate">Visit Date</label>
                                                    <input type="date" name="visitDate" required class="form-control" />
                                                </div>

                                                <div class="mb-3 col-12 col">
                                                    <label class="form-label" for="visitTime">Visit Time</label>
                                                    <input type="time" name="visitTime" required class="form-control" />
                                                </div>

                                                <div class="col-12 text-center mt-2 mb-1 d-grid">
                                                    <button class="btn btn-primary" type="submit" name="access_code_btn">
                                                        Generate Access Code
                                                    </button>
                                                </div>
                                            </form>
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