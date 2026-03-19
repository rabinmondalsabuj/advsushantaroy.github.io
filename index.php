<?php
$message_sent = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "advshantoroy@gmail.com";
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $issue = $_POST['legal_issue'];
    $message = $_POST['message'];

    $subject = "New Consultation Request: " . $issue;
    $body = "Name: $name\nPhone: $phone\nEmail: $email\nIssue: $issue\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        $message_sent = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sushanta Roy | Advocate - Dhaka Judge Court</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-navy: #1a2a6c;
            --court-red: #a82323;
        }

        body { font-family: 'Segoe UI', Roboto, sans-serif; background-color: #fcfcfc; scroll-behavior: smooth; }

        /* Navbar Fixing Mobile Display */
        .navbar { background: white; border-bottom: 3px solid var(--court-red); }
        .nav-link { font-weight: 700; color: var(--primary-navy) !important; text-transform: uppercase; }
        
        /* Hero Section */
        .hero { background: linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%); color: white; padding: 60px 0; }
        .hero-img { 
            border: 8px solid white; 
            border-radius: 15px; 
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            max-width: 100%;
            height: auto;
        }

        /* Practice Areas - Colorful & Decent */
        .practice-section { padding: 80px 0; }
        .area-card {
            border: none; border-radius: 20px; padding: 40px 20px; color: white;
            transition: 0.3s; text-align: center; height: 100%;
        }
        .area-card:hover { transform: translateY(-10px); }
        .card-criminal { background: linear-gradient(45deg, #FF416C, #FF4B2B); } 
        .card-civil { background: linear-gradient(45deg, #2193b0, #6dd5ed); }    
        .card-family { background: linear-gradient(45deg, #f85032, #e73827); }   
        .card-property { background: linear-gradient(45deg, #11998e, #38ef7d); } 
        .area-card i { font-size: 3rem; margin-bottom: 15px; }

        /* Footer */
        footer { background: #111; color: #eee; padding: 50px 0; border-top: 5px solid var(--court-red); }
        .zeekodes-link { color: #f39c12; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg sticky-top navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <span style="color: var(--court-red); font-size: 1.6rem; font-weight: 900;">SUSHANTA ROY</span><br>
            <small style="font-size: 0.75rem; color: #555; letter-spacing: 2px;">ADVOCATE | DHAKA JUDGE COURT</small>
        </a>
        <!-- Toggler for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#practice">Practice Areas</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Consultation</a></li>
                <li class="nav-item ms-lg-3"><a class="btn btn-danger px-4 fw-bold" href="tel:01711288398">CALL: 01711288398</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero -->
<header id="home" class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 text-center text-lg-start mb-4 mb-lg-0">
                <h1 class="display-4 fw-bold mb-4">Protecting Your <br><span style="color: #f1c40f;">Rights & Liberty</span></h1>
                <p class="lead mb-4">Experienced legal representation in Criminal, Civil, and Family matters at the District & Sessions Court, Dhaka.</p>
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                    <a href="#contact" class="btn btn-warning btn-lg px-4 fw-bold">Get Legal Help</a>
                    <a href="https://wa.me/8801711288398" class="btn btn-outline-light btn-lg px-4"><i class="fab fa-whatsapp me-2"></i>WhatsApp</a>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <!-- Corrected direct display link -->
                <img src="https://lh3.googleusercontent.com/d/1OEt25ff4V2o8HVHr2k02eUom7ni3pV4I" alt="Advocate Sushanta Roy" class="hero-img img-fluid">
            </div>
        </div>
    </div>
</header>

<!-- Practice Areas -->
<section id="practice" class="practice-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold" style="color: var(--primary-navy);">Expert Legal Services</h2>
            <div style="width: 60px; height: 4px; background: var(--court-red); margin: 10px auto;"></div>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-3"><div class="area-card card-criminal"><i class="fas fa-gavel"></i><h3>Criminal</h3><p>Bail & Defense</p></div></div>
            <div class="col-md-3"><div class="area-card card-civil"><i class="fas fa-balance-scale"></i><h3>Civil</h3><p>Money & Land Suits</p></div></div>
            <div class="col-md-3"><div class="area-card card-family"><i class="fas fa-users"></i><h3>Family</h3><p>Divorce & Custody</p></div></div>
            <div class="col-md-3"><div class="area-card card-property"><i class="fas fa-file-contract"></i><h3>Property</h3><p>Deed & Title</p></div></div>
        </div>
    </div>
</section>

<!-- Consultation Form -->
<section id="contact" class="py-5 bg-light">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="p-4 bg-white rounded shadow-sm h-100">
                    <h3 class="fw-bold mb-4">Chamber Details</h3>
                    <p class="fs-5 text-danger fw-bold mb-1">Dhaka Judge Court</p>
                    <p class="text-muted mb-4">16/A, Court House Street, Room-405, Kotwali, Dhaka-1100</p>
                    <p><i class="fa fa-envelope text-primary me-2"></i> advshantoroy@gmail.com</p>
                    <p><i class="fa fa-phone text-success me-2"></i> 01711288398 / 01511288398</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="p-4 bg-white rounded shadow-sm">
                    <?php if ($message_sent): ?>
                        <div class="alert alert-success py-4">
                            <h4><i class="fa fa-check-circle me-2"></i> Message Sent!</h4>
                            Advocate Sushanta Roy will contact you shortly.
                        </div>
                    <?php else: ?>
                        <h3 class="fw-bold mb-4">Request Consultation</h3>
                        <form action="index.php#contact" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Full Name" required></div>
                                <div class="col-md-6"><input type="tel" name="phone" class="form-control" placeholder="Phone" required></div>
                                <div class="col-12"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
                                <div class="col-12">
                                    <select name="legal_issue" class="form-select" required>
                                        <option value="">Select Case Type</option>
                                        <option value="Criminal">Criminal</option>
                                        <option value="Civil">Civil</option>
                                        <option value="Family">Family</option>
                                        <option value="Property">Property</option>
                                    </select>
                                </div>
                                <div class="col-12"><textarea name="message" class="form-control" rows="4" placeholder="Your Message" required></textarea></div>
                                <div class="col-12"><button type="submit" class="btn btn-danger btn-lg w-100 fw-bold">SEND MESSAGE</button></div>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <h4 class="fw-bold text-white">ADVOCATE SUSHANTA ROY</h4>
        <hr style="border-color: #444; width: 50%; margin: 20px auto;">
        <p class="mb-0 text-muted">© 2026 All Rights Reserved.</p>
        <p class="mt-2">Created with <a href="#" class="zeekodes-link">Zeekodes</a></p>
    </div>
</footer>

<!-- IMPORTANT: JavaScript for Mobile Menu functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
