<?php
// PHP Email Submission Logic
$message_status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $subject_type = strip_tags(trim($_POST["legal_issue"]));
    $message_text = trim($_POST["message"]);

    $to = "advshantoroy@gmail.com";
    $email_subject = "Website Consultation: $subject_type from $name";
    
    $body = "Client Name: $name\n";
    $body .= "Client Email: $email\n";
    $body .= "Client Phone: $phone\n";
    $body .= "Case Type: $subject_type\n\n";
    $body .= "Message Details:\n$message_text\n";

    $headers = "From: $name <$email>";

    if (mail($to, $email_subject, $body, $headers)) {
        $message_status = "success";
    } else {
        $message_status = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sushanta Roy | Advocate - Dhaka Judge Court</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-navy: #1a2a6c;
            --court-red: #a82323;
            --gold: #f1c40f;
        }

        body { font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f8f9fa; scroll-behavior: smooth; }

        /* Navbar Fixing Mobile View */
        .navbar { background: white; border-bottom: 4px solid var(--court-red); box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
        .navbar-brand b { color: var(--court-red); font-size: 1.5rem; letter-spacing: 1px; }
        .nav-link { font-weight: 700; color: var(--primary-navy) !important; text-transform: uppercase; margin-left: 15px; }
        
        /* Hero Section - Direct Photo Display */
        .hero { background: linear-gradient(135deg, #1a2a6c 0%, #b21f1f 100%); color: white; padding: 100px 0; }
        .hero-img { 
            border: 10px solid rgba(255,255,255,0.2); 
            border-radius: 25px; 
            box-shadow: 0 20px 40px rgba(0,0,0,0.5);
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Practice Areas - Decent but Colorful */
        .practice-section { padding: 90px 0; background: #fff; }
        .area-card {
            border: none; border-radius: 25px; padding: 50px 30px; color: white;
            transition: all 0.4s ease; height: 100%; text-align: center;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .area-card:hover { transform: translateY(-15px); box-shadow: 0 20px 40px rgba(0,0,0,0.2); }
        
        /* Colorful Gradients for Law Types */
        .card-criminal { background: linear-gradient(45deg, #FF416C, #FF4B2B); } 
        .card-civil { background: linear-gradient(45deg, #2193b0, #6dd5ed); }    
        .card-family { background: linear-gradient(45deg, #f85032, #e73827); }   
        .card-property { background: linear-gradient(45deg, #11998e, #38ef7d); } 
        
        .area-card i { font-size: 4rem; margin-bottom: 25px; display: block; }
        .area-card h3 { font-weight: 800; text-transform: uppercase; margin-bottom: 15px; }

        /* Consultation Box */
        .consultation-box { background: white; padding: 50px; border-radius: 30px; box-shadow: 0 15px 60px rgba(0,0,0,0.1); }
        .form-control { border-radius: 12px; padding: 15px; border: 2px solid #eee; margin-bottom: 20px; font-weight: 500; }
        .form-control:focus { border-color: var(--court-red); box-shadow: none; }

        /* Success Message */
        .alert-success { background: #27ae60; color: white; border: none; border-radius: 15px; padding: 30px; margin-top: 20px; }

        /* Footer */
        footer { background: #111; color: #fff; padding: 60px 0; border-top: 6px solid var(--court-red); }
        .zeekodes-link { color: var(--gold); text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

<!-- Navigation (Fixed Responsive Menu) -->
<nav class="navbar navbar-expand-lg sticky-top navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <b>SUSHANTA ROY</b><br>
            <small style="font-size: 0.75rem; color: #555;">ADVOCATE | DHAKA JUDGE COURT</small>
        </a>
        <!-- MOBILE BUTTON -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#practice">Practice Areas</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Consultation</a></li>
                <li class="nav-item ms-lg-3"><a class="btn btn-danger px-4 fw-bold" href="tel:01711288398"><i class="fa fa-phone me-2"></i>01711288398</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<header id="home" class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-3 fw-bold mb-4">Securing Your <br><span style="color: var(--gold);">Legal Rights</span></h1>
                <p class="lead mb-5 opacity-90">Expert legal representative at the District & Sessions Court, Dhaka. Committed to delivering justice with integrity.</p>
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                    <a href="#contact" class="btn btn-warning btn-lg px-5 fw-bold text-dark">Get Help Now</a>
                    <a href="https://wa.me/8801711288398" class="btn btn-outline-light btn-lg px-4"><i class="fab fa-whatsapp me-2"></i>WhatsApp</a>
                </div>
            </div>
            <div class="col-lg-5 text-center mt-5 mt-lg-0">
                <!-- Corrected Direct Image Link (No Download Button) -->
                <img src="https://lh3.googleusercontent.com/d/1OEt25ff4V2o8HVHr2k02eUom7ni3pV4I" alt="Advocate Sushanta Roy" class="hero-img img-fluid shadow-lg">
            </div>
        </div>
    </div>
</header>

<!-- Practice Areas -->
<section id="practice" class="practice-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold" style="color: var(--primary-navy);">Legal Expertise</h2>
            <div style="width: 70px; height: 5px; background: var(--court-red); margin: 15px auto;"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-3"><div class="area-card card-criminal"><i class="fas fa-gavel"></i><h3>Criminal</h3><p>Defense & Bail</p></div></div>
            <div class="col-md-3"><div class="area-card card-civil"><i class="fas fa-balance-scale"></i><h3>Civil</h3><p>Land & Money Suits</p></div></div>
            <div class="col-md-3"><div class="area-card card-family"><i class="fas fa-users"></i><h3>Family</h3><p>Divorce & Custody</p></div></div>
            <div class="col-md-3"><div class="area-card card-property"><i class="fas fa-file-contract"></i><h3>Property</h3><p>Title & Registration</p></div></div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="consultation-box">
                    <?php if ($message_status == "success"): ?>
                        <div class="alert-success text-center">
                            <i class="fa fa-check-circle fa-4x mb-3"></i>
                            <h2 class="fw-bold">Sent Successfully!</h2>
                            <p class="fs-5">Advocate Sushanta Roy has received your message. You will be contacted shortly.</p>
                            <a href="index.php" class="btn btn-light mt-3">Back to Website</a>
                        </div>
                    <?php else: ?>
                        <div class="row g-5">
                            <div class="col-md-5">
                                <h3 class="fw-bold text-danger mb-4">Chamber Details</h3>
                                <p class="mb-4"><b>Dhaka Judge Court</b><br>16/A, Court House Street<br>Room-405, Kotwali, Dhaka-1100</p>
                                <p><b>Mobile:</b> 01711288398, 01511288398</p>
                                <p><b>Email:</b> advshantoroy@gmail.com</p>
                            </div>
                            <div class="col-md-7">
                                <h3 class="fw-bold mb-4">Consultation Form</h3>
                                <form action="index.php#contact" method="POST">
                                    <div class="row">
                                        <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Full Name" required></div>
                                        <div class="col-md-6"><input type="tel" name="phone" class="form-control" placeholder="Phone Number" required></div>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Your Email Address" required>
                                    <select name="legal_issue" class="form-select mb-4" style="border-radius:12px; padding:15px;" required>
                                        <option value="">Case Type</option>
                                        <option value="Criminal">Criminal</option>
                                        <option value="Civil">Civil</option>
                                        <option value="Family">Family</option>
                                        <option value="Property">Property</option>
                                    </select>
                                    <textarea name="message" class="form-control" rows="5" placeholder="Case details..." required></textarea>
                                    <button type="submit" class="btn btn-danger btn-lg w-100 fw-bold py-3">SEND TO ADVOCATE</button>
                                </form>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <h3 class="fw-bold mb-4">ADVOCATE SUSHANTA ROY</h3>
        <p class="mb-5 text-secondary">Serving Justice at District & Sessions Court, Dhaka</p>
        <hr style="border-color: #333; max-width: 600px; margin: 0 auto 30px auto;">
        <p class="mb-0 text-muted small">© 2026 Sushanta Roy. All Rights Reserved.</p>
        <p class="mt-2 small">Created with <a href="#" class="zeekodes-link">Zeekodes</a></p>
    </div>
</footer>

<!-- Essential JS for Mobile Menu functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
