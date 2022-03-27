<?php


include("auth.php"); //include auth.php file on all secure pages
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>user_profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Dark-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark navigation-clean">
        <div class="container"><a class="navbar-brand" href="#">Welcome <?php echo $_SESSION['username']; ?></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Hospital Services</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">I.C.U.</a><a class="dropdown-item" href="#">Ventilation</a><a class="dropdown-item" href="#">Covid Ward</a><a class="dropdown-item" href="#">Burn Ward</a><a class="dropdown-item" href="#">Covid Vaccination</a><a class="dropdown-item" href="#">C.T. Scan</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">District</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Kolkata</a><a class="dropdown-item" href="#">Howrah</a><a class="dropdown-item" href="#">Hooghly</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Profile</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">View Profile</a>
                        <a class="dropdown-item" href="#">Edit Profile</a>
                        <a class="dropdown-item" href="logout.php">Logout</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
