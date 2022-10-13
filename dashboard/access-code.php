<?php
$page = "Access Code";
include "./components/header.php";
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
								<!-- <span>Generate access code for easy access.</span> -->
							</div>
							<!-- Nav -->
                            <div class="nav btn-group flex-nowrap" role="tablist">
                                <a href="get-code" class="btn btn-outline-primary btn-sm"> Get Code</a>
                            </div>
						</div>
					</div>
					
                    <div class="card mb-4">
                        <div class="table-responsive table-body mb-4 mt-4">
                            <table class="table mb-0" id="allTransactions">
                                <!-- Table head -->
                                <thead class="table-light">
                                <tr>
                                    <th scope="col" class="border-0">S/N</th>
                                    <th scope="col" class="border-0">Code</th>
                                    <th scope="col" class="border-0">Date</th>
                                    <th scope="col" class="border-0">Status</th>
                                    <th scope="col" class="border-0 text-end">Actions</th>
                                </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody>
                                <?php
                                $access_id = 1;
                                $select_query = "SELECT * FROM accessCode WHERE userID='".$_SESSION['id']."' ORDER BY requestDate DESC";
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $code = $row['code'];
                                        $paymentMethod = $row['paymentMethod'];
                                        $requestDate = $row['requestDate'];
                                        $date = strtotime($requestDate);
                                        $status = $row['status'];
                                        switch ($status) {
                                            case 0;
                                                $class  = 'bg-warning';
                                                $text = 'text-warning';
                                                $statusMessage = 'Pending';
                                                break;
                                            case 1;
                                                $class  = 'bg-success';
                                                $text = 'text-success';
                                                $statusMessage = 'Access Granted';
                                                break;
                                            default:
                                                $class  = '';
                                        }

                                        echo "<tr>";
                                        echo "<td class=\"align-middle border-top-0\">" .$access_id. "</td>";
                                        echo "<td class=\"align-middle border-top-0\">" .$code. "</td>";
                                        echo "<td class=\"align-middle border-top-0\">" .date('j F Y', $date). "</td>";
                                        echo "<td class=\"align-middle border-top-0\">" ."<span class='badge badge-dot $class'></span><span class='$text text-capitalize'> $statusMessage </span>". "</td>";
                                        echo "<td class=\"text-muted align-middle text-end border-top-0\">"
                                            ."<a href=\"view-transaction?id=$id\" class='btn btn-dark btn-sm'><i class=\"fe fe-eye \"></i></a>".
                                        "</td>";
                                    "</tr>";
                                    $access_id++;
                                    }
                                }else {
                                    echo "<td><p>No Access Code Yet!</p></td>";
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
				</div>

            </div>
        </div>
    </div>
    <!-- Footer -->


<?php include "./components/footer.php"; ?>