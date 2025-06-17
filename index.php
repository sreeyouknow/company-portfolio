<script async src="https://www.googletagmanager.com/gtag/js?id=G-CR9JP6F5EP"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CR9JP6F5EP');
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RoyalLips Technologies</title>
  <link rel="stylesheet" href="./index.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="icon" type="image/png" href="assets/logor.webp">
</head>
<body>
  <header>
     <!-- Header Top Section -->
     <div class="header-one">
      <div>
          <i class="bi bi-envelope"></i> 
          <a href="mailto:amsaraj@royallipstech.com">amsaraj@royallipstech.com</a>
          <i class="bi bi-geo-alt"></i> 
          <a href="https://www.google.com/maps/place/Dharmapuri,+India" target="_blank">Dharmapuri, India</a>
          <i class="bi bi-clock"></i> 
          <span class="header-ind-time">IND: 00:00:00</span>
          <span class="header-us-time">US: 00:00:00</span>
          <script>
            document.addEventListener('DOMContentLoaded', () => {
                const indTimeElement = document.querySelector('.header-ind-time');
                const usTimeElement = document.querySelector('.header-us-time');
            
                function updateTime() {
                    const now = new Date();
            
                    // IST Time (India Standard Time, UTC+5:30)
                    const indTime = new Date(now.toLocaleString('en-US', { timeZone: 'Asia/Kolkata' }));
                    const indHours = String(indTime.getHours()).padStart(2, '0');
                    const indMinutes = String(indTime.getMinutes()).padStart(2, '0');
                    const indSeconds = String(indTime.getSeconds()).padStart(2, '0');
                    indTimeElement.textContent = `IND: ${indHours}:${indMinutes}:${indSeconds}`;
            
                    // EST Time (Eastern Standard Time, UTC-5:00)
                    const usTime = new Date(now.toLocaleString('en-US', { timeZone: 'America/New_York' }));
                    const usHours = String(usTime.getHours()).padStart(2, '0');
                    const usMinutes = String(usTime.getMinutes()).padStart(2, '0');
                    const usSeconds = String(usTime.getSeconds()).padStart(2, '0');
                    usTimeElement.textContent = `US: ${usHours}:${usMinutes}:${usSeconds}`;
                }
            
                setInterval(updateTime, 1000); // Update every second
                updateTime(); // Initialize time immediately
            });
            </script>  
      </div>
      <div class="button-imp">
        <button class="action-btn" data-type="Send Enquiry" data-phone="8870747290">Enquiry</button>
        <button class="action-btn" data-type="call" data-phone="8870747290">Call Support</button>      
          <script>
                function formatPhoneNumber(phoneNumber) {
            // Remove any whitespace and ensure country code is included
            phoneNumber = phoneNumber.trim();
            if (!phoneNumber.startsWith('+')) {
                phoneNumber = '+91' + phoneNumber; // Add default country code for India
            }
            return phoneNumber;
        }

        function handleActionButtons() {
            const buttons = document.querySelectorAll(".action-btn"); // Select all buttons with the class 'action-btn'

            buttons.forEach(button => {
                button.addEventListener("click", function () {
                    const actionType = button.getAttribute("data-type"); // 'Send Enquiry' or 'call'
                    const phoneNumber = button.getAttribute("data-phone");
                    const formattedNumber = formatPhoneNumber(phoneNumber);

                    if (actionType === "Send Enquiry") {
                        const message = "Hi.. I would like to connect with you.";
                        const whatsappUrl = `https://wa.me/${formattedNumber}?text=${encodeURIComponent(message)}`;
                        window.open(whatsappUrl, "_blank");
                    } else if (actionType === "call") {
                        window.location.href = `tel:${formattedNumber}`;
                    }
                });
            });
        }

        // Initialize the action buttons
        document.addEventListener("DOMContentLoaded", handleActionButtons);
          </script>
      </div>
  </div>
  <!-- Header Navigation Section -->
  <div class="header-two">
    <div class="base">
        <div>
            <img src="assets/logor.webp" alt="RoyalLips Pvt Ltd" onclick="goToFirstSlide()" style="cursor: pointer;">
        </div>
        
        <div>
            <p><span>ROYALLIPS</span><strong> Technologies</strong></p>
        </div>
    </div>
    <button id="menuToggle" class="menu-toggle">
        <i class="bi bi-list"></i> <!-- Hamburger icon -->
    </button>
    <nav class="navi" id="mobileNav">
        <div class="drop-1">
            <a href="#" onclick="goToFirstSlide(); return false;" class="drop-top">Website / Internet marketing</a>
        </div>
        <div class="drop-1">
            <a href="#" onclick="goToFirstSlide(); return false;" class="drop-top">Software Development</a>
        </div>
        <div class="drop-1">
            <a class="drop-top">List</a>
            <div class="drop-2">
                <a href="privacy-policy.html" target="_blank">Privacy Policy</a>
                
            </div>
        </div>
        <div class="drop-1">
            <a href="#" onclick="goToFirstSlide(); return false;" class="drop-top">Blog</a>
        </div>
    </nav>
</div>
<script>
    // Function to show the first slide
function goToFirstSlide() {
    const slides = document.querySelectorAll('.slide'); // Select all slides
    slides.forEach(slide => {
        slide.style.display = 'none'; // Hide all slides
    });

    if (slides.length > 0) {
        slides[0].style.display = 'block'; // Show the first slide
    }
}

// Toggle mobile navigation
document.getElementById('menuToggle').addEventListener('click', function () {
    const mobileNav = document.getElementById('mobileNav');
    mobileNav.classList.toggle('show'); // Toggle the 'show' class to display/hide the menu
});

// Toggle dropdown content on click
const dropTops = document.querySelectorAll('.drop-top');
dropTops.forEach(dropTop => {
    dropTop.addEventListener('click', function (event) {
        event.preventDefault(); // Prevent default anchor behavior
        const dropContent = this.nextElementSibling; // Get the next sibling (the dropdown content)
        if (dropContent) {
            dropContent.classList.toggle('show'); // Toggle the 'show' class
        }
    });
});

</script>
</header>
  <div class="slider-container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/css/intlTelInput.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/intlTelInput.min.js" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <div class="slider" id="slider">
      <div class="slide">
        <section id="index-page">
            <div class="container-1">
                <div class="content">
                    <h1>GROW YOUR <span>BUSINESS</span></h1>
                    <h3>Let us make your website stand out. <span>Innovation Web Development and Marketing Services</span></h3>
                    <div class="content-1">
                        <a href="#">Web Application</a>
                        <a href="#">Software Develpement</a><br><br>
                        <a href="#">Website/ Internet Marketing</a> 
                    </div>
                </div>
                <div class="contact">
                    <h3>Contact Us</h3>
                    <form action="submit_form.php" method="POST" id="contact-form">
                        <input type="hidden" name="form_type" value="contact">
                        <input type="text" name="name" id="name" placeholder="Full Name*" required>
                        <input type="email" name="email" id="email" placeholder="Email Address*" required>
                        <input type="tel" name="phone" id="phone" placeholder="Phone Number*" required>
                        <textarea name="message" id="message" placeholder="Message*" required></textarea>
                        <button type="submit">Submit</button>
                    </form>
                    <?php if (isset($_GET['status']) && isset($_GET['message'])): ?>
    <script>
        // Get status and message from PHP
        const status = "<?php echo htmlspecialchars($_GET['status']); ?>";
        const message = "<?php echo htmlspecialchars($_GET['message']); ?>";
        
        // Show SweetAlert popup
        if (status === "success") {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: message,
            });
        } else if (status === "error") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: message,
            });
        }

        // Remove query parameters from the URL without reloading the page
        history.replaceState(null, null, window.location.pathname);
    </script>
    <?php endif; ?>
                </div>
            </div>
        </section>      
          <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/intlTelInput.min.js"></script>
          <script>
              // Ensure the DOM is fully loaded before initializing
              document.addEventListener('DOMContentLoaded', function() {
                  var input = document.querySelector("#phone");
      
                  var iti = intlTelInput(input, {
                      initialCountry: "in", // Set default country (India)
                      preferredCountries: ["in", "us", "gb", "ca", "de"], // Add your preferred countries
                      separateDialCode: true, // Show the dial code separately
                      nationalMode: false, // Force international mode (shows the full number with country code)
                      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.8/build/js/utils.js" // Include utils.js for validation and formatting
                  });
              });
          </script>
      </div>
      <div class="slide">
        <section id="welcome-page"> 
            <div class="main01">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="main-content">
                    <img src="assets/line02.webp" alt="Decorative Line" id="line02">
                    <h1 id="wel-head">Welcome To<br><span>ROYALLIPS </span><span> TECHNOLOGIES</span></h1>
                    <div class="image-content">
                        <img src="assets/women.avif" alt="Smiling person holding a laptop">
                    </div>
                    <div class="text-content">
                        <h2>Who We Are</h2>
                        <p>RoyalLips Technologies Pvt Ltd empowers enterprises with effective technology innovation services. We assist you in building a strong online presence and achieving your business goals effectively. Aware of the newest trends and challenges, we offer you individualised services that will ensure success in navigating through the context of today's highly competitive business world.</p>
                        <div class="button-imp">
                            <button class="action-btn" data-type="Send Enquiry" data-phone="8870747290">Enquiry</button>
                            <button class="action-btn" data-type="call" data-phone="8870747290">Call Support</button>                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </div>
      <div class="slide">
        <section id="welcome-page"> 
            <div class="main01">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="main-content">
                    <img src="assets/line02.webp" alt="Decorative Line" id="line02">
                    <h1 id="wel-head">Welcome To<br><span>ROYALLIPS </span><span> TECHNOLOGIES</span></h1>
                    <div class="image-content">
                        <img src="assets/women.avif" alt="Smiling person holding a laptop">
                    </div>
                    <div class="text-content">
                        <h2 id="head-our01">Our Mission</h2>
                        <p id="para-our01">The main goal of our company is to deliver a sphere of service-oriented web-related services that contribute to business achievements within the economic realities of the Web. Our goal and mission is to produce high-quality untapped innovation that corresponds with the needs of our clients and guarantees their accomplishment in the modern world full of competitiveness.</p>
                        <h2 id="head-our02">Our Vision</h2>
                        <p id="para-our02">Established and emerging firm in Dharmapuri and neighboring regions, our firm should be among the best providers of technology solutions in terms of quality, innovation as well as customer satisfaction.</p>
                        <div class="button-imp">
                            <button class="action-btn" data-type="Send Enquiry" data-phone="8870747290">Enquiry</button>
                            <button class="action-btn" data-type="call" data-phone="8870747290">Call Support</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </div>
      <div class="slide">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <div class="box-full">
            <div class="circles"></div>
            <div class="circles"></div>
            <div class="circles"></div>
            <div class="circles"></div>
            <div class="image-container">
                <img src="assets/computer01.avif" alt="sample">
            </div>
            <div class="rectangle">
                <div class="stats-section">
                    <div class="stat-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <span class="number">60+</span>
                            <span class="label">Countries</span>
                        </div>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-calendar-alt"></i>
                        <div>
                            <span class="number">15+</span>
                            <span class="label">IT Experience</span>
                        </div>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-shield"></i>
                        <div>
                            <span class="number">98.9%</span>
                            <span class="label">Satisfied Clients</span>
                        </div>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-users"></i>
                        <div>
                            <span class="number">800+</span>
                            <span class="label">Clients</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
      </div>     
      <div class="slide">
        <div class="provide">
            <div class="background"></div>
            <div class="container">
                <div class="content-01"><br><br><br>
                    <h2>We Provide Numerous IT Services on Your Success</h2><br>
                    <div class="paragraphs">
                        <div class="paragraph active">
                            <h1 id="provide-head">Website / Internet Marketing Services</h1>
                            <p id="provide-para">We craft advanced static and dynamic websites designed to captivate your audience and drive engagement. Our marketing solutions include SEO, social media strategies, and content optimization, ensuring your brand stands out in the competitive digital landscape. Dependable and user-friendly, our services focus on building your brand and increasing your online reach effectively.</p>
                            <div class="button-imp">
                                <button class="action-btn" data-type="Send Enquiry" data-phone="8870747290">Enquiry</button>
                                <button class="action-btn" data-type="call" data-phone="8870747290">Call Support</button>
                            </div>
                        </div>
                    </div>
                    <div class="image-provide">
                        <img src="assets/group01.avif" alt="">
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="slide">
        <div class="provide">
            <div class="background"></div>
            <div class="container">
                <div class="content-01">
                    <h2>We Provide Numerous IT Services on Your Success</h2>
                    <div class="paragraphs">
                        <div class="paragraph active">
                            <h1 id="provide-head">Software Development</h1>
                            <p id="provide-para">Streamline your business processes with our innovative Software Development solutions. We specialize in creating customized, high-performance software that meets your unique requirements. From enterprise solutions to user-friendly applications, our development process ensures quality, reliability, and scalability. Whether you're looking to automate tasks, enhance productivity, or improve customer experience, our affordable software solutions are the perfect choice to take your business to the next level.</p>
                            <div class="button-imp">
                                <button class="action-btn" data-type="Send Enquiry" data-phone="8870747290">Enquiry</button>
                                <button class="action-btn" data-type="call" data-phone="8870747290">Call Support</button>
                            </div>
                        </div>
                    </div>
                    <div class="image-provide">
                        <img src="assets/group01.avif" alt="">
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="slide">
        <div class="com-choose">
            <div class="choose-box"></div>
                <div class="choose-1">
                    <h2>What Makes Our Customer Choose Us?</h2>
                    <p><strong>Advanced Design:</strong>We have a skilled creative team who helps to develop outstanding designs that are engaging to your audience.</p>    
                    <p><strong>Affordable Pricing: </strong>We provide our tuition services at a relatively cheap price when compared to other providers of similar services, thus guaranteeing optimum value for your money</p>    
                    <p><strong>Quality Assurance:</strong>We also respect quality to ensure that we give optimal solutions that meet your expectations.</p>    
                    <p><strong>Quick Support:</strong>Our dedicated support team is always ready to assist you, ensuring seamless operation and maintenance of your digital assets.</p>     
                </div>
                <div class="image-content">
                <div class="circle-why">
                    <div class="why">
                        <div class="why-choose-us">
                            <h3>Why</h3>
                            <hr id="line-hr">
                            <p>Choose Us</p>
                        </div>
                    </div>
                </div>
                <div class="feature-circle-container">
                    <div class="feature-circle">1</div>
                    <div class="feature-circle">2</div>
                    <div class="feature-circle">3</div>
                    <div class="feature-circle">4</div>
                    <div class="feature-circle">5</div>
                </div>
                <div class="features">
                    <div class="feature">
                        <p>Advanced Design</p>
                    </div>
                    <div class="feature">
                        <p>Creative Team</p>
                    </div>
                    <div class="feature">
                        <p>Affordable Price</p>
                    </div>
                    <div class="feature">
                        <p>Quality Assurance</p>
                    </div>
                    <div class="feature">
                        <p>Quick Support</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="slide">
        <div class="circle-main"></div>
        <div class="circle-main"></div>
        <div class="img-container">
            <div class="img-container01">
                <h3>End-to-end Web & IT Solutions with</h3>
                <h1>Dependable <span>Technologies</span></h1>
                <nav>
                    <li><img src="assets/program/php.webp" alt=""><a href="#">PHP</a></li>
                    <li><img src="assets/program/python.webp"alt=""><a href="#">Python</a></li>
                    <li><img src="assets/program/java.webp" alt=""><a href="#">JAVA</a></li>
                    <li><img src="assets/program/sql.webp" alt=""><a href="#">SQL</a></li>
                    <li><img src="assets/program/flutter.webp" alt=""><a href="#">Flutter</a></li>
                    <li><img src="assets/program/wordpress.webp" alt=""><a href="#">Wordpress</a></li>
                    <li><img src="assets/program/joomla.webp" alt=""><a href="#">Joomla</a></li>
                    <li><img src="assets/program/ajax.webp" alt=""><a href="#">AJAX</a></li>
                    <li><img src="assets/program/js.webp" alt=""><a href="#">Java Script</a></li>
                    <li><img src="assets/program/reactjs.webp" alt=""><a href="#">React Js</a></li>
                    <li><img src="assets/program/laravel.webp" alt=""><a href="#">Laraval</a></li>
                    <li><img src="assets/program/figma.webp" alt=""><a href="#">Figma</a></li>
                    <li><img src="assets/program/ai.webp" alt=""><a href="#">AI</a></li>
                    <li><img src="assets/program/machinelearninig.webp" alt=""><a href="#">Machine learning</a></li>
                </nav>
                <div class="button-imp01">
                    <button class="action-btn" data-type="Send Enquiry" data-phone="8870747290">Enquiry</button>
                    <button class="action-btn" data-type="call" data-phone="8870747290">Call Support</button>
                </div>
            </div>
            <div class="img-container02">
                <div class="circle01"></div>
                    <div class="circle01-sub"></div>
                
                <div class="circle-border01">
                    <div class="circle-outer">
                        <img src="assets/program/php.webp" alt="">
                        <img src="assets/program/python.webp"alt="">
                        <img src="assets/program/java.webp" alt="">
                        <img src="assets/program/sql.webp" alt="">
                        <img src="assets/program/flutter.webp" alt="">
                        <img src="assets/program/wordpress.webp" alt="">
                        <img src="assets/program/joomla.webp" alt="">
                        <img src="assets/program/ajax.webp" alt="">
                        <img src="assets/program/js.webp" alt="">
                        <img src="assets/program/laravel.webp" alt="">
                        <img src="assets/program/figma.webp" alt="">
                        <img src="assets/program/ai.webp" alt="">
                        <img src="assets/program/machinelearninig.webp" alt="">
                    </div>
                    <div class="circle-border02">
                        <img src="assets/wrokmen.webp" alt=""> 
                    </div>  
                </div>
            </div>
        </div>
      </div>
      <div class="slide">
        <div class="main-container">
            <div class="right-container">
                <h2>Our Client</h2>
                <h4>Trusted By Established leaders and Innovative Startups</h4>
                <div class="image-client">
                <img src="assets/01.webp" alt="">
                <img src="assets/02.webp" alt="">
                <img src="assets/03.webp" alt="">
                <img src="assets/04.webp" alt="">
                <img src="assets/05.webp" alt="">
                <img src="assets/06.webp" alt="">
                <img src="assets/07.webp" alt="">
                <img src="assets/08.webp" alt="">
                <img src="assets/09.webp" alt="">
                <img src="assets/10.webp" alt="">
                <img src="assets/11.webp" alt="">
                <img src="assets/12.webp" alt="">
                <img src="assets/13.webp" alt="">
                <img src="assets/14.webp" alt="">
                <img src="assets/15.webp" alt="">
                <img src="assets/16.webp" alt="">
                <img src="assets/17.webp" alt="">
                <img src="assets/18.webp" alt="">
                <img src="assets/19.webp" alt="">
                <img src="assets/20.webp" alt="">
                <img src="assets/21.webp" alt="">
                <img src="assets/22.webp" alt="">
                <img src="assets/23.webp" alt="">
                </div>
                <div class="red-color"></div>
            </div>
            <div class="left-container">
                <img src="assets/crop-image.webp" alt="">
            </div>
        </div>
      </div>
      <div class="slide">
        <div class="circle-request"></div>
        <div class="circle-request"></div>
        <div class="circle-request"></div>
        <div class="circle-request"></div>
        <div class="prof">
            <div class="prof-1">
                <h3>Trusted & Professional Website Designers in Dharmapuri</h3>
                <p>Looking for reliable and skilled website designers in Dharmapuri? Our team of experts specializes in creating visually stunning, high-performing websites tailored to your business needs. Whether you need a static website, dynamic design, or a complete e-commerce solution, we deliver quality and professionalism you can trust. <span>Elevate your brand’s online presence with our affordable and innovative website design services.</span></p>
            </div>
            <div class="prof-2">
                <h3>Request a Free Quote</h3>
                <h4>Enter your details we will connect you with the right person</h4>
                <form action="submit_form.php" method="POST" id="contact-form">
                        <input type="hidden" name="form_type" value="contact">
                        <div class="row">
                        <input type="text" name="name" id="name" placeholder="Full Name*" required>
                        <input type="email" name="email" id="email" placeholder="Email Address*" required>
                        </div>
                        <input type="number" name="phone" id="phone" placeholder="Phone Number*" required>
                        <textarea name="message" id="message" placeholder="Message*" required></textarea>
                        <button type="submit">Submit</button>
                    </form>
                <?php if (isset($_GET['status']) && isset($_GET['message'])): ?>
    <script>
        // Get status and message from PHP
        const status = "<?php echo htmlspecialchars($_GET['status']); ?>";
        const message = "<?php echo htmlspecialchars($_GET['message']); ?>";
        
        // Show SweetAlert popup
        if (status === "success") {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: message,
            });
        } else if (status === "error") {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: message,
            });
        }

        // Remove query parameters from the URL without reloading the page
        history.replaceState(null, null, window.location.pathname);
    </script>
    <?php endif; ?>
            </div>
        </div>
      </div>
      <div class="slide">
        <div class="stories-page">
            <div class="top-story">
                <div class="success">
                    <h2>Success Stories</h2>
                </div>
                <div class="image-story">
                    <img src="assets/stories02.avif" alt="success">
                </div>
            </div>
            <div class="stories">
                <div class="testimonial-container">
                    <div class="testimonial">
                        <img src="assets/logor.webp" alt="Logo">
                        <h3>Jose Parker</h3>
                        <p>JoseShopping</p>
                        <div class="stars">★★★★★</div>
                        <div class="circle-decoration"></div>
                    </div>
                    <div class="testimonial">
                        <img src="assets/logor.webp" alt="Logo">
                        <h3>Saraswathi</h3>
                        <p> AMSGreenlife</p>
                        <div class="stars">★★★★★</div>
                        <div class="circle-decoration"></div>
                    </div>
                    <div class="testimonial">
                        <img src="assets/logor.webp" alt="Logo">
                        <h3>Kumaraguru</h3>
                        <p>Maruthi Polytechnic</p>
                        <div class="stars">★★★★★</div>
                        <div class="circle-decoration"></div>
                    </div>
                    <div class="testimonial">
                        <img src="assets/logor.webp" alt="Logo">
                        <h3>Pavithra</h3>
                        <p>Afmmastery4</p>
                        <div class="stars">★★★★★</div>
                        <div class="circle-decoration"></div>
                    </div>
                    <div class="testimonial">
                        <img src="assets/logor.webp" alt="Logo">
                        <h3>Srinivasan</h3>
                        <p>Pan Masala</p>
                        <div class="stars">★★★★★</div>
                        <div class="circle-decoration"></div>                       
                    </div>
                    <div class="testimonial">
                        <img src="assets/logor.webp" alt="Logo">
                        <h3>Richard</h3>
                        <p>eTransports & Tours</p>
                        <div class="stars">★★★★★</div>
                        <div class="circle-decoration"></div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="slide">
        <div class="main-one">
            <main>
                <section class="worldwide">
                <h2>Our Worldwide Presence</h2>
                <hr id="line-about">
                <div class="flags">
                    <div><img src="assets/flag/india.webp" alt="India"><p>India</p></div>
                    <div><img src="assets/flag/singapore.png" alt="Singapore"><p>Singapore</p></div>
                    <div><img src="assets/flag/Canada.png" alt="Canada"><p>Canada</p></div>
                    <div><img src="assets/flag/France.png" alt="France"><p>France</p></div>
                    <div><img src="assets/flag/usa.png" alt="USA"><p>USA</p></div>
                    <div><img src="assets/flag/uk.png" alt="UK"><p>UK</p></div>
                    <div><img src="assets/flag/Australia.webp" alt="Australia"><p>Australia</p></div>
                </div>
                </section>
            
                <section class="info-about">
                <div class="about">
                    <h3>About Us</h3>
                    <hr>
                    <h4>Royallips Technologies</h4>
                    <p>RoyalLips Technologies Pvt Ltd empowers enterprises with effective technology innovation services. We assist you in building a strong online presence and achieving your business goals effectively. Aware of the newest trends and challenges, we offer you individualised services that will ensure success in navigating through the context of today's highly competitive business world.</p>
                </div>
                <div class="information">
                    <h3>Information</h3>
                    <hr>
                    <div class="data-ul">
                        <ul>
                            <li><a href="#" onclick="goToFirstSlide(); return false;">Home</a></li>
                            <li><a href="#" onclick="goToFirstSlide(); return false;">Web / IM</a></li>
                            <li><a href="#" onclick="goToFirstSlide(); return false;">SD</a></li>
                            <li><a href="#" onclick="goToFirstSlide(); return false;">List</a></li>
                        </ul>
                        <ul>
                            <li>Web Development</li>
                            <li>Web Port Development</li>
                            <li>Cloud Computing</li>
                            <li>Mobile Application Development</li>
                            <li>Software Solutions</li>
                        </ul>
                    </div>
                </div>
                <div class="contact-about">
                    <h3>Contact Us</h3>
                    <hr>
                    <br>
                    <address>
                    <div class="first-address">
                    Royallips Technologies Pvt Ltd <br>
                    (IT Division of Twinstarz Enterprises) <br>
                    First Floor, Medplus, Kumarsamypettai, <br>
                    Dharmapuri - 636701 <br> <br>
                    </div>
                    <div class="about-last">
                        <i class="bi bi-envelope"> 
                        <a href="mailto:amsaraj@royallipstech.com">amsaraj@royallipstech.com</a></i>
                        <i class="bi bi-geo-alt">
                        <a href="https://www.google.com/maps/place/Dharmapuri,+India" target="_blank">Dharmapuri, India</a></i> 
                        <i class="bi bi-clock">
                        <span class="about-last-ind-time">IND: 00:00:00</span>
                        <span class="about-last-us-time">US: 00:00:00</span></i> 
                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                const indTimeElement = document.querySelector('.about-last-ind-time');
                                const usTimeElement = document.querySelector('.about-last-us-time');
                            
                                function updateTime() {
                                    const now = new Date();
                            
                                    // IST Time (India Standard Time, UTC+5:30)
                                    const indTime = new Date(now.toLocaleString('en-US', { timeZone: 'Asia/Kolkata' }));
                                    const indHours = String(indTime.getHours()).padStart(2, '0');
                                    const indMinutes = String(indTime.getMinutes()).padStart(2, '0');
                                    const indSeconds = String(indTime.getSeconds()).padStart(2, '0');
                                    indTimeElement.textContent = `IND: ${indHours}:${indMinutes}:${indSeconds}`;
                            
                                    // EST Time (Eastern Standard Time, UTC-5:00)
                                    const usTime = new Date(now.toLocaleString('en-US', { timeZone: 'America/New_York' }));
                                    const usHours = String(usTime.getHours()).padStart(2, '0');
                                    const usMinutes = String(usTime.getMinutes()).padStart(2, '0');
                                    const usSeconds = String(usTime.getSeconds()).padStart(2, '0');
                                    usTimeElement.textContent = `US: ${usHours}:${usMinutes}:${usSeconds}`;
                                }
                            
                                setInterval(updateTime, 1000); // Update every second
                                updateTime(); // Initialize time immediately
                            });
                            </script>  
                    </div>
                    </address>
                </div>
                </section>
            </main>
        </div>
      </div>
    </div>
  </div>

  <div class="side-bar">
    <a href="tel:+918870747290" target="_blank">
        <img src="assets/phone.webp" alt="Phone">
    </a>
    <a href="https://wa.me/918870747290?text=Hii.. I would like to connect with you." target="_blank">
        <img src="assets/whatsapp.webp" alt="WhatsApp Icon">
    </a>
    <a href="sms:+918870747290?body=Hii.. I would like to connect with you." target="_blank">
        <img src="assets/message.webp" alt="Message">
    </a>
</div>
<style>
    /*---Side Bar---*/
.side-bar {
  position: fixed;
  top: 35%;
  right: -100px; 
  transform: translateY(-50%);
  width: 4vw;
  height: auto;
  padding: 0.3vmax 2vmax 0 0.3vmax;
  background-color: var(--color1);
  box-shadow: -2px 2px 5px rgba(0, 0, 0, 0.3);
  border-radius: 10px 0 0 10px;
  text-align: center;
  animation: slideIn 2s ease-out forwards; 
}
.side-bar img {
  width: 3vw;
  height: 6vh;
  padding: 20%;
  border-radius: 50%;
}

@keyframes slideIn {
  from {
      right: -100px;
  }
  to {
      right: 0;
  }
}
</style>
  <button id="prevBtn" class="nav-btn">Prev</button>
  <button id="nextBtn" class="nav-btn">Next</button>

  <script src="./index.js"></script>
</body>
</html>