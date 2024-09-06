<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top"> <!-- Added fixed-top for fixed positioning -->
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">GROUP5</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <form class="d-flex ms-auto">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal">
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
    /* Navbar Styling */
    .navbar {
        background-color: #212529; /* Same dark background as admin content */
        border-bottom: 4px solid #28a745; /* Consistent green border */
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.5); /* Stronger shadow for depth */
        z-index: 1000; /* Ensure navbar stays on top */
    }

    .navbar-brand {
        font-size: 1.8rem;
        font-weight: 600;
        color: #28a745; /* Green color to match the sidebar */
        letter-spacing: 1px; /* Slightly spaced for a modern look */
        text-transform: uppercase; /* Consistent with admin panel */
    }

    .navbar-toggler-icon {
        filter: invert(1); /* Make the toggler icon white */
    }

    .navbar-collapse {
        justify-content: flex-end;
    }

    /* Button Styling */
    .btn-danger {
        font-weight: 600;
        padding: 10px 20px;
        border-radius: 5px;
        background-color: #dc3545;
        transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c82333;
        box-shadow: 0px 0px 10px rgba(220, 53, 69, 0.7); /* Subtle glow effect on hover */
    }

    /* Alert Styling */
    .alert-danger {
        margin-top: 60px; /* Ensure spacing below the navbar */
        padding: 15px;
        background-color: #dc3545;
        color: #ffffff;
        border-radius: 8px;
        text-align: center;
        font-weight: 600;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    }

    /* Responsive Adjustments */
    @media (max-width: 576px) {
        .navbar-brand {
            font-size: 1.5rem;
        }

        .btn-danger {
            padding: 8px 15px;
        }
    }
</style>
