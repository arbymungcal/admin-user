<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Centered and large modal -->
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header border-0 py-4" style="background-color: #23272b;">
        <h4 class="modal-title text-light" id="myModalLabel">Sign In to Your Account</h4>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body p-5" style="background-color: #343a40;">
        <form action="config/data.php" method="post">
          <!-- Email Field -->
          <div class="mb-4">
            <label for="email" class="form-label text-light">Email Address:</label>
            <input type="email" class="form-control bg-dark text-light shadow-none" id="email" placeholder="you@example.com" name="email" required>
          </div>

          <!-- Password Field -->
          <div class="mb-4">
            <label for="password" class="form-label text-light">Password:</label>
            <input type="password" class="form-control bg-dark text-light shadow-none" id="password" placeholder="Enter your password" name="password" required>
          </div>

          <!-- Remember Me & Forgot Password -->
          <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
              <label class="form-check-label text-light" for="rememberMe">Remember me</label>
            </div>
            <a href="#" class="text-light small">Forgot password?</a>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="btn btn-lg btn-success w-100 mb-3" style="font-size: 1.2rem;">Login</button>
        </form>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer border-0 p-4" style="background-color: #23272b;">
        <p class="text-light mb-0">Don't have an account? <a href="#" class="text-success">Create one</a></p>
        <button type="button" class="btn btn-outline-danger ms-auto px-4" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Enhanced Modal Styles -->
<style>
  .modal-dialog {
    max-width: 600px; /* Custom width for a professional look */
  }

  .modal-content {
    background-color: #343a40;
    border-radius: 12px;
    color: #fff;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.7);
    transition: all 0.4s ease-in-out;
  }

  .modal-content:hover {
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.9);
  }

  .modal-header {
    border-bottom: none;
    background-color: #23272b;
    padding: 1.5rem 2rem;
  }

  .modal-header h4 {
    font-weight: 700;
    font-size: 1.75rem;
    letter-spacing: 1px;
  }

  .btn-close-white {
    filter: invert(1);
    transition: transform 0.2s;
  }

  .btn-close-white:hover {
    transform: rotate(90deg); /* Rotates on hover for a stylish effect */
  }

  .modal-body {
    padding: 2rem;
  }

  .form-label {
    font-weight: bold;
    font-size: 1rem;
  }

  .form-control {
    background-color: #495057;
    border: 1px solid #6c757d;
    color: #fff;
    padding: 12px 15px;
    font-size: 1rem;
    border-radius: 8px;
    transition: background-color 0.3s ease, border-color 0.3s ease;
  }

  .form-control:focus {
    background-color: #495057;
    border-color: #28a745;
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
  }

  .form-check-input:checked {
    background-color: #28a745;
    border-color: #28a745;
  }

  .btn-success {
    background-color: #28a745;
    border: none;
    font-weight: 600;
    transition: background-color 0.3s ease, transform 0.3s ease;
  }

  .btn-success:hover {
    background-color: #218838;
    transform: scale(1.05);
  }

  .btn-outline-danger {
    border: 2px solid #dc3545;
    color: #dc3545;
    transition: background-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
  }

  .btn-outline-danger:hover {
    background-color: #dc3545;
    color: #fff;
    transform: scale(1.05);
  }

  .modal-footer {
    background-color: #23272b;
    padding: 1.5rem;
  }

  .modal-footer .text-light {
    font-size: 0.95rem;
    letter-spacing: 0.5px;
  }

  .modal-footer .text-light a {
    color: #28a745;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .modal-footer .text-light a:hover {
    color: #218838;
  }
</style>
