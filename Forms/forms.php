<?php
class forms {
    //  SIGN UP FORM
    public function signup() {
?>
<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
  <div class="card shadow-lg p-4 rounded-4" style="width: 420px;">
    <h3 class="text-center mb-4 text-primary fw-bold">Create an Account</h3>
    <form>
      
        <div class="mb-3">
        <label for="signupName" class="form-label">Full Name</label>
        <div class="input-group">
          <span class="input-group-text bg-primary text-white"><i class="bi bi-person-fill"></i></span>
          <input type="text" class="form-control rounded-end" id="signupName" placeholder="Enter your name" required>
        </div>
      </div>

      
      <div class="mb-3">
        <label for="signupEmail" class="form-label">Email Address</label>
        <div class="input-group">
          <span class="input-group-text bg-primary text-white"><i class="bi bi-envelope-fill"></i></span>
          <input type="email" class="form-control rounded-end" id="signupEmail" placeholder="your@email.com" required>
        </div>
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="signupPassword" class="form-label">Password</label>
        <div class="input-group">
          <span class="input-group-text bg-primary text-white"><i class="bi bi-lock-fill"></i></span>
          <input type="password" class="form-control rounded-end" id="signupPassword" placeholder="Enter a strong password" onkeyup="checkPasswordStrength()" required>
          <span class="input-group-text bg-light" onclick="togglePassword('signupPassword','signupToggleIcon')" style="cursor: pointer;">
            <i class="bi bi-eye-fill" id="signupToggleIcon"></i>
          </span>
        </div>
        <small id="passwordStrength" class="form-text mt-1"></small>
      </div>

      <!-- Submit Button -->
      <div class="d-grid gap-2 mt-3">
        <?php $this->submit_button('Sign Up', 'signup'); ?>
      </div>

      <!-- Redirect -->
      <p class="text-center mt-3">
        Already have an account? <a href='signin.php' class="text-decoration-none fw-semibold">Login here</a>
      </p>
    </form>
  </div>
</div>
<?php
    }

    // 🔹 SIGN IN FORM
    public function signin() {
?>
<div class="container d-flex justify-content-center align-items-center" style="min-height:100vh;">
  <div class="card shadow-lg p-4 rounded-4" style="width: 420px;">
    <h3 class="text-center mb-4 text-success fw-bold">Welcome Back</h3>
    <form>
      <!-- Email -->
      <div class="mb-3">
        <label for="signinEmail" class="form-label">Email Address</label>
        <div class="input-group">
          <span class="input-group-text bg-success text-white"><i class="bi bi-envelope-fill"></i></span>
          <input type="email" class="form-control rounded-end" id="signinEmail" placeholder="your@email.com" required>
        </div>
      </div>

      <!-- Password -->
      <div class="mb-3">
        <label for="signinPassword" class="form-label">Password</label>
        <div class="input-group">
          <span class="input-group-text bg-success text-white"><i class="bi bi-lock-fill"></i></span>
          <input type="password" class="form-control rounded-end" id="signinPassword" placeholder="Enter your password" required>
          <span class="input-group-text bg-light" onclick="togglePassword('signinPassword','signinToggleIcon')" style="cursor: pointer;">
            <i class="bi bi-eye-fill" id="signinToggleIcon"></i>
          </span>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="d-grid gap-2 mt-3">
        <?php $this->submit_button('Sign In', 'signin'); ?>
      </div>

      <!-- Redirect -->
      <p class="text-center mt-3">
        Don’t have an account? <a href='signup.php' class="text-decoration-none fw-semibold">Create one</a><br>
        <a href="forgot_password.php" class="text-danger small">Forgot password?</a>
      </p>
    </form>
  </div>
</div>
<?php
    }

    // 🔹 SUBMIT BUTTON
    private function submit_button($value, $name) {
?>
        <button type='submit' class="btn btn-primary rounded-pill fw-bold py-2 w-100" name='<?php echo $name; ?>'>
            <?php echo $value; ?>
        </button>
<?php
    }
}
?>

<!--  Shared Scripts -->
<script>
function togglePassword(inputId, iconId) {
    const passwordField = document.getElementById(inputId);
    const toggleIcon = document.getElementById(iconId);
    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("bi-eye-fill");
        toggleIcon.classList.add("bi-eye-slash-fill");
    } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("bi-eye-slash-fill");
        toggleIcon.classList.add("bi-eye-fill");
    }
}

function checkPasswordStrength() {
    const password = document.getElementById("signupPassword").value;
    const strengthText = document.getElementById("passwordStrength");

    let strength = 0;
    if (password.length >= 6) strength++;
    if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
    if (password.match(/[0-9]/)) strength++;
    if (password.match(/[^a-zA-Z0-9]/)) strength++;

    switch (strength) {
        case 0:
        case 1:
            strengthText.textContent = "Weak password";
            strengthText.style.color = "red";
            break;
        case 2:
            strengthText.textContent = "Medium password";
            strengthText.style.color = "orange";
            break;
        case 3:
        case 4:
            strengthText.textContent = "Strong password";
            strengthText.style.color = "green";
            break;
    }
}
</script>
