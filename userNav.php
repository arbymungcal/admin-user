<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">GROUP5</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#userNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
      <form class="d-flex">
        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#userModal">
          LOGOUT
        </button>
      </form>
    </div>
  </div>
</nav>

<?php
    if(isset($_SESSION['error'])){
        echo '<div class="alert alert-danger mt-3">'.$_SESSION['error'].'</div>';
        unset($_SESSION['error']);
    }
?>

<style>
    .navbar {
        background-color: #1b1b1d; /* Dark background to match admin navbar */
        border-bottom: 4px solid #00bfa5; /* Green border to match admin design */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3); /* Consistent shadow with admin navbar */
    }

    .navbar-brand {
        font-size: 1.5rem; /* Consistent font size with admin navbar */
        font-weight: 600;
        color: #00bfa5; /* Green color to match admin navbar */
        text-shadow: 0 0 5px rgba(0, 255, 255, 0.5); /* Subtle text shadow */
    }

    .nav-link {
        font-size: 1.2rem; /* Font size consistent with admin design */
        color: #f8f9fa; /* Light text color */
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: #00bfa5; /* Green color on hover to match admin design */
    }

    .btn-outline-light {
        color: #ffffff;
        border-color: #ffffff;
    }

    .btn-outline-light:hover {
        background-color: #00bfa5;
        border-color: #00bfa5;
        color: #ffffff;
    }

    .alert-danger {
        margin-top: 20px;
        padding: 10px;
        background-color: #dc3545; /* Red background for alert */
        color: #ffffff; /* White text color */
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3); /* Consistent shadow with admin alert */
    }
</style>
