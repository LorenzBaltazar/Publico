<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Publico - Register</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style2.css">
</head>
<body>

  <div class="container">
    <h1 class="title">Publico</h1>
    <p class="tagline">Create Your Account to Reserve Facilities</p>

    <div class="icons">
      <i class="fas fa-user-plus"></i>
      <i class="fas fa-building"></i>
      <i class="fas fa-calendar-check"></i>
    </div>

 <div class="register-box">
  <h2 id="formTitle"><i class="fas fa-user-plus"></i> Register</h2>
  <form class="form-grid" id="registerForm">
    <!-- Full Name -->
    <input type="text" name="fullname" placeholder="Full Name" required pattern="^[A-Za-z\s]{3,50}$" title="Full name must be 3–50 letters only">

    <!-- Email -->
    <input type="email" name="email" placeholder="Email Address" required>

    <!-- Username -->
    <input type="text" name="username" placeholder="Username" required minlength="4" maxlength="20" pattern="^[A-Za-z0-9_]+$" title="Username must be 4–20 characters (letters, numbers, underscore only)">

    <!-- Password -->
    <input type="password" id="password" name="password" placeholder="Password" required minlength="6" title="Password must be at least 6 characters">

    <!-- Confirm Password -->
    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required minlength="6">

    <!-- Contact Number -->
    <input type="tel" name="contact" placeholder="Contact Number (e.g. 09123456789)" required pattern="^09\d{9}$" title="Enter a valid PH number starting with 09">

    <!-- Barangay Dropdown -->
    <select name="barangay" required>
      <option value="">-- Select Your Barangay --</option>
      <option value="Apollo">Bagong Paraiso</option>
      <option value="Balut">Balut</option>
      <option value="Bayan">Bayan</option>
      <option value="Calero">Calero</option>
      <option value="Dona">Dona</option>
      <option value="Kaparangan">Kaparangan</option>
      <option value="Masantol">Masantol</option>
      <option value="Mulawin">Mulawin</option>
      <option value="Pag-asa">Pag-asa</option>
      <option value="Palihan">Palihan</option>
      <option value="Sibul">Sibul</option>
      <option value="Silahis">Silahis</option>
      <option value="Tala">Tala</option>
      <option value="Talimundoc">Talimundoc</option>
      <option value="Tapulao">Tapulao</option>
      <option value="Tenejero">Tenejero</option>
      <option value="Tugatog">Tugatog</option>
      <option value="Wawa">Wawa</option>
    </select>

    <!-- Full-width button -->
    <div class="full-width">
      <button type="submit">Register</button>
    </div>
  </form>

  <div class="register-link">
    <p>Already have an account? <a href="login.php">Login here</a></p>
  </div>
</div>

</body>
<script>
  const form = document.getElementById('registerForm');
  const password = document.getElementById('password');
  const confirmPassword = document.getElementById('confirm_password');

  function validatePasswordMatch() {
    if (password.value !== confirmPassword.value) {
      confirmPassword.setCustomValidity("Passwords do not match"); // 🔴 Show popup tooltip
    } else {
      confirmPassword.setCustomValidity(""); // ✅ Clear error
    }
  }

  // Check when typing or submitting
  password.addEventListener("input", validatePasswordMatch);
  confirmPassword.addEventListener("input", validatePasswordMatch);

  form.addEventListener("submit", validatePasswordMatch);
</script>

</html>