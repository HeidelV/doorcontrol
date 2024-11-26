<?php
require_once 'php/init.php'; 

$con = new config();
$con->con();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Door Control</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/index.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Julius+Sans+One&family=Kanit:wght@300&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
  </head>
  <body>
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
              <a class="nav-link d-none d-sm-block" href="index.php"><i class="fa-solid fa-book"></i></a>
              <a class="nav-link active d-block d-sm-none" href="index.php">Log History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active d-none d-sm-block" href="settings.php"><i class="fa-solid fa-gear"></i></a>
              <a class="nav-link d-block d-sm-none" href="settings.php">Settings</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="main-content">
      <h1 class="log-history-title">LOG HISTORY</h1>
      <div class="container mt-4">
        <table class="table table-striped table-hover">
          <thead class="table-dark">
              <tr>
                  <th>ID</th>
                  <th>Timestamp</th>
                  <th>Action</th>
                  <th>Method</th>
                  <th>Door State</th>
                  <th>Profile</th>
              </tr>
          </thead>
          <tbody>
              <?php
              // Create an instance of viewLog and call the function
              $viewLog = new viewLog();
              $viewLog->viewLog();
              ?>
          </tbody>
      </table>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div>
        &copy; <span id="currentYear"></span> DoorControl. All rights reserved.
      </div>
    </footer>

    <!-- Bootstrap JavaScript Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2dcd6873f0.js" crossorigin="anonymous"></script>
    <script>
      document.getElementById("currentYear").textContent = new Date().getFullYear();
    </script>
  </body>
</html>
