<?php include('../includes/header.php'); ?>

<main>
    <!-- Hero/Banner Section -->
    <!-- Hero Section -->
    <section id="hero" class="hero text-white text-center py-5"
        style=" background-size: cover; background-position: center center; background-attachment: fixed;  height:400px">
        <!-- Image dimensions: 1920x1080 (Recommended for full-screen hero background) -->
        <div class="container mt-4 pt-5">
            <h1 class="display-4 ">Welcome to IRONIX</h1>
            <p class="lead">Where Fitness Meets Excellence. Join us today to start your journey towards a healthier and
                stronger you!</p>
            <a href="#membership" class="btn btn-light btn-lg">Get Started</a>
        </div>
    </section>


    <!-- About Us Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="display-4">About Us</h2>
                    <p>Ironix Gym is dedicated to providing top-notch fitness services for individuals of all fitness
                        levels. Our mission is to help you achieve your fitness goals in a supportive and motivating
                        environment.</p>
                    <p>Our gym features state-of-the-art equipment, a variety of classes, and highly experienced
                        trainers. Whether you're looking to lose weight, build muscle, or improve overall health, we
                        have a program tailored for you.</p>
                </div>
                <div class="col-md-6 ">
                    <img src="../assets/images/about-gym.png" alt="Gym Interior" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Programs & Services Section -->
    <section id="programs" class=" py-5 " style="background-color: #17153B;">
        <div class="container">
            <h2 class="display-4 pb-4 text-center text-light">Programs & Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="../assets/images/personal-training.png" class="card-img-top" alt="Personal Training">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Personal Training</strong></h5>
                            <p class="card-text">Get one-on-one sessions with our certified trainers for personalized
                                fitness plans.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="../assets/images/group-classes.png" class="card-img-top" alt="Group Classes">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Group Classes</strong></h5>
                            <p class="card-text">Join our fun and motivating group sessions, including Zumba, Yoga, and
                                more!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="../assets/images/yoga-pilates.png" class="card-img-top" alt="Yoga and Pilates">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Yoga & Pilates</strong></h5>
                            <p class="card-text">Strengthen your body and mind with our yoga and Pilates classes led by
                                expert instructors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5">
        <div class="container">
            <h2 class="display-4 text-center mb-4">What Our Members Say</h2>
            <p class="lead text-center mb-5">Don't just take our word for it – hear from our satisfied members who have
                experienced incredible transformations!</p>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Testimonial 1 -->
                    <div class="carousel-item active">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="../assets/images/member1.png" alt="Sarah Johnson" class="rounded-circle mb-3"
                                    width="100" height="100" loading="lazy">
                                <p class="card-text">"Ironix Gym is more than just a place to work out. The trainers are
                                    incredibly supportive and the atmosphere is motivating. I’ve seen amazing results
                                    and feel stronger than ever!"</p>
                                <footer class="blockquote-footer">Sarah Johnson, <cite
                                        title="Source Title">Member</cite></footer>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="carousel-item">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="../assets/images/member2.png" alt="David Lee" class="rounded-circle mb-3"
                                    width="100" height="100" loading="lazy">
                                <p class="card-text">"Joining Ironix Gym was the best decision I ever made. The programs
                                    are tailored to meet my personal goals, and the community here is very encouraging!"
                                </p>
                                <footer class="blockquote-footer">David Lee, <cite title="Source Title">Member</cite>
                                </footer>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="carousel-item">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="../assets/images/member3.png" alt="Rachel Adams" class="rounded-circle mb-3"
                                    width="100" height="100" loading="lazy">
                                <p class="card-text">"I’ve always been intimidated by gyms, but Ironix has made me feel
                                    welcome and comfortable from day one. I’m so happy with my progress!"</p>
                                <footer class="blockquote-footer">Rachel Adams, <cite title="Source Title">Member</cite>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>



    <!-- Gallery Section -->
    <!-- Gallery Section -->
    <section id="gallery" class="py-5 " style="background-color:#17153B;">
        <div class="container">
            <h2 class="display-4 text-center text-light mb-4">Gallery</h2>
            <p class="lead text-center text-light mb-5">Take a look at our state-of-the-art facilities, dedicated
                trainers, and amazing members.</p>

            <div class="row g-4">
                <!-- Gallery Image 1 -->
                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <img src="../assets/images/gallery1.png" class="card-img-top" alt="Gym Facility" loading="lazy">
                    </div>
                </div>
                <!-- Gallery Image 2 -->
                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <img src="../assets/images/gallery2.png" class="card-img-top" alt="Gym Equipment"
                            loading="lazy">
                    </div>
                </div>
                <!-- Gallery Image 3 -->
                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <img src="../assets/images/gallery3.png" class="card-img-top" alt="Training Session"
                            loading="lazy">
                    </div>
                </div>
                <!-- Gallery Image 4 -->
                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <img src="../assets/images/gallery4.png" class="card-img-top" alt="Yoga Class" loading="lazy">
                    </div>
                </div>
                <!-- Gallery Image 5 -->
                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <img src="../assets/images/gallery5.png" class="card-img-top" alt="Group Workout"
                            loading="lazy">
                    </div>
                </div>
                <!-- Gallery Image 6 -->
                <div class="col-md-4">
                    <div class="card shadow-lg">
                        <img src="../assets/images/gallery6.png" class="card-img-top" alt="Gym Events" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog Section (Optional) -->
    <!-- Blog/Articles Section -->
    <section id="blog" class="py-5">
        <div class="container">
            <h2 class="display-4 text-center mb-4">Latest Articles</h2>
            <p class="lead text-center mb-5">Get valuable insights, tips, and information on fitness, nutrition, and
                living a healthy lifestyle.</p>

            <div class="row g-4">
                <!-- Blog Post 1 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg">
                        <img src="../assets/images/blog1.png" class="card-img-top" alt="Blog Post 1" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title "><strong>5 Essential Tips for Beginners</strong></h5>
                            <p class="card-text">Starting your fitness journey? Check out these tips to make your
                                workouts more effective and enjoyable.</p>
                            <a href="blog-post1.html" class="btn button">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Blog Post 2 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg">
                        <img src="../assets/images/blog2.png" class="card-img-top" alt="Blog Post 2" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title"><strong>How to Fuel Your Body for Workouts</strong></h5>
                            <p class="card-text">Discover the best foods to eat before and after workouts to maximize
                                performance and recovery.</p>
                            <a href="blog-post2.html" class="btn button">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- Blog Post 3 -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg">
                        <img src="../assets/images/blog3.png" class="card-img-top" alt="Blog Post 3" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Understanding the Benefits of Yoga</strong></h5>
                            <p class="card-text">Yoga isn’t just about flexibility. Learn how it benefits your mental
                                and physical health.</p>
                            <a href="blog-post3.html" class="btn button ">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQ Section -->
    <!-- FAQ Section -->
    <section id="faq" class="py-5 bg-light">
        <div class="container">
            <h2 class="display-4 text-center mb-4">Frequently Asked Questions</h2>
            <p class="lead text-center mb-5">Find answers to the most common questions about our gym, memberships, and
                services.</p>

            <div class="accordion" id="faqAccordion">
                <!-- FAQ Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                            What are your gym's operating hours?
                        </button>
                    </h2>
                    <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Our gym is open 24/7, allowing members to work out whenever it’s convenient for them. Our
                            staff is available from 6 AM to 10 PM to assist.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                            Do you offer personal training sessions?
                        </button>
                    </h2>
                    <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we offer personalized training sessions tailored to your fitness goals. Contact us for
                            more details and pricing.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                            What types of memberships are available?
                        </button>
                    </h2>
                    <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We offer monthly, quarterly, and annual memberships, each with different pricing tiers to
                            fit your needs. Check our Pricing section for more details.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                            Can I try out the gym before committing to a membership?
                        </button>
                    </h2>
                    <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Absolutely! We offer a one-day free trial for all new members. Feel free to visit and
                            experience our facilities.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Us Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="display-4 text-center mb-4">Contact Us</h2>
            <p class="lead text-center mb-5">Get in touch with us or find us on the map below.</p>

            <div class="row g-4">
                <!-- Google Map -->
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1729.171355618014!2d78.098091!3d29.912034400000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3909498fdb9eb53d%3A0xc664d4dc3528b128!2sIronix%20Fitness%20Hub!5e0!3m2!1sen!2sin!4v1731155575153!5m2!1sen!2sin"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>


                <!-- Contact Form -->
                <div class="col-md-6">
                    <div id="loader" style="display:none;" class="loader"></div>

                    <form id="contactForm" method="POST" class="p-1 rounded ">
                        <h3 class="mb-3"> <strong> Send us a Message</strong></h3>
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control form-control-lg" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control form-control-lg" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control form-control-lg" id="message" name="message" rows="3"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn button">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>

    </style>
</main>

<?php include('../includes/footer.php'); ?>