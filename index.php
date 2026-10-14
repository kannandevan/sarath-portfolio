<?php include 'includes/header.php'; ?>

<!-- NAVBAR -->


<!-- HERO SECTION -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-text wow fadeInUp">
                    <span style="color:var(--primary); font-weight:600; letter-spacing:1px;">HELLO, I'M SARATH</span>
                    <h1>Digital Artist & <br>Designer</h1>
                    <p class="hero-subtitle">Creating immersive 3D worlds, AI-generated visuals, and impactful brand identities for modern businesses.</p>
                    <div class="d-flex gap-3">
                        <a href="#portfolio" class="btn-primary">View Portfolio</a>
                        <a href="#contact" class="btn-primary" style="background:#fff; color:var(--text-main);">Contact Me</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-img-box wow fadeInRight">
                    <img src="assets/img/profile-pic.jpg" alt="Sarath S Potty">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title text-start m-0">
                    <span class="subtitle">ABOUT ME</span>
                    <h2>Bridging Art & Tech</h2>
                </div>
                <div class="about-content mt-4 wow fadeInUp">
                    <p>I am a 3D Artist with over 4 years of experience in creating models, rigging, textures, and animations. Proficient in 3ds Max and Unity3D, I combine technical expertise with artistic vision.</p>
                    <p>Beyond traditional 3D, I specialize in AI-powered generation, creating high-fidelity visuals efficiently for branding and media.</p>
                    
                    <div class="skills-wrapper mt-5">
                        <div class="skill-item">
                            <div class="skill-header"><span>3D Modeling & Animation</span> <span>90%</span></div>
                            <div class="skill-track"><div class="skill-fill" style="width:90%"></div></div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-header"><span>AI Image Generation</span> <span>90%</span></div>
                            <div class="skill-track"><div class="skill-fill" style="width:90%"></div></div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-header"><span>Graphic Design</span> <span>70%</span></div>
                            <div class="skill-track"><div class="skill-fill" style="width:70%"></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                 <div class="d-grid gap-4 mt-5 mt-lg-0">
                     <div class="p-4 bg-surface rounded text-center border">
                         <h2 class="display-4 text-primary fw-bold">4+</h2>
                         <p class="m-0 text-muted">Years Experience</p>
                     </div>
                     <div class="p-4 bg-surface rounded text-center border">
                         <h2 class="display-4 text-primary fw-bold">50+</h2>
                         <p class="m-0 text-muted">Projects Completed</p>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->
<section id="service" class="section-padding services-section">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">SERVICES</span>
            <h2>What I Do</h2>
            <p>Comprehensive design solutions for your brand.</p>
        </div>
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-card">
                    <div class="service-icon"><i class="ti-package"></i></div>
                    <h3>3D Artistry</h3>
                    <p class="text-muted">High-quality 3D modeling, texturing, and rigging for games and visualization.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-card">
                    <div class="service-icon"><i class="ti-wand"></i></div>
                    <h3>AI Synthesis</h3>
                    <p class="text-muted">Leveraging AI to generate unique concepts and assets at speed.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-card">
                    <div class="service-icon"><i class="ti-palette"></i></div>
                    <h3>Design</h3>
                    <p class="text-muted">Logo design, branding materials, and marketing assets.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-card">
                    <div class="service-icon"><i class="ti-video-camera"></i></div>
                    <h3>Editing</h3>
                    <p class="text-muted">Professional video editing and color grading.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PORTFOLIO SECTION -->
<section id="portfolio" class="section-padding">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">PORTFOLIO</span>
            <h2>Selected Works</h2>
            <p>Explore my projects by category.</p>
        </div>

        <!-- MAIN CATEGORIES -->
        <div id="category-list" class="row main-categories">
            <div class="col-md-6 col-lg-3">
                <div class="category-card" data-category="3d">
                    <img src="assets/img/portfolio/thumbs/3d-art-thumb.jpg" class="category-img" alt="3D">
                    <div class="category-info"><h3>3D Art</h3></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="category-card" data-category="ai">
                    <img src="assets/img/portfolio/thumbs/ai-thumb.jpg" class="category-img" alt="AI">
                    <div class="category-info"><h3>AI Generation</h3></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="category-card" data-category="design">
                    <img src="assets/img/portfolio/thumbs/graphic-design-thumb.jpg" class="category-img" alt="Design">
                    <div class="category-info"><h3>Graphic Design</h3></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="category-card" data-category="illustration">
                    <img src="assets/img/portfolio/thumbs/illustration-thumb.jpg" class="category-img" alt="Illustration">
                    <div class="category-info"><h3>Illustration</h3></div>
                </div>
            </div>
        </div>

        <!-- DETAIL VIEW -->
        <div id="category-view" class="hidden">
            <button id="back-btn" class="back-btn"><i class="fa fa-arrow-left"></i> Back to Categories</button>
            <h3 id="category-title" class="mb-4">Project Gallery</h3>
            <div id="category-gallery" class="portfolio-grid">
                <!-- Javascript Injected -->
            </div>
        </div>
    </div>
</section>

<!-- RESUME SECTION (RESTORED) -->
<section id="resume" class="section-padding resume-section">
    <div class="container">
        <div class="section-title">
            <span class="subtitle">CAREER PATH</span>
            <h2>Resume</h2>
        </div>
        
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft">
                <h4 class="mb-4 ps-4">Education</h4>
                <div class="timeline-item">
                    <span class="timeline-year">2019 - 2021</span>
                    <h5 class="timeline-title">BSc Animation</h5>
                    <p class="timeline-place">ICAT Design and Media College, Bangalore</p>
                </div>
                <div class="timeline-item">
                    <span class="timeline-year">2021</span>
                    <h5 class="timeline-title">Diploma in Autodesk Maya</h5>
                    <p class="timeline-place">MAAC Kottayam</p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight mt-5 mt-lg-0">
                <h4 class="mb-4 ps-4">Experience</h4>
                <div class="timeline-item">
                    <span class="timeline-year">2022 - Present</span>
                    <h5 class="timeline-title">3D Artist</h5>
                    <p class="timeline-place">AMRITA CREATE, Kollam</p>
                    <p class="text-muted mt-2 small">
                        Developed interactive educational tools (RISE, MEDSIM, OLABS). 
                        Responsibilties: High-quality 3D Modeling, Animation, Rigging, and Texturing.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="text-center mt-5">
             <a href="#" class="btn-primary" style="opacity: 0.8; cursor: not-allowed;">Download Resume (PDF)</a>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer-area">
    <div class="container">
        <span class="footer-brand">SARATH S POTTY</span>
        <div class="footer-social">
             <a href="https://www.linkedin.com/in/sarath-s-potty" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.instagram.com/sarath_s_potty" target="_blank"><i class="fa fa-instagram"></i></a>
            <a href="https://sarathspotty04.artstation.com/" target="_blank"><i class="ti-paint-bucket"></i></a>
        </div>
        <div class="copyright">
            &copy; <?php echo date("Y"); ?> All Rights Reserved.
        </div>
    </div>
</footer>

<?php include 'includes/footer.php'; ?>
