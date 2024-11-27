<?php
require_once 'php/class/fingerprint.php'; 

$con = new config();
$con->con();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Door Control: Settings</title>

    <!-- Custom CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/settings.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Julius+Sans+One&family=Kanit:wght@300&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
  </head>
  <body style="display: flex; flex-direction: column; height: 100%; margin: 0;">
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #111;">
      <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="img/logo2.png" alt="Logo" width="70" height="70">
          <img src="img/DOORCONTROL.png" width="400" height="50" alt="Logo" class="brand-text">
        </a>

        <!-- Toggle button for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible nav links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <!-- Show icon on desktop/tablet (d-none d-sm-block) and text only on mobile (d-block d-sm-none) -->
              <a class="nav-link d-none d-sm-block" href="index.php"><i class="fa-solid fa-book"></i></a>
              <a class="nav-link d-block d-sm-none" href="index.php">Log History</a>
            </li>
            <li class="nav-item">
              <!-- Show icon on desktop/tablet (d-none d-sm-block) and text only on mobile (d-block d-sm-none) -->
              <a class="nav-link active d-none d-sm-block" href="settings.php"><i class="fa-solid fa-gear"></i></a>
              <a class="nav-link active d-block d-sm-none" href="settings.php">Settings</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content Section -->
    <div class="main-content container-fluid" style="flex: 1;">
      <h1 class="settings-title w-50 mx-auto">SETTINGS</h1>

      <!-- Card with list items -->
      <div class="card w-50 mx-auto" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6); margin-top: 20px;">
        <form action="php/class/fingerprint.php" method="POST ">
          <ul class="list-group list-group-flush">
            <li class="list-group-item password-con">
              <span class="settings-header">Fingerprint</span>
            </li>
            <li class="list-group-item password-con">
              <div class="password-box">
                <label for="input-pass">First Name:</label>
              </div>
              <input name="input-pass" type="password" placeholder="Input your first name">
            </li>
            <li class="list-group-item password-con">
              <div class="password-box">
                <label for="input-pass">Last Name:</label>
              </div>
              <input name="input-pass" type="password" placeholder="Input your last name">
            </li>
            <li class="list-group-item password-con">
              <div class="d-grid gap-2 w-100 finger-button-con">
                <button class="btn btn-primary finger-button" type="submit" name="fing_submit" value="add">
                  Request for a Fingerprint Enrollment
                </button>
              </div>
            </li>
            <li class="list-group-item password-con">
              <span class="settings-header">Password</span>
            </li>
            <li class="list-group-item password-con">
              <div class="password-box">
                <label for="input-pass">Current Password:</label>
              </div>
              <input name="input-pass" type="password" placeholder="Input current password">
            </li>
            <li class="list-group-item password-con">
                <div class="password-box">
                <label for="input-pass">New Password:</label>
              </div>
              <input name="new-pass" type="password" placeholder="Input new password">
            </li>
            <li class="list-group-item password-con">
              <div class="password-box">
                <label for="verify-pass">Verify New Password:</label>
              </div>
              <input name="verify-pass" type="password" placeholder="Verify new password">
            </li>
            <li class="list-group-item password-con">
              <div class="d-grid gap-2 w-100 finger-button-con">
                <button class="btn btn-primary finger-button" type="button">Submit</button>
              </div>
            </li>
          </ul>
        </form>
      </div>       
    </div>
    <!-- I love youuuu!! My beautiful, busy Berg <3<3<3xxx -->
    <!-- I love you too >:3 Daniel Russell Pogi ayeeee <3~~~~~ -->
     <!-- (⁠〃˘⁠3ﾟ⁠〃⁠).｡⁠*⁠♡ (⁠〃˘⁠3ﾟ⁠〃⁠).｡⁠*⁠♡ -->
    <!-- Footer -->
    <footer style="background-color: #111; color: #fff; padding: 20px; text-align: center;">
      <div>
        &copy; <span id="currentYear"></span> DoorControl. All rights reserved.
      </div>
    </footer>

    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2dcd6873f0.js" crossorigin="anonymous"></script>

    <!-- Set the current year -->
    <script>
      document.getElementById("currentYear").textContent = new Date().getFullYear();
    </script>
  </body>
</html>
