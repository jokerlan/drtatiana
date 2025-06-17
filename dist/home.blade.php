<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" href="{{ asset('storage/image/tb1.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dr. Tatiana Bosch</title>

</head>
<body>

    <!-- Navbar -->
    <nav>
        <div class="container">
            <div class="logo-group">
                <a href="/" class="logo-merge">
                    <div class="logo-wrapper">
                        <img src="{{ asset('storage/image/tb1.png') }}" class="logo-img first-img" alt="Logo without text">
                        <img src="{{ asset('storage/image/tb1.png') }}" class="logo-img second-img" alt="Logo with text">
                    </div>

                </a>
            </div>
            <ul class="navlinks">
                <li><a href="#hero">Home</a></li>
                <li><a href="#our-services">Services</a></li>
                <li><a href="#contact-us">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
<!-- Hero Section -->
<section id="hero" class="section fullscreen">
    <div class="hero-content">
        <div class="hero-name-behind">TATIANA BOSCH</div>
        <div class="hero-img-container relative">
          <!-- Name behind image -->
        
          <img src="{{ asset('storage/image/tatiana.png') }}" alt="Doctor" class="hero-image relative z-10">
        </div>
    </div>
</section>
       <div class="hero-text">
  <p class="hero-greet">Hello!</p>
  <p class="text">I'm <span class="highlight-name">Dr. Tatiana Zhelninova Bosch</span>.</p>
  <p class="about-me">
    A passionate Medical Doctor and Regenerative Medicine Specialist based in Bangkok. I bring 30+ years of international healthcare experience focused on innovation, cardiology, and patient-centered care.
  </p>
</div>


    <!-- Our Services Section -->
    <section id="our-services" class="section services">
  <div>
    <h2>My Specialties</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div>
        <h5>Regenerative Therapies</h5>
        <p>Advanced stem cell and PRP treatments for joint pain, anti-aging, and recovery.</p>
      </div>
      <div>
        <h5>Cardiovascular Health</h5>
        <p>Comprehensive management and prevention of heart disease and hypertension.</p>
      </div>
      <div>
        <h5>Hormonal Balance</h5>
        <p>Personalized hormone therapy for vitality, mood, and overall wellness.</p>
      </div>
      <div>
        <h5>Integrative Medicine</h5>
        <p>Combining modern diagnostics with holistic healing techniques.</p>
      </div>
      <div>
        <h5>Anti-Aging Solutions</h5>
        <p>Tailored strategies to slow aging, boost energy, and enhance skin and vitality.</p>
      </div>
      <div>
        <h5>Online Consultations</h5>
        <p>One-on-one virtual sessions for global clients needing trusted medical guidance.</p>
      </div>
    </div>
  </div>
</section>


  <section id="contact-us" class="section contact">
    <div class="contact-container">
      <!-- Quote -->
      <div class="contact-quote">
        “In a world full of uncertainty, finding a doctor who truly listens, leads with compassion, and embraces innovation is rare.
        Dr. Tatiana’s care goes beyond treatment — it’s a journey toward healing, guided by expertise and heart.
        Reach out today and take the first step toward a healthier future.”
      </div>

      <!-- Image -->
      <div class="contact-image">
        <img src="{{ asset('storage/image/tatianacontact.png') }}" alt="Contact Dr. Tatiana">
      </div>
    </div>
  </section>


<footer>
  <div class="footer-container">
    <div class="contact-info">
      <div class="contact-item">
        <i class="fas fa-map-marker-alt"></i>
        <span>Bangkok, Thailand</span>
      </div>
      <div class="contact-item">
        <i class="fas fa-phone-alt"></i>
        <span>+971 58 520 21 19</span>
      </div>
      <div class="contact-item">
        <i class="fas fa-envelope"></i>
        <a href="mailto:tzhelninova@mail.ru" class="contact-email">tzhelninova@mail.ru</a>
      </div>
    </div>
    <div class="social-icons">
      <a href="https://www.facebook.com/profile.php?id=61577121490119&mibextid=wwXIfr&rdid=HtqNrYb0RTGH9Au9&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F19f1ZJaaRj%2F" target="_blank" aria-label="Facebook">
        <img src="{{ asset('storage/image/facebook.png') }}" alt="Facebook">
      </a>
      <a href="https://www.instagram.com/dr.tatianabosch/?igsh=MTZsNXB2YzFwNm9iZQ%3D%3D" target="_blank" aria-label="Instagram">
        <img src="{{ asset('storage/image/instagram.png') }}" alt="Instagram">
      </a>
      <a href="https://www.linkedin.com/in/dr-tatiana-bosch-md-phd-75421b83/" target="_blank" aria-label="LinkedIn">
        <img src="{{ asset('storage/image/linkedin.png') }}" alt="Facebook">
      </a>
    </div>
  </div>
</footer>

</body>
</html>
