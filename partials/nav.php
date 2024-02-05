<?php
session_start();
require '../server/dbConnection.php';
require '../server/function.php';

// Check if the session data is available
if (isset($_SESSION['User_ID'])) {
    $serial_id = $_SESSION['User_ID'];
} else {
    // Handle the case when the session data is not available
    // Redirect the user to the login page or perform any other action
    header("Location: ../index.php");
    exit;
}

// Call the functions to fetch user data
$userFullName = get_user_FullName($serial_id, $connection);
$userID = get_user_userID($serial_id, $connection);
$userPrivilege = get_user_privilege($serial_id, $connection);
?>

<nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">
            <a class="nav-link dropdown-toggle nav-profile d-flex align-items-center pe-0" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="../images/john.jpg" alt="Profile" class="rounded-circle">
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <h6 style="text-transform: capitalize"><?php echo $userFullName; ?></h6>
                    <span>Web Designer</span>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="user_profile.view.php">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="user_profile.view.php">
                        <i class="bi bi-gear"></i>
                        <span>Account Settings</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <a class="dropdown-item d-flex align-items-center" href="faq.view.php">
                        <i class="bi bi-question-circle"></i>
                        <span>Need Help?</span>
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    <div class="dropdown-item d-flex align-items-center" id="logout">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                    </div>
                </li>

            </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

    </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->