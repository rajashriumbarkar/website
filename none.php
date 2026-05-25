<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
}

body {
  background-color: #f8f9fa;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.auth-card {
  background: #ffffff;
  width: 380px;
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
  overflow: hidden;
}

.banner-image {
  background: linear-gradient(135deg, #f43397 0%, #bd186a 100%);
  height: 100px;
}

.auth-body {
  padding: 30px 24px;
}

.auth-title {
  font-size: 20px;
  font-weight: 700;
  color: #333333;
  margin-bottom: 6px;
}

.auth-subtitle {
  font-size: 13px;
  color: #666666;
  margin-bottom: 24px;
}

.input-group {
  display: flex;
  align-items: center;
  border: 1px solid #cccccc;
  border-radius: 8px;
  padding: 12px;
  margin-bottom: 16px;
  background: #fff;
}

.input-group:focus-within {
  border-color: #f43397;
}

.country-code {
  font-size: 15px;
  font-weight: 600;
  color: #333333;
  margin-right: 10px;
  padding-right: 10px;
  border-right: 1px solid #ddd;
}

input {
  border: none;
  outline: none;
  width: 100%;
  font-size: 15px;
  color: #333333;
}

input:disabled {
  background: transparent;
  color: #888888;
}

.otp-delivery-text {
  font-size: 12px;
  color: #555555;
  margin-bottom: 6px;
}

.timer-container {
  display: flex;
  justify-content: space-between;
  font-size: 13px;
  margin-bottom: 20px;
  color: #666666;
}

#resendOtpBtn {
  background: none;
  border: none;
  color: #f43397;
  font-weight: 600;
  cursor: pointer;
}

.submit-btn {
  width: 100%;
  background-color: #f43397;
  color: white;
  border: none;
  padding: 14px;
  font-size: 16px;
  font-weight: 600;
  border-radius: 8px;
  cursor: pointer;
  transition: background 0.2s ease;
}

.submit-btn:hover {
  background-color: #de2282;
}

/* Dashboard View States */
.authenticated-view {
  text-align: center;
}

.success-icon {
  width: 60px;
  height: 60px;
  background: #e3f9e5;
  color: #23a436;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 28px;
  margin: 0 auto 16px auto;
}

.logout-btn {
  margin-top: 24px;
  width: 100%;
  background: none;
  border: 1px solid #f43397;
  color: #f43397;
  padding: 12px;
  font-weight: 600;
  border-radius: 8px;
  cursor: pointer;
}

.logout-btn:hover {
  background: #fff0f6;
}

/* Utility layout hidden helper */
.hidden {
  display: none !important;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meesho Style Auth</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Auth Card Container -->
  <div class="auth-card" id="authCard">
    <div class="banner-image">
      <!-- Minimalist header top color block mimicking Meesho layout -->
    </div>
    
    <div class="auth-body">
      <h2 class="auth-title">Sign Up / Sign In</h2>
      <p class="auth-subtitle">Access your account using your mobile number</p>

      <form id="meeshoLoginForm">
        <!-- Step 1: Mobile Input -->
        <div class="input-group">
          <span class="country-code">+91</span>
          <input type="tel" id="mobileNumber" placeholder="Enter Mobile Number" maxlength="10" autocomplete="off" required>
        </div>

        <!-- Step 2: Hidden Dynamic OTP Input Block -->
        <div id="otpSection" class="hidden">
          <p class="otp-delivery-text">OTP sent to <span id="displayMobile"></span></p>
          <div class="input-group">
            <input type="text" id="otpCode" placeholder="Enter 6-Digit OTP" maxlength="6" autocomplete="off">
          </div>
          <div class="timer-container">
            <span id="timerText">Resend OTP in <strong id="countdown">30</strong>s</span>
            <button type="button" id="resendOtpBtn" class="hidden">Resend OTP</button>
          </div>
        </div>

        <!-- Dynamic Action Button -->
        <button type="submit" id="actionBtn" class="submit-btn">Continue</button>
      </form>
    </div>
  </div>

  <!-- Authenticated Welcome State Dashboard -->
  <div class="auth-card hidden" id="dashboardCard">
    <div class="auth-body authenticated-view">
      <div class="success-icon">✓</div>
      <h2>Welcome Back!</h2>
      <p>Logged in securely via mobile: <strong id="savedUserMobile"></strong></p>
      <button id="logoutBtn" class="logout-btn">Log Out</button>
    </div>
  </div>

  <script>document.addEventListener("DOMContentLoaded", () => {
  const authCard = document.getElementById("authCard");
  const dashboardCard = document.getElementById("dashboardCard");
  const loginForm = document.getElementById("meeshoLoginForm");
  const mobileInput = document.getElementById("mobileNumber");
  const otpSection = document.getElementById("otpSection");
  const otpInput = document.getElementById("otpCode");
  const displayMobile = document.getElementById("displayMobile");
  const actionBtn = document.getElementById("actionBtn");
  const countdownText = document.getElementById("countdown");
  const timerText = document.getElementById("timerText");
  const resendOtpBtn = document.getElementById("resendOtpBtn");
  const savedUserMobile = document.getElementById("savedUserMobile");
  const logoutBtn = document.getElementById("logoutBtn");

  let currentStep = 1; // Step 1: Mobile Input, Step 2: OTP Verification
  let timerInterval;

  // 1. CHECK IF USER LOGGED IN ONCE BEFORE
  const savedSession = localStorage.getItem("isMobileAuthenticated");
  if (savedSession === "true") {
    showDashboard(localStorage.getItem("userMobile"));
  }

  // 2. FORM SUBMISSION CONTROLLER
  loginForm.addEventListener("submit", (e) => {
    e.preventDefault();

    if (currentStep === 1) {
      const mobileValue = mobileInput.value.trim();
      
      // Basic 10 digit check
      if (mobileValue.length !== 10 || isNaN(mobileValue)) {
        alert("Please enter a valid 10-digit mobile number.");
        return;
      }

      // Progress to Step 2 (OTP Mode)
      displayMobile.textContent = "+91 " + mobileValue;
      mobileInput.disabled = true; // Lock mobile number input
      otpSection.classList.remove("hidden");
      otpInput.required = true;
      actionBtn.textContent = "Verify OTP";
      currentStep = 2;
      
      startOtpTimer();
      alert("Mock OTP sent successfully! (Use code: 123456)");

    } else if (currentStep === 2) {
      const enteredOtp = otpInput.value.trim();

      // Mock Verification Check (Using sample token code '123456')
      if (enteredOtp === "123456") {
        const structuralMobile = mobileInput.value.trim();
        
        // Save state persistently so they only log in ONCE
        localStorage.setItem("isMobileAuthenticated", "true");
        localStorage.setItem("userMobile", structuralMobile);

        showDashboard(structuralMobile);
      } else {
        alert("Invalid OTP code. Please try again (Hint: 123456).");
      }
    }
  });

  // 3. COUNTDOWN TIMER LOGIC
  function startOtpTimer() {
    let timeLeft = 30;
    timerText.classList.remove("hidden");
    resendOtpBtn.classList.add("hidden");
    countdownText.textContent = timeLeft;

    clearInterval(timerInterval);
    timerInterval = setInterval(() => {
      timeLeft--;
      countdownText.textContent = timeLeft;
      
      if (timeLeft <= 0) {
        clearInterval(timerInterval);
        timerText.classList.add("hidden");
        resendOtpBtn.classList.remove("hidden");
      }
    }, 1000);
  }

  // 4. RESET / RESEND OTP ACTION
  resendOtpBtn.addEventListener("click", () => {
    otpInput.value = "";
    startOtpTimer();
    alert("A fresh mock OTP has been sent again! (Code: 123456)");
  });

  // 5. VIEW TOGGLE INTERFACES
  function showDashboard(mobileNumber) {
    authCard.classList.add("hidden");
    dashboardCard.classList.remove("hidden");
    savedUserMobile.textContent = "+91 " + mobileNumber;
  }

  // 6. LOGOUT SYSTEM
  logoutBtn.addEventListener("click", () => {
    localStorage.removeItem("isMobileAuthenticated");
    localStorage.removeItem("userMobile");
    window.location.reload(); // Refresh viewport back to initialization setup
  });
});</script>
</body>
</html>