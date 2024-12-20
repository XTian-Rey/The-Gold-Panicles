<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/third-party login.css') }}">
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
  <h4 class="mb-4">Welcome, let's set you up</h4>

<!-- Single Container for All Buttons -->
<div class="d-flex flex-column align-items-center">
    <!-- Email Address Button -->
    <div class="mb-3 w-100">
        <button class="btn btn-secondary w-100" type="button" id="emailButton">
            Enter Email Address
        </button>
    </div>
    <div class="mb-3 w-100">
        <button class="btn btn-secondary w-100" type="button" id="emailButton">
            Continue
        </button>
    </div>
<!-- Google Continue Button -->
<div class="mb-3 w-100">
    <button class="btn btn-danger w-100" id="google-login" style="background-color: #f5c52b;">
        <i class="bi bi-google"></i> Continue with Google
    </button>
</div>

<script src="https://accounts.google.com/gsi/client" async defer></script>
<script>
    function handleCredentialResponse(response) {
        const data = jwt_decode(response.credential); // Decodes the JWT token.
        const email = data.email;

        // Check if the email is from the correct domain
        if (email.endsWith("@carsu.edu.ph")) {
            // Proceed with your login process (e.g., sending to backend)
            console.log("Google login successful, email:", email);
            // Send this to your backend to authenticate
        } else {
            alert("Only Caraga State University email addresses are allowed.");
        }
    }

    window.onload = function () {
        google.accounts.id.initialize({
            client_id: 'YOUR_GOOGLE_CLIENT_ID',
            callback: handleCredentialResponse
        });
        google.accounts.id.renderButton(
            document.getElementById("google-login"),
            { theme: "outline", size: "large" }
        );
    };
</script>


             
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
