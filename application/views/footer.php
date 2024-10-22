   <!-- Footer Start -->
   <footer
      class="aai-footer pt-120"
      style=" background: url('assets/img/bg/footer-bg.jpeg') no-repeat center
          center/cover; background-color:#03091b;">
      <div class="container">
        <div class="aai-footer-support">
          <div class="row g-4 align-items-center">
            <div class="col-lg-6">
              <div class="aai-support-info d-flex align-items-center">
                <div>
                  <img src="assets/img/icons/headset.svg" alt="" />
                </div>
                <div class="aai-support-contact">
                  <p class="aai-support-text mb-1">
                  Stay connected with us and receive all updates directly in your inbox.
                  </p>
                  <!-- <a
                    href="tel:+1707797
                    0462"
                    class="aai-support-number">
                    +1 (707) 797 0462</a> -->
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="aai-newsletter">
                <form>
                  <div class="position-relative">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Enter your email"
                    />
                    <button class="aai-newsletter-btn">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="aai-footer-navigation-widgets py-80">
          <div class="row">
            <div
              class="col-xl-4 col-lg-4 col-md-12"
              data-aos="fade-right"
              data-aos-duration="1500"
              data-aos-delay="50"
            >
              <div class="aai-footer-info">
                <a href="" class="aai-footer-logo">
                  <img src="assets/img/logo/logo-f.svg" alt="" />
                </a>
                <p class="aai-footer-desc">
                  We provide one-stop solutions for all <br />
                  IT items; your bliss is just a click away. Star Tech trusts in
                  quality client
                </p>
                <div class="aai-social-links d-flex">
                  <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                  <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-twitter"></i
                  ></a>
                  <a href="http://" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-instagram"></i
                  ></a>
                  <a href="http://" target="_blank" rel="noopener noreferrer"
                    ><i class="fa-brands fa-youtube"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 mt-5 mt-lg-0">
              <div class="row">
              <div
                  class="col-xl-4 col-lg-4 col-md-4"
                  data-aos="fade-up"
                  data-aos-delay="500"
                  data-aos-duration="1500"
                >
                 
                </div>
                <div
                  class="col-xl-4 col-lg-4 col-md-4 mb-5 mb-lg-0"
                  data-aos="fade-up"
                  data-aos-delay="100"
                  data-aos-duration="1500"
                >
                  <nav class="aai-footer-nav">
                    <h3 class="aai-footer-nav-title">Sitemap</h3>
                    <ul class="aai-footer-nav-list">
                      <li class="aai-footer-nav-list-item">
                        <a href="main" class="aai-footer-nav-link"> Home </a>
                      </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="about" class="aai-footer-nav-link"> About Us </a>
                      </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="service1" class="aai-footer-nav-link">Services</a>
                      </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="product1" class="aai-footer-nav-link"> Product</a>
                      </li>
                      <!-- <li class="aai-footer-nav-list-item">
                        <a href="features.html" class="aai-footer-nav-link"> Feature </a>
                      </li> -->
                    </ul>
                  </nav>
                </div>
                <div
                  class="col-xl-4 col-lg-4 col-md-4 mb-5 mb-lg-0"
                  data-aos="fade-up"
                  data-aos-delay="300"
                  data-aos-duration="1500"
                >

              
                  <nav class="aai-footer-nav">
                    <h3 class="aai-footer-nav-title">Useful Links</h3>
                    <ul class="aai-footer-nav-list">
                      <li class="aai-footer-nav-list-item">
                        <a href="services1" class="aai-footer-nav-link"> Accreditation
                        info </a>
                      </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="services.html" class="aai-footer-nav-link">Accreditation Process </a>
                      </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="services.html" class="aai-footer-nav-link">
                      Privacy Policy
                        </a>
                      </li>
                      <li class="aai-footer-nav-list-item">
                        <a href="services.html" class="aai-footer-nav-link">Terms & Services </a>
                      </li>
                    </ul>
                  </nav>
                </div>
              
              </div>
            </div>
          </div>
        </div>
        <div class="aai-footer-copyright text-center">
          <p class="aai-copyright-text">Copyright @2023 Prosoft</p>
        </div>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- All JS -->
    <script src="assets/js/typed.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/glightbox-min.js"></script>
    <script src="assets/js/app.js"></script>

    
    <script>
  const sliderContainer = document.querySelector('.slider-container');
  const prevButton = document.querySelector('.prev-arrow');
  const nextButton = document.querySelector('.next-arrow');

  let currentIndex = 0;
  const imageWidth = 310;  // Adjust to match image width + margin-right
  const totalImages = document.querySelectorAll('.slider-container img').length / 2;  // Since images are duplicated

  // Function to move the slider to the next image
  function moveNext() {
    currentIndex++;
    sliderContainer.style.transition = 'transform 0.5s ease';
    sliderContainer.style.transform = `translateX(-${currentIndex * imageWidth}px)`;

    // Reset to the first image after the last one
    if (currentIndex === totalImages) {
      setTimeout(() => {
        sliderContainer.style.transition = 'none'; // Disable animation for the reset
        currentIndex = 0;
        sliderContainer.style.transform = `translateX(0)`;
      }, 500); // Matches the transition duration
    }
  }

  // Function to move the slider to the previous image
  function movePrev() {
    currentIndex--;
    if (currentIndex < 0) {
      sliderContainer.style.transition = 'none'; // Disable animation to reset instantly
      currentIndex = totalImages - 1; // Jump to the last image before animation starts
      sliderContainer.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
    }
    setTimeout(() => {
      sliderContainer.style.transition = 'transform 0.5s ease';
      currentIndex--;
      sliderContainer.style.transform = `translateX(-${currentIndex * imageWidth}px)`;
    }, 20); // Short timeout to let the jump happen instantly
  }

  // Automatic loop every 3 seconds (if desired)
  let sliderInterval = setInterval(moveNext, 3000);

  // Event listeners for buttons
  nextButton.addEventListener('click', () => {
    clearInterval(sliderInterval); // Stop auto slider when user interacts
    moveNext();
    sliderInterval = setInterval(moveNext, 3000); // Restart auto slider after interaction
  });

  prevButton.addEventListener('click', () => {
    clearInterval(sliderInterval); // Stop auto slider when user interacts
    movePrev();
    sliderInterval = setInterval(moveNext, 3000); // Restart auto slider after interaction
  });

</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>