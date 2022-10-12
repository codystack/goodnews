<div class="col-lg-3 col-md-4 col-12">
    <!-- User profile -->
    <nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
        <!-- Menu -->
        <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="dashboard-instructor.html#">Menu</a>
        <!-- Button -->
        <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
                data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="fe fe-menu"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav">
            <div class="navbar-nav flex-column">
                <span class="navbar-header">Dashboard</span>
                <ul class="list-unstyled ms-n2 mb-4">

                    <li class="nav-item <?php if($page=='Overview'){echo 'active';}?>">
                        <a class="nav-link" href="overview"><i class="bi bi-ui-checks-grid nav-icon"></i> My Dashboard</a>
                    </li>

                    <li class="nav-item <?php if($page=='Access Code'){echo 'active';}?>">
                        <a class="nav-link" href="access-code"><i class="bi bi-upc-scan nav-icon"></i> Access Code</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#referralModal" href=""><i class="bi bi-key nav-icon"></i> Access Key</a>
                    </li>

                    <li class="nav-item <?php if($page=='Fund Wallet'){echo 'active';}?>">
                        <a class="nav-link" href="wallet"><i class="bi bi-wallet nav-icon"></i> Wallet</a>
                    </li>
                    
                    <li class="nav-item <?php if($page=='Transactions'){echo 'active';}?>">
                        <a class="nav-link" href="transactions"><i class="bi bi-arrow-down-up nav-icon"></i> Transactions</a>
                    </li>
                    
                    <li class="nav-item <?php if($page=='Support'){echo 'active';}?>">
                        <a class="nav-link" href="support"><i class="bi bi-chat-right-text nav-icon"></i>Support</a>
                    </li>
                </ul>
                <!-- Navbar header -->
                <span class="navbar-header">Account Settings</span>
                <ul class="list-unstyled ms-n2 mb-0">
                    
                    <li class="nav-item <?php if($page=='Profile'){echo 'active';}?>">
                        <a class="nav-link" href="profile"><i class="bi bi-person nav-icon"></i>Profile</a>
                    </li>
                    <li class="nav-item <?php if($page=='Security'){echo 'active';}?>">
                        <a class="nav-link" href="security"><i class="bi bi-lock nav-icon"></i>Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout"><i class="bi bi-power nav-icon"></i>Sign Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>