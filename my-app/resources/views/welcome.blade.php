<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Gold Panicles</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">THE GOLD PANICLES</a>
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

    <section id="home" class="hero-section min-vh-100 d-flex align-items-center justify-content-center text-center ">
        <div class="container">
            <h2>"We never flinched in serving you the truth"</h2>
            <!-- Button redirects to the login page -->
            <a href="/login1" class="btn btn-light mt-3">Let's set you up!</a>
        </div>
    </section>
    

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container text-center">
            <h3 class="section-title">About us</h3>
            <p class="section-text">
                    The Gold Panicles is the Official Student Publication of Caraga State University (CSU) - Main Campus. Its founding, movement, and goals are protected by RA 7079, or the Campus Journalism Act of 1991.
                    The office serves as the equalizing press of the campus, ensuring a just checks-and-balance system in student governance, activities, and beyond. It is independent by function and administration from other student organizations. It does not actively promote political, religious parties, and other ideologies.
            </p>
    </section>

    <!-- What We Do Section -->
    <section id="services" class="services-section">
        <div class="container text-center">
            <h3 class="section-title">What <span class="highlight-text">WE</span> do</h3>
            <p class="section-text">
                     The office serves as the equalizing press of the campus, ensuring a just checks-and-balance system in student governance, activities, and beyond. It is independent by function and administration from other student organizations. It does not actively promote political, religious parties, and other ideologies.
                    The official domicile of the office is within the premises of CSU - Main Campus, Butuan City. The office serves as the official student publication of CSU, anchored on the principles of the freedom of the press. The office is by the students, for the students, and through the students.
        </p>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
