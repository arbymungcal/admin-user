<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered"> <!-- Centering the modal -->
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-light">Are you sure you want to logout?</h4>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <form action="../config/logout.php" method="post">
          <input type="submit" class="btn btn-outline-danger" value="LOGOUT">
        </form>
      </div>
    </div>
  </div>
</div>

<style>
  /* Modal General Styles */
  .modal-content {
    background-color: #1e2023; /* Same dark background as main content */
    border-radius: 12px; /* Smooth, modern rounded corners */
    color: #ffffff;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5); /* Similar shadow effect */
    border: 2px solid #00bfa5; /* Consistent with sidebar/main content */
    animation: fadeIn 0.5s ease; /* Add a fade-in effect for smooth transition */
  }

  /* Modal Header and Footer */
  .modal-header, .modal-footer {
    border: none; /* Remove default bootstrap borders */
  }

  .btn-close-white {
    filter: invert(1); /* Ensure close button is visible */
  }

  /* Button Styling */
  .btn-outline-danger {
    color: #dc3545;
    border-color: #dc3545;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
  }

  .btn-outline-danger:hover {
    background-color: #dc3545;
    color: #ffffff;
    box-shadow: 0 0 10px #dc3545;
  }

  .btn-danger {
    background-color: #dc3545;
    border: none;
    font-weight: 600;
    padding: 10px 20px;
    border-radius: 5px;
  }

  .btn-danger:hover {
    background-color: #c82333;
  }

  /* Modal Animation */
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: scale(0.9);
    }
    to {
      opacity: 1;
      transform: scale(1);
    }
  }
</style>
