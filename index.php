<?php
session_start();
require './connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8" />
     <link rel="shortcut icon" type="x-icon" href="./img/logo.png">
     <title>PT. Alpha Sigma Digital</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
     <meta content="" name="keywords" />
     <meta content="" name="description" />
     <meta property="og:title" content="Alpha Sigma Digital">
     <meta property="og:description" content="We Solve Problems">
     <meta property="og:image" content="https://alphasigma.id/img/logo.png">
     <meta property="og:url" content="https:://alphasigma.id">
     <meta property="og:type" content="website">

     <!-- Favicon -->
     <link href="img/favicon.ico" rel="icon" />

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
          rel="stylesheet" />

     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

     <!-- Libraries Stylesheet -->
     <link href="lib/animate/animate.min.css" rel="stylesheet" />
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

     <!-- Customized Bootstrap Stylesheet -->
     <link href="css/bootstrap.min.css" rel="stylesheet" />

     <!-- Template Stylesheet -->
     <link href="css/style.css" rel="stylesheet" />

     <!-- Sweet alert -->
     <script src="
     https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.all.min.js
     "></script>
     <link href="
     https://cdn.jsdelivr.net/npm/sweetalert2@11.14.0/dist/sweetalert2.min.css
     " rel="stylesheet">
</head>

<body>
     <!-- Spinner Start -->
     <div id="spinner"
          class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
          <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem" role="status">
               <span class="sr-only">Loading...</span>
          </div>
     </div>
     <!-- Spinner End -->

     <!-- Navbar Start -->
     <div class="container-fluid sticky-top">
          <div class="container-fluid">
               <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <a href="index.html" class="navbar-brand ms-3">
                         <img src="img/logo1.png" class="logo" alt="..." width="100" />
                    </a>
                    <button type="button" class="navbar-toggler ms-auto me-0" id="hamburger" data-bs-toggle="collapse"
                         data-bs-target="#navbarCollapse">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                         <div class="navbar-nav ms-auto fst-italic text-capitalize">
                              <a href="#" class="nav-item nav-link" id="nav-home">Home</a>
                              <a href="#about" class="nav-item nav-link" id="nav-about">About</a>
                              <a href="#service" class="nav-item nav-link" id="nav-service">Services</a>
                              <a href="#case" class="nav-item nav-link" id="nav-case">Projects</a>
                              <a href="#team" class="nav-item nav-link" id="nav-team">Team</a>
                         </div>
                    </div>
               </nav>
          </div>
     </div>
     <!-- Navbar End -->

     <!-- Hero Start -->
     <div class="container-fluid pt-5 bg-primary hero-header mb-5" id="hero">
          <div class="container pt-5">
               <div class="row g-5 pt-5">
                    <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                         <h1 class="display-4 text-white mb-4 animated slideInRight" id="tes">
                              PT. Alpha Sigma Digital
                         </h1>
                         <p class="text-white mb-4 animated slideInRight">
                              Welcome to PT. Alpha Sigma Digital, your trusted partner in web development and custom
                              Windows app solutions. We bring digital innovation tailored to support your business, from
                              responsive websites to robust desktop applications. Together, we’ll help you achieve
                              digital solutions that align with your business needs and vision. Yes, we solve problems.
                         </p>
                         <a id="btn" href="#about"
                              class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight"><span
                                   id="read">Read More</span></a>
                    </div>
                    <div class="col-lg-6 align-self-end text-center text-lg-end">
                         <img class="img-fluid" src="img/ab.png" alt="" />
                    </div>
               </div>
          </div>
     </div>
     <!-- Hero End -->

     <!-- About Start -->
     <div class="container-fluid py-5" id="about">
          <div class="container">
               <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                         <div class="about-img">
                              <img class="img-fluid" src="img/about-img.jpg" />
                         </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                         <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">
                              About Us
                         </div>
                         <h1 class="mb-4">
                              We're Best in IT Industry with 5 Years of Experience
                         </h1>
                         <p class="mb-4">
                              PT. Alpha Sigma Digital was founded by Jaya Susila with a vision to lead in the world of information
                              technology. With a team of experienced professionals, we are committed to delivering
                              top-notch IT services that are specifically designed to meet the unique needs of each
                              client because today customized apps are the future of IT. We believe the right technology
                              can drive business growth and enhance operational efficiency.
                         </p>
                    </div>
               </div>
          </div>
     </div>
     <!-- About End -->

     <!-- Service Start -->
     <div class="container-fluid bg-light mt-5 py-5" id="service">
          <div class="container py-5">
               <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                         <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">
                              Our Services
                         </div>
                         <h1 class="mb-4">We offer a comprehensive range of IT services</h1>
                         <p class="mb-4">
                              Specializing in web development and fully customized Windows app creation. Whether you
                              need a dynamic website or a powerful desktop application, PT. Alpha Sigma Digital is here
                              to provide the right solution tailored to your needs.
                         </p>
                    </div>
                    <div class="col-lg-7">
                         <div class="row g-4">
                              <div class="col-md-6">
                                   <div class="row g-4">
                                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                             <div
                                                  class="service-item d-flex flex-column justify-content-center text-center rounded">
                                                  <div class="service-icon btn-square">
                                                       <i class="bi bi-globe fa-2x"></i>
                                                  </div>
                                                  <h5 class="mb-3">Web development</h5>
                                                  <p>
                                                       Website development involves creating, designing, and
                                                       maintaining websites using languages like HTML, CSS, and
                                                       JavaScript to build functional, user-friendly, and surely beautiful website.
                                                  </p>
                                             </div>
                                        </div>
                                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                             <div
                                                  class="service-item d-flex flex-column justify-content-center text-center rounded">
                                                  <div class="service-icon btn-square">
                                                       <i class="bi bi-display fa-2x"></i>
                                                  </div>
                                                  <h5 class="mb-3">Fully Customized App</h5>
                                                  <p>
                                                       We are mastering customized app with an advance platform that
                                                       allow businesses to create tailored solutions for managing complex data
                                                       and workflows by user-friendly system.
                                                  </p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-6 pt-md-4">
                                   <div class="row g-4">
                                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                             <div
                                                  class="service-item d-flex flex-column justify-content-center text-center rounded">
                                                  <div class="service-icon btn-square">
                                                       <i class="bi bi-phone-vibrate fa-2x"></i>
                                                  </div>
                                                  <h5 class="mb-3">Mobile App</h5>
                                                  <p>
                                                       Using integrated fresh technologies to provide a dynamic mobile App whether under IOS or 
                                                       Android, from customized POS to Managing System that help to gain trusts and productivity.
                                                  </p>
                                             </div>
                                        </div>
                                        <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                             <div
                                                  class="service-item d-flex flex-column justify-content-center text-center rounded">
                                                  <div class="service-icon btn-square">
                                                       <i class="bi bi-megaphone fa-2x"></i>
                                                  </div>
                                                  <h5 class="mb-3">Digital Marketing Agency</h5>
                                                  <p>
                                                       Involves concepting, creating, editing, and
                                                       publishing various media contents, campaign & copywrite, leveraging platforms like
                                                       social media, SEO, and professional ads to increase sales & revenue instantly.
                                                  </p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- Service End -->

     <!-- Feature Start -->
     <div class="container-fluid bg-primary feature pt-5" id="feature">
          <div class="container pt-5">
               <div class="row g-5">
                    <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                         <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">
                              Why Choose Us
                         </div>
                         <h1 class="text-white mb-4">
                              We're fast growing IT company with 10 years of experience
                         </h1>
                    </div>
                    <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                         <img class="img-fluid" src="img/why.png" alt="" />
                    </div>
               </div>
          </div>
     </div>
     <!-- Feature End -->

     <!-- Case Start -->
     <div class="container-fluid bg-light py-5" id="case">
          <div class="container py-5">
               <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 1200px">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">
                         Portfolio
                    </div>
                    <h1 class="mb-4">Portfolio</h1>
                    <p class="mb-4">
                         Explore our portfolio, which reflects our dedication and expertise in IT. From web development
                         projects to fully customized Windows applications, we strive to deliver results that exceed expectations.
                         PT. Alpha Sigma Digital is your partner in achieving technological success.
                    </p>
               </div>
               <div class="row g-4">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                         <div class="case-item position-relative overflow-hidden rounded mb-2">
                              <img class="img-fluid" src="img/Dewata K9.jpg" alt="" />

                         </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                         <div class="case-item position-relative overflow-hidden rounded mb-2">
                              <img class="img-fluid" src="img/Bhayangkari Lumajang.jpg" alt="" />

                         </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                         <div class="case-item position-relative overflow-hidden rounded mb-2">
                              <img class="img-fluid" src="img/Kencana_Jaya.jpg" alt="" />

                         </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                         <div class="case-item position-relative overflow-hidden rounded mb-2">
                              <img class="img-fluid" src="img/Mindfulness Montessori.jpg" alt="" />

                         </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                         <div class="case-item position-relative overflow-hidden rounded mb-2">
                              <img class="img-fluid" src="img/SBR di hati.jpg" alt="" />
                         </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                         <div class="case-item position-relative overflow-hidden rounded mb-2">
                              <img class="img-fluid" src="img/tobacco.jpg" alt="" />
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- Case End -->
<!-- Team Start -->
<div class="container-fluid bg-light py-5" id="team">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">
                    Our Team
                </div>
                <h1 class="mb-4">Meet Our Experienced Team Members</h1>
                <p class="mb-4">
                    At PT. Alpha Sigma Digital, we take pride in our dedicated team of professionals. Each
                    team member brings unique expertise in web development, mobile and desktop app creation, working
                    together to deliver the best solutions for our clients. Committed to innovation and
                    quality, our team is ready to help you achieve your business goals through technology.
                </p>
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="team-item bg-white text-center rounded p-4 pt-0">
                                    <img class="img-fluid rounded-circle p-4" src="img/team1.jpg" alt="" />
                                    <h5 class="mb-0">Made Danindra Adhikarisma</h5>
                                    <small>Director of Sales & Marketing</small>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="team-item bg-white text-center rounded p-4 pt-0">
                                    <img class="img-fluid rounded-circle p-4" src="img/team3.jpg" alt="" />
                                    <h5 class="mb-0">Made Widiantara</h5>
                                    <small>App Developer</small>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                <div class="team-item bg-white text-center rounded p-4 pt-0">
                                    <img class="img-fluid rounded-circle p-4" src="img/team4.jpg" height="400" width="400" alt="" />
                                    <h5 class="mb-0">I Made Widiatmika</h5>
                                    <small>App Developer</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6 pt-md-4">
                        <div class="row g-4">                            
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                <div class="team-item bg-white text-center rounded p-4 pt-0">
                                    <img class="img-fluid rounded-circle p-4" src="img/team2.jpg" alt="" />
                                    <h5 class="mb-0">Gede Ngurah Oka Perdana</h5>
                                    <small>App Developer</small>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="team-item bg-white text-center rounded p-4 pt-0">
                                    <img class="img-fluid rounded-circle p-4" src="img/team5.jpg" alt="" />
                                    <h5 class="mb-0">A.A.G. Dalem Eka Putra</h5>
                                    <small>App Developer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Kolom Kanan -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


     <!-- Testimonial Start -->
     <div class="container-xxl py-5" id="testimoni">
          <div class="container py-5">
               <div class="row g-5">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                         <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">
                              Certified
                         </div>
                         <h2 class="mb-4">International Certification</h2>
                         <p>PT. Alpha Sigma Digital actively research and follow the fresh technology by learning and
                              internationally certified.</p>
                    </div>
                    <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                         <div class="testimonial-item ps-5">
                              <div class="d-flex justify-content-center align-items-center gap-4" id="porto">
                                   <a
                                        href="https://www.credly.com/badges/cb4b7870-ea7b-4499-9579-f0dfd64ad421/public_url">
                                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/ass.jpg"
                                             style="width: 200px; height: 200px" />
                                   </a>
                                   <a
                                        href="https://www.credly.com/badges/5763eaa5-1ead-4989-beca-2fe150fc977e/public_url">
                                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/sps.jpg"
                                             style="width: 200px; height: 200px" />
                                   </a>
                                   <a
                                        href="https://www.credly.com/badges/b10ebc8f-96d1-413b-995c-6f19fd3a6d43/public_url">
                                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/ex.jpg"
                                             style="width: 200px; height: 200px" />
                                   </a>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
     </div>
     <!-- Testimonial End -->

     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-white-50 footer pt-5" id="footer">
          <div class="container py-5">
               <div class="row g-5">
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                         <h4 class="text-white">
                              PT<span class="text-primary">.</span> Alpha Sigma Digital
                         </h4>
                         <p class="mb-0">
                              PT. Alpha Sigma Digital was founded by Jaya Susila with a vision to lead in the
                              world of information technology. With a team of experienced
                              professionals, we are committed to delivering top-notch IT
                              services that are specifically designed to meet the unique needs
                              of each client
                         </p>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                         <h5 class="text-white mb-4">Get In Touch</h5>
                         <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Marlboro V No 12</p>
                         <p><i class="fa fa-phone-alt me-3"></i>+6281236969502</p>
                         <p>
                              <i class="fa fa-envelope me-3"></i>info@alphasigma.id
                         </p>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                         <h5 class="text-white mb-4">Popular Link</h5>
                         <a class="btn btn-link" href="#about">About Us</a>
                         <a class="btn btn-link" href="#contact">Contact Us</a>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                         <h5 class="text-white mb-4">Our Services</h5>
                         <a class="btn btn-link" href="">Web Development</a>
                         <a class="btn btn-link" href="">Custom Apps</a>
                         <a class="btn btn-link" href="">Digital Marketing</a>
                         <a class="btn btn-link" href="">Content Production</a>
                    </div>
               </div>
          </div>
          <div class="container wow fadeIn" data-wow-delay="0.1s">
               <div class="copyright">
                    <div class="row">
                         <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                              &copy;
                              <a class="" href="#">PT.ASD</a>, All Right Reserved.
                              <!--Designed By-->
                              <!--<a class="text-capitalize" href="https://htmlcodex.com">Codex HTML</a>-->
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- Footer End -->


     <!-- Overlay  -->
     <div class="overlay-modal d-none"></div>
     <!-- End -->
     <!-- Modal -->
     <div id="modal" class="d-none">
          <div class="container">
               <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 p-4 bg-white shadow rounded" id="wadah">
                         <h2 class="text-center mt-2">Request Inquiry</h2>
                         <p class="text-center">Hi! Glad you’re here. Please enter your inquiry or a demo request in the form bellow so
                              we can contact you soon.</p>
                         <form action="" method="post" class="mt-4">
                              <div class="mb-3">
                                   <label for="inputName" class="form-label">Name</label>
                                   <input type="text" name="name" class="form-control" id="inputName"
                                        placeholder="Enter your name">
                              </div>
                              <div class="mb-3">
                                   <label for="inputEmail" class="form-label">Email address</label>
                                   <input type="email" name="email" class="form-control" id="inputEmail"
                                        placeholder="Enter your email">
                              </div>
                              <div class="mb-3">
                                   <label for="no_whatsapp" class="form-label">Whatsapp</label>
                                   <input type="text" name="no_whatsapp" class="form-control" id="no_whatsapp"
                                        placeholder="Enter your Whatsapp number">
                              </div>
                              <div class="mb-3">
                                   <label for="inputAddress" class="form-label">Inquiry</label>
                                   <input type="text" name="address" class="form-control" id="inputAddress"
                                        placeholder="Enter Your Inquiry">
                              </div>
                              <button type="submit" class="btn btn-primary w-100 mt-4" id="btn-submit" name="submit">
                                   Submit
                              </button>
                         </form>
                         <button type="button" class="btn-danger" id="close"><i class="bi bi-x"></i></button>
                    </div>
               </div>
          </div>
     </div>


     <!-- End Modal -->

     <!-- Back to Top -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

     <!-- JavaScript Libraries -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
     <script src="lib/wow/wow.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/counterup/counterup.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>



     <!-- Template Javascript -->
     <script src="js/main.js"></script>
</body>

</html>


<?php



if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $no_wa = $_POST['no_whatsapp'];
     $address = $_POST['address'];
     if (empty($name) || empty($email) || empty($no_wa) || empty($address)) {
          echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
          echo '<script>
              document.addEventListener("DOMContentLoaded", function() {
                         const Toast = Swal.mixin({
                         toast: true,
                         position: "top-start",
                         showConfirmButton: false,
                         timer: 3000,
                         timerProgressBar: true,
                         didOpen: (toast) => {
                         toast.onmouseenter = Swal.stopTimer;
                         toast.onmouseleave = Swal.resumeTimer;
                         }
                         });
                         Toast.fire({
                         icon: "warning",
                         title: "Please fill out all the fields.",
                    });
                    setTimeout(function() {
                    sessionStorage.clear();
                    window.location.href = "index.php";
                    }, 3000);

               });
          </script>';
          exit();
      }
      
     $query = mysqli_query($conn,"INSERT INTO users (name, email, no_whatsapp, address) VALUES ('$name', '$email', '$no_wa', '$address')");
     if ($query) {
          echo '<script>
              document.addEventListener("DOMContentLoaded", function() {
                 const Toast = Swal.mixin({
                    toast: true,
                    position: "top-start",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                    }
                    });
                    Toast.fire({
                    icon: "success",
                    title: "Data has been successfully added!"
                    });
              });
          </script>';
      } else {
          echo '<script>alert("Data User Gagal di Tambahkan"); window.location.href = "index.php";</script>';
      }
      
     $_SESSION['sesi'] = 'ada';
}


?>