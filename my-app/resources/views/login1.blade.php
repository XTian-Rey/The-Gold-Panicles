<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login1.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/#">THE GOLD PANICLES</a>
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
    <h3 class="mb-4">Welcome, let’s set you up!</h3>

    <!-- Dropdown for selecting role -->
    <div class="dropdown mb-4">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="roleDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        Login as
      </button>
      <ul class="dropdown-menu" aria-labelledby="roleDropdown">
        <li><a class="dropdown-item" href="#client">Client</a></li>
        <li><a class="dropdown-item" href="#staffer">Staffer</a></li>
        <li><a class="dropdown-item" href="#admin">Admin</a></li>
      </ul>
    </div>

    <!-- Initially disabled -->
<a href="/clientlogin">
    <button id="loginButton" class="btn btn-primary w-100" style="background-color: gray">Proceed</button>
  </a>
  
  </div>

  <footer class="text-center mt-4">
    © 2024 TGP | All Rights Reserved
  </footer>

  <script>
    let selectedRole = '';

    // Update selected role when clicking dropdown items
    document.querySelectorAll('.dropdown-item').forEach(item => {
      item.addEventListener('click', function (e) {
        selectedRole = e.target.textContent.trim();
        document.getElementById('roleDropdown').textContent = `Login as ${selectedRole}`;

        // Enable the proceed button when a role is selected
        document.getElementById('loginButton').disabled = false; // Enable the button
      });
    });

    // Handle login button click
    document.getElementById('loginButton').addEventListener('click', function () {
      if (selectedRole === 'Client') {
        window.location.href = '/client'; // Redirect to the client page
      } else if (selectedRole === 'Staffer') {
        window.location.href = '/staffer'; // Redirect to the staffer page
      } else if (selectedRole === 'Admin') {
        window.location.href = '/admin'; // Redirect to the admin page
      } else {
        alert('Please select a role first!');
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
