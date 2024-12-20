<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/clientlogin.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">THE GOLD PANICLES</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Logo and Tagline Container -->
<div class="logo-container text-center mt-5">
    <img src="your-logo.png" alt="TGP Logo" class="img-fluid">
</div>
<div class="tagline-container text-center mb-4">
    <p class="fw-bold">"We never flinched in serving you the truth"</p>
</div>

<!-- Login Container -->
<div class="login-container text-center">
  <h4 class="mb-4">Select your domain</h4>

  <!-- Single Container for All Dropdowns -->
  <div class="d-flex flex-column align-items-center">

      <!-- Departments Dropdown -->
      <div class="mb-3 w-100">
          <div class="dropdown w-100">
              <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="roleDropdown1" data-bs-toggle="dropdown" aria-expanded="false">
                  Departments
              </button>
              <ul class="dropdown-menu" aria-labelledby="roleDropdown1">
                  <li><a class="dropdown-item" href="/third-party login">Computer Science</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Information Technology</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Information System</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Civil Engineering</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Mining Engineering</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Geodetic Engineering</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Agronomy</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Animal Science</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Agricultural Technology</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Forestry</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Agro-forestry</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Environmental Science</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Mathematics</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Chemistry</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Biology</a></li>
                  <div class="mt-2">
                    <label for="officeOther" class="form-label">Others (Specify):</label>
                    <input type="text" class="form-control" id="officeOther" placeholder="Enter other office">
                    <a href="/third-party login" id="officeLogin" class="btn btn-primary mt-2 w-100">Proceed</a>
                </div>
              </ul>
          </div>
      </div>

      <!-- Office Dropdown -->
      <div class="mb-3 w-100">
          <div class="dropdown w-100">
              <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="roleDropdown2" data-bs-toggle="dropdown" aria-expanded="false">
                  Office
              </button>
              <ul class="dropdown-menu" aria-labelledby="roleDropdown2">
                  <li><a class="dropdown-item" href="/third-party login">Office of the University President</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Office of the Vice President for Academic Affairs</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Office of the Vice President for Administration and Finance</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Office of the Vice President for Research and Innovation</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Office of the Vice President for External and Alumni Services</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Guidance and Counseling</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Public Information and Communication Office (PICO)</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Management Information System (MIS)</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Office of Student Affairs and Services (OSAS)</a></li>
                  <div class="mt-2">
                    <label for="officeOther" class="form-label">Others (Specify):</label>
                    <input type="text" class="form-control" id="officeOther" placeholder="Enter other office">
                    <a href="/third-party login" id="officeLogin" class="btn btn-primary mt-2 w-100">Proceed</a>
                </div>
              </ul>
          </div>
      </div>

      <!-- Organization Dropdown -->
      <div class="mb-3 w-100">
          <div class="dropdown w-100">
              <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="roleDropdown3" data-bs-toggle="dropdown" aria-expanded="false">
                  Organization
              </button>
              <ul class="dropdown-menu" aria-labelledby="roleDropdown3">
                  <li><a class="dropdown-item" href="/third-party login">Client Login</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Staffer Login</a></li>
                  <li><a class="dropdown-item" href="/third-party login">Admin Login</a></li>
                  <div class="mt-2">
                    <label for="organizationOther" class="form-label">Others (Specify):</label>
                    <input type="text" class="form-control" id="organizationOther" placeholder="Enter other organization">
                    <a href="/third-party login" id="organizationLogin" class="btn btn-primary mt-2 w-100">Proceed</a>
                </div>
              </ul>
          </div>
      </div>
  </div>
</div>
<script>
    document.querySelectorAll("a.btn").forEach(button => {
        button.addEventListener("click", function() {
            const inputId = this.id.replace("Login", "Other");
            const inputValue = document.getElementById(inputId).value.trim();
            if (inputValue) {
                window.location.href = `/third-party-login?role=other&value=${encodeURIComponent(inputValue)}`;
            } else {
                alert("Please specify the other field before proceeding.");
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
