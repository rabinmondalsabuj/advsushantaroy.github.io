<?php
// PHP Email Logic
$show_success = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $issue = strip_tags(trim($_POST["legal_issue"]));
    $message = trim($_POST["message"]);

    $recipient = "advshantoroy@gmail.com";
    $subject = "New Consultation Request: $issue from $name";
    
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Issue Type: $issue\n\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        $show_success = true;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-navy: #1a2a6c;
            --court-red: #a82323;
            --gold: #f1c40f;
        }

        body { font-family: 'Segoe UI', Roboto, sans-serif; background-color: #fcfcfc; scroll-behavior: smooth; }

        /* Navbar Fix for Mobile */
        .navbar { background: white; border-bottom: 3px solid var(--court-red); box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .nav-link { font-weight: 700; color: var(--primary-navy) !important; text-transform: uppercase; }
        
        /* Hero Section */
        .hero { background: linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%); color: white; padding: 80px 0; }
        .hero-img { 
            border: 8px solid white; 
            border-radius: 15px; 
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            max-width: 100%;
            height: auto;
        }

        /* COLORFUL Practice Areas */
        .practice-section { padding: 80px 0; background: #fff; }
        .area-card {
            border: none; border-radius: 20px; padding: 40px 20px; color: white;
            transition: all 0.4s ease; height: 100%; text-align: center;
        }
        .area-card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.2); }
        
        /* Vibrant Gradients */
        .card-criminal { background: linear-gradient(45deg, #FF416C, #FF4B2B); } 
        .card-civil { background: linear-gradient(45deg, #2193b0, #6dd5ed); }    
        .card-family { background: linear-gradient(45deg, #f85032, #e73827); }   
        .card-property { background: linear-gradient(45deg, #11998e, #38ef7d); } 
        
        .area-card i { font-size: 3rem; margin-bottom: 15px; }
        .area-card h3 { font-weight: 800; font-size: 1.5rem; }

        /* Form Styling */
        .consultation-box { background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 50px rgba(0,0,0,0.08); }
        .success-alert { background: #d4edda; color: #155724; padding: 25px; border-radius: 15px; text-align: center; border: 1px solid #c3e6cb; }

        /* Footer */
        footer { background: #111; color: #eee; padding: 50px 0; border-top: 5px solid var(--court-red); }
        .zeekodes-link { color: #f39c12; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <span style="color: var(--court-red); font-size: 1.4rem; font-weight: 900;">SUSHANTA ROY</span><br>
            <small style="font-size: 0.7rem; color: #555; letter-spacing: 1px;">ADVOCATE | DHAKA JUDGE COURT</small>
        </a>
        <!-- MOBILE MENU BUTTON FIX -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

<!-- Hero Section -->
<header id="home" class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 text-center text-lg-start mb-5 mb-lg-0">
                <h1 class="display-4 fw-bold mb-4">Protecting Your <br><span style="color: var(--gold);">Rights & Liberty</span></h1>
                <p class="lead mb-4">Dedicated legal representation at the District & Sessions Court, Dhaka. We ensure justice with integrity.</p>
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                    <a href="#contact" class="btn btn-warning btn-lg px-4 fw-bold text-dark">Get Legal Help</a>
                    <a href="https://wa.me/8801711288398" class="btn btn-outline-light btn-lg px-4"><i class="fab fa-whatsapp me-2"></i>WhatsApp</a>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <img src="https://lh3.googleusercontent.com/d/1OEt25ff4V2o8HVHr2k02eUom7ni3pV4I" alt="Sushanta Roy Advocate" class="hero-img img-fluid">
            </div>
        </div>
    </div>
</header>

<!-- COLORFUL Practice Areas -->
<section id="practice" class="practice-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold" style="color: var(--primary-navy);">Legal Practice Areas</h2>
            <div style="width: 60px; height: 4px; background: var(--court-red); margin: 10px auto;"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-3"><div class="area-card card-criminal"><i class="fas fa-gavel"></i><h3>Criminal</h3><p>Bail & Defense</p></div></div>
            <div class="col-md-3"><div class="area-card card-civil"><i class="fas fa-balance-scale"></i><h3>Civil</h3><p>Land & Money Suits</p></div></div>
            <div class="col-md-3"><div class="area-card card-family"><i class="fas fa-users"></i><h3>Family</h3><p>Divorce & Custody</p></div></div>
            <div class="col-md-3"><div class="area-card card-property"><i class="fas fa-file-contract"></i><h3>Property</h3><p>Deed & Registration</p></div></div>
        </div>
    </div>
</section>

<!-- PHP Consultation Form Section -->
<section id="contact" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="consultation-box">
                    <?php if ($show_success): ?>
                        <div class="success-alert">
                            <i class="fa fa-check-circle fa-3x mb-3"></i>
                            <h3>Request Submitted!</h3>
                            <p>Thank you. Your message has been sent to Advocate Sushanta Roy. We will contact you shortly.</p>
                            <a href="index.php" class="btn btn-success mt-3">Send Another Message</a>
                        </div>
                    <?php else: ?>
                        <h3 class="fw-bold mb-4 text-center">Request a Consultation</h3>
                        <form action="index.php#contact" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3"><input type="text" name="name" class="form-control p-3" placeholder="Full Name" required></div>
                                <div class="col-md-6 mb-3"><input type="tel" name="phone" class="form-control p-3" placeholder="Phone Number" required></div>
                            </div>
                            <div class="mb-3"><input type="email" name="email" class="form-control p-3" placeholder="Your Email" required></div>
                            <div class="mb-3">
                                <select name="legal_issue" class="form-select p-3" required>
                                    <option value="">Select Case Type</option>
                                    <option value="Criminal">Criminal Matter</option>
                                    <option value="Civil">Civil Dispute</option>
                                    <option value="Family">Family Law</option>
                                    <option value="Property">Property/Land</option>
                                </select>
                            </div>
                            <div class="mb-4"><textarea name="message" class="form-control p-3" rows="5" placeholder="Briefly describe your case..." required></textarea></div>
                            <button type="submit" class="btn btn-danger btn-lg w-100 fw-bold py-3">SUBMIT TO ADVOCATE</button>
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
        <h4 class="fw-bold text-white mb-4">ADVOCATE SUSHANTA ROY</h4>
        <p>16/A, Court House Street, Room-405, Kotwali, Dhaka-1100</p>
        <hr style="border-color: #333; max-width: 500px; margin: 20px auto;">
        <p class="mb-0 text-muted">© 2026 Sushanta Roy. All Rights Reserved.</p>
        <p class="mt-2 small">Created with <a href="#" class="zeekodes-link">Zeekodes</a></p>
    </div>
</footer>

<!-- ESSENTIAL: Bootstrap JS Bundle (Makes mobile menu work) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
