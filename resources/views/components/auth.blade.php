<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    :root {
      --primary:#553cdf;
      --soft-border:#dcd8ff;
    }
    body{
      background:#f9f9ff;
      min-height:100vh;
      display:flex;align-items:center;justify-content:center;
      padding:16px;
      margin:0;
    }
    .auth-container{
      width:100%;
      max-width:920px;
      border:1px solid var(--soft-border);
      border-radius:10px;
      box-shadow:0 4px 16px rgba(0,0,0,.08);
      overflow:hidden;
      display:flex;
      flex-direction:row;
      background:#fff;
    }
    .auth-left,.auth-right{
      flex:1;
      padding:32px 36px;
      box-sizing:border-box;
    }
    .auth-left{
      background:#f3f4ff;
      display:flex; align-items:center; justify-content:center;
    }
    .auth-illustration{
      width:100%;
      height:100%;
      max-height:auto;
      border-radius:8px;
      object-fit:cover;
      animation:fadeIn .8s ease both;
    }
    @keyframes fadeIn{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:none}}
    .btn-primary{background:var(--primary)!important;border-color:var(--primary)!important;transition:.25s}
    .btn-primary:hover{background:#fff!important;color:var(--primary)!important;border:1px solid var(--primary)!important}
    .btn-outline-secondary{border-color:var(--soft-border)}
    .btn-outline-secondary:hover{background:#fff;color:var(--primary);border-color:var(--primary)}
    .form-control:focus,.form-select:focus{
      border-color:var(--primary);
      box-shadow:0 0 0 .2rem rgba(85,60,223,.2)
    }
    .switch-link{color:var(--primary);cursor:pointer}
    .hidden{display:none!important}
    .brand-logo{width:110px}
    .title{color:var(--primary); margin:8px 0 4px}
    .social-btn{
      border:1px solid #ddd; border-radius:8px; padding:10px 12px;
      display:flex; align-items:center; justify-content:center; gap:8px;
      font-weight:500; cursor:pointer; transition:.25s
    }
    .social-btn:hover{background:#f1f1ff;border-color:var(--primary)}
    .social-btn img{width:20px;height:20px}
    .fine-text{font-size:.875rem}

    /* -------- responsive rules (new) -------- */
    @media (max-width: 992px) {
      .auth-left,.auth-right{
        padding:24px;
      }
      .auth-illustration{
        max-height:auto;
      }
    }

    @media (max-width: 768px) {
      .auth-container{
        flex-direction:column;
        max-width:100%;
      }
      /* stack: image first then form */
      .auth-left{
        order: -1;
        padding:18px;
      }
      .auth-right{
        padding:20px;
      }
      .auth-illustration{
        max-height:220px;
        object-fit:cover;
      }
      /* make form elements slightly larger / full width */
      .auth-right .form-control, .auth-right .form-select {
        font-size: 15px;
      }
      .brand-logo{width:80px}
      .auth-left, .auth-right {
        align-items: stretch;
      }
    }

    @media (max-width: 420px) {
      .auth-left,.auth-right{
        padding:14px;
      }
      .auth-illustration{
        max-height:auto;
      }
      .brand-logo{width:70px}
    }

    
    
    /* --------------------------------------- */
  </style>
</head>
<body>

<div class="auth-container">
  <!-- Left: Image -->
  <div class="auth-left">
    <img id="sideImage" class="auth-illustration"
         src="https://st2.depositphotos.com/2171279/9264/i/450/depositphotos_92644432-stock-photo-businesswoman-typing-on-laptop-at.jpg"
         alt="Illustration"/>
  </div>

  <!-- Right: Forms -->
  <div class="auth-right bg-white">
    <!-- Alerts -->
    <div id="alertHost"></div>

    <!-- LOGIN -->
    <div id="loginForm">
      <div class="text-center mb-3">
        <img class="brand-logo mb-1" src="{{asset('assets/images/logo/logo-1.svg')}}" alt="Logo">
        <h4 class="title">Login to Your Account 👋</h4>
      </div>
      <form id="loginFormEl" novalidate>
        <div class="mb-3">
          <label class="form-label">Role</label>
          <select class="form-select" id="loginRole" required>
            <option value="" disabled selected>Select Role</option>
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
            <option value="admin">Admin</option>
          </select>
          <div class="invalid-feedback">Please select your role.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" id="loginEmail" placeholder="Enter email" required>
          <div class="invalid-feedback">Enter a valid email.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="loginPassword" placeholder="Enter password" required>
            <button type="button" class="btn btn-outline-secondary rounded-end " onclick="togglePassword('loginPassword', this)">Show</button>
            <div class="invalid-feedback">Password required.</div>
          </div>
          <div class="fine-text mt-1 text-muted">Use your account password.</div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rememberCheck">
            <label class="form-check-label" for="rememberCheck">Remember me</label>
          </div>
          <span class="switch-link" onclick="showForgot()">Forgot Password?</span>
        </div>
        <button class="btn btn-primary w-100 mb-3" type="submit">Login</button>

        <div class="d-flex gap-3 mb-3">
          <div class="social-btn flex-fill"><img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" alt=""> Google</div>
          <div class="social-btn flex-fill"><img src="https://cdn-icons-png.flaticon.com/512/731/731985.png" alt=""> Apple</div>
        </div>

        <p class="text-center mt-2">Don't have an account? <span class="switch-link" onclick="showSignup()">Sign Up</span></p>
      </form>
    </div>

    <!-- SIGNUP -->
    <div id="signupForm" class="hidden">
      <div class="text-center mb-3">
        <img class="brand-logo mb-1" src="{{asset('assets/images/logo/logo-1.svg')}}" alt="Logo">
        <h4 class="title">Create Your Account 🚀</h4>
      </div>
      <form id="signupFormEl" novalidate>
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" id="signupName" placeholder="Enter name" required>
          <div class="invalid-feedback">Name is required.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" id="signupEmail" placeholder="Enter email" required>
          <div class="invalid-feedback">Enter a valid email.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="signupPassword" placeholder="Create password" required>
            <button type="button" class="btn btn-outline-secondary rounded-end " onclick="togglePassword('signupPassword', this)">Show</button>
            <div class="invalid-feedback">Please enter a strong password.</div>
          </div>
          <div class="fine-text text-muted mt-1">
            Min 8 chars, 1 uppercase, 1 number, 1 special.
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="signupConfirm" placeholder="Confirm password" required>
          <div class="invalid-feedback">Passwords must match.</div>
        </div>
        <button class="btn btn-primary w-100" type="submit">Sign Up</button>
        <p class="text-center mt-3">Already have an account? <span class="switch-link" onclick="showLogin()">Login</span></p>
      </form>
    </div>

    <!-- FORGOT STEP 1 (Email) -->
    <div id="forgotStep1" class="hidden">
      <div class="text-center mb-2">
        <img class="brand-logo mb-1" src="{{asset('assets/images/logo/logo-1.svg')}}" alt="Logo">
        <h4 class="title">Forgot Password 🔑</h4>
        <p class="text-muted fine-text mb-0">Enter your registered email to get OTP.</p>
      </div>
      <form id="forgotFormEl" novalidate>
        <div class="mb-3 mt-2">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" id="forgotEmail" placeholder="Enter email" required>
          <div class="invalid-feedback">Enter a valid email.</div>
        </div>
        <button class="btn btn-primary w-100" type="submit">Send OTP</button>
        <p class="text-center mt-3">Back to <span class="switch-link" onclick="showLogin()">Login</span></p>
      </form>
    </div>

    <!-- FORGOT STEP 2 (OTP + New Password) -->
    <div id="forgotStep2" class="hidden">
      <div class="text-center mb-2">
        <img class="brand-logo mb-1" src="{{asset('assets/images/logo/logo-1.svg')}}" alt="Logo">
        <h4 class="title">Verify OTP & Reset</h4>
        <p class="text-muted fine-text mb-0">We sent a 6-digit OTP to your email.</p>
      </div>
      <form id="otpFormEl" novalidate>
        <div class="mb-3 mt-2">
          <label class="form-label">OTP</label>
          <input type="text" inputmode="numeric" maxlength="6" class="form-control" id="otpCode" placeholder="Enter 6-digit OTP" required>
          <div class="invalid-feedback">Enter valid 6-digit OTP.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">New Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="resetPassword" placeholder="New password" required>
            <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('resetPassword', this)">Show</button>
            <div class="invalid-feedback">Please enter a strong password.</div>
          </div>
          <div class="fine-text text-muted mt-1">
            Min 8 chars, 1 uppercase, 1 number, 1 special.
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Confirm New Password</label>
          <input type="password" class="form-control" id="resetConfirm" placeholder="Confirm password" required>
          <div class="invalid-feedback">Passwords must match.</div>
        </div>
        <button class="btn btn-primary w-100" type="submit">Reset Password</button>
        <p class="text-center mt-3">Back to <span class="switch-link" onclick="showLogin()">Login</span></p>
      </form>
    </div>

  </div>
</div>

<script>
  // Helpers
  const emailRx = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
  const passRx  = /^(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}$/; // 8+, 1 upper, 1 digit, 1 special

  function togglePassword(id, btn){
    const inp = document.getElementById(id);
    if(inp.type === 'password'){ inp.type = 'text'; btn.textContent = 'Hide'; }
    else{ inp.type = 'password'; btn.textContent = 'Show'; }
  }

  function showSection(sectionId, imgUrl){
    // hide all
    ['loginForm','signupForm','forgotStep1','forgotStep2'].forEach(id=>{
      document.getElementById(id).classList.add('hidden');
    });
    document.getElementById(sectionId).classList.remove('hidden');
    document.getElementById('sideImage').src = imgUrl;
    clearAlerts();
    // On small screens scroll into view the form section
    if(window.innerWidth <= 768){
      setTimeout(()=> {
        document.querySelector('.auth-right').scrollIntoView({behavior:'smooth'});
      }, 120);
    }
  }

  function showSignup(){ showSection('signupForm', 'https://st2.depositphotos.com/2171279/9264/i/450/depositphotos_92644432-stock-photo-businesswoman-typing-on-laptop-at.jpg'); }
  function showLogin(){ showSection('loginForm', 'https://st2.depositphotos.com/2171279/9264/i/450/depositphotos_92644432-stock-photo-businesswoman-typing-on-laptop-at.jpg'); }
  function showForgot(){ showSection('forgotStep1', 'https://st2.depositphotos.com/2171279/9264/i/450/depositphotos_92644432-stock-photo-businesswoman-typing-on-laptop-at.jpg'); }

  // Alerts
  function clearAlerts(){ document.getElementById('alertHost').innerHTML = ''; }
  function pushAlert(type, msg){
    const host = document.getElementById('alertHost');
    host.innerHTML = `
      <div class="alert alert-${type} d-flex align-items-center py-2 px-3 mb-3" role="alert">
        <div>${msg}</div>
      </div>`;
  }

  // LOGIN submit
  document.getElementById('loginFormEl').addEventListener('submit', function(e){
    e.preventDefault();
    clearAlerts();
    const role = document.getElementById('loginRole');
    const email = document.getElementById('loginEmail');
    const pass  = document.getElementById('loginPassword');

    let ok = true;
    if(!role.value){ role.classList.add('is-invalid'); ok=false; } else role.classList.remove('is-invalid');
    if(!emailRx.test(email.value)){ email.classList.add('is-invalid'); ok=false; } else email.classList.remove('is-invalid');
    if(!pass.value){ pass.classList.add('is-invalid'); ok=false; } else pass.classList.remove('is-invalid');

    if(!ok){ pushAlert('danger','Please fill all required fields correctly.'); return; }

    // Simulated success
    pushAlert('success', `Welcome back! Logged in as <strong>${role.value}</strong>.`);
  });

  // SIGNUP submit
  document.getElementById('signupFormEl').addEventListener('submit', function(e){
    e.preventDefault();
    clearAlerts();
    const name = document.getElementById('signupName');
    const email = document.getElementById('signupEmail');
    const pass = document.getElementById('signupPassword');
    const cnf  = document.getElementById('signupConfirm');

    let ok = true;
    if(!name.value.trim()){ name.classList.add('is-invalid'); ok=false; } else name.classList.remove('is-invalid');
    if(!emailRx.test(email.value)){ email.classList.add('is-invalid'); ok=false; } else email.classList.remove('is-invalid');
    if(!passRx.test(pass.value)){ pass.classList.add('is-invalid'); ok=false; } else pass.classList.remove('is-invalid');
    if(cnf.value !== pass.value || !cnf.value){ cnf.classList.add('is-invalid'); ok=false; } else cnf.classList.remove('is-invalid');

    if(!ok){ pushAlert('danger','Please fix validation errors and try again.'); return; }

    pushAlert('success','Account created successfully! You can now log in.');
    setTimeout(showLogin, 1200);
  });

  // FORGOT STEP 1 submit -> show OTP step
  document.getElementById('forgotFormEl').addEventListener('submit', function(e){
    e.preventDefault();
    clearAlerts();
    const email = document.getElementById('forgotEmail');
    if(!emailRx.test(email.value)){
      email.classList.add('is-invalid'); pushAlert('danger','Enter a valid email.'); return;
    }
    email.classList.remove('is-invalid');
    pushAlert('success','OTP sent to your email (demo).');
    // Go to OTP step
    showSection('forgotStep2', 'https://img.freepik.com/free-vector/verification-concept-illustration_114360-481.jpg');
  });

  // FORGOT STEP 2 submit -> validate OTP + new pass
  document.getElementById('otpFormEl').addEventListener('submit', function(e){
    e.preventDefault();
    clearAlerts();
    const otp = document.getElementById('otpCode');
    const pass = document.getElementById('resetPassword');
    const cnf  = document.getElementById('resetConfirm');

    let ok = true;
    if(!/^\d{6}$/.test(otp.value)){ otp.classList.add('is-invalid'); ok=false; } else otp.classList.remove('is-invalid');
    if(!passRx.test(pass.value)){ pass.classList.add('is-invalid'); ok=false; } else pass.classList.remove('is-invalid');
    if(cnf.value !== pass.value || !cnf.value){ cnf.classList.add('is-invalid'); ok=false; } else cnf.classList.remove('is-invalid');

    if(!ok){ pushAlert('danger','Please fix errors and try again.'); return; }

    pushAlert('success','Password reset successful! Redirecting to login…');
    setTimeout(showLogin, 1200);
  });

  // Default: show login
  showLogin();
</script>
</body>
</html>
