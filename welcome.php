<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>





 
      <!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <meta name="theme-color" content="#9d4edd">

     <link rel="stylesheet" href="style.css">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <title>Spectrum</title>
     <link rel="icon" href="https://www.spectrumcet.com/assets/tablogo.png">
</head>
<body>
     <img src="https://media1.giphy.com/media/b1fc5DRvglFFS/200w.gif?cid=82a1493bwwpa8xbbvfovz8lw7hy5nk6fbm8z0tet5vy6ywz6&rid=200w.gif&ct=g" alt="gif" style="height: 100vh; width: 100vw;" id="loading-gif">
     <div class="jumbotron text-center bg-dark text-white" style="margin-bottom: 0;">
          <h1 class="heading">Welcome To Spectrum</h1>
          <p class="subHeading">The place for all technical enthusiasts to learn </p>
     </div>

     <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
          <a href="#" class="navbar-brand"><img src="https://www.spectrumcet.com/assets/mozclub%20logo.png" alt="logo" style="width: 40px; margin-left: 100px;">Spectrum</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
             </button>

          <!-- links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto" style="margin-right: 100px;">
               <li class="nav-item" style="margin-right: 30px;">
                    <a href="#about" class="nav-link" rel="noopener">About Us</a>
               </li>
               <li class="nav-item">
                    <a href="#project" class="nav-link" rel="noopener" style="margin-right: 30px;">Projects</a>
               </li>
               <li class="nav-item">
                    <a href="#contact" class="nav-link" rel="noopener" style="margin-right: 50px;">Contact Us</a>
               </li>
               
               
               
      <li class="nav-item">
        <a class="nav-link" href="./index.html" style="margin-right: 50px;">Logout</a>
      </li>
               <button id="dark" class="nav-link" style="margin-right: 50px;" onclick="myFunction()"><i class="fa fa-moon-o"></i></button>
               <li class="nav-item active">
        <a class="nav-link" href="idk.php"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
          </ul>
          </div>
     </nav>

     <img src="https://www.spectrumcet.com/assets/spectrum.png" alt="banner" class="img-fluid" id="main-image">


     <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>



     <!-- about us -->
     <section class="about-page">
          <div class="about-heading text-center" id="about">About Us</div>
          <div class="hello">
               <img src="https://images.unsplash.com/photo-1488229297570-58520851e868?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8dGVjaHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" id="about-image" style="opacity: .2;">
               <div class="lines">
                    <div class="first-para">
                         SPECTRUM ,Technical society of COLLEGE OF ENGINEERING AND TECHNOLOGY, BHUBANESWAR,a place for all technical enthusiasts to learn, discover and innovate new things in the field of Technology and Design. The name of the club " SPECTRUM ", a contribution of our alumni of 2015 batch, is particularly used to describe the characteristic colors of visible light after passing through a prism, similarly students of CET consist of different skills within them and Spectrum acts like a prism, Spectrum recognises their skills helps them to strengthen it.
                    </div>
                    <div class="second-para">
                         This club was established by " Bikram Keshari Panda (2015 batch) ".Spectrum got its recognition in the year 2016 and got its workspace, funding and other facilities. Primarily this was his idea to have an electronics society in our college but with the efforts of other members we established two other wings - Software and Design.The other seniors who had their valuable contribution for this initiative were: Ankit Mishra, Zighnesh Biswal, Abhishek Dash, Avinash Nayak, Tapan Kumar Pal, Krutikesh Sahoo, Abhilash Das.
                    </div>
               </div>

               <h1 class="nothing text-center"><span class="wing">We Deal In</span></h1>
               
               <div class="card-deck">
                         <!-- <div class="card">
                              <div class="card-body">
                                   <h3 class="card-title text-center">Software</h3>
                                   <p class="card-text">The SOFTWARE team is continuously striving for growth in the domains of Web Development, App Development, Competitive Programming, Machine Learning and Data Science. Working as a team, inspiring each other we quickly develop viable solutions for a better outcome.
                                   </p>
                              </div>
                         </div>
                         <div class="card">
                              <div class="card-body">
                                   <h3 class="card-title text-center">Hardware</h3>
                                   <p class="card-text">The HARDWARE team of the Club mainly focuses on VLSI, Embedded Systems and PCB Design. We have developed many projects with implementation and testing of circuits, components, systems, etc.
                                   </p>
                              </div>
                         </div>
                         <div class="card">
                              <div class="card-body">
                                   <h3 class="card-title text-center">Design</h3>
                                   <p class="card-text">The DESIGN Wing of our Club has proven their creativity in UI/UX Poster Designing. We believe visual communication is a major tool to enhance various creative projects.
                                   </p>
                              </div>
                         </div> -->
                    
                    
                         <div class="flip-box flip-box-software">
                              <div class="flip-box-inner">
                                   <div class="flip-box-front">
                                        <div class="card-body">
                                             <img src="./software1.jpg" alt="software-image" class="img-fluid" >
                                             <h3 class="card-title text-center">Software</h3>
                                             <p class="card-text">The SOFTWARE team is continuously striving for growth in the domains of Web Development, App Development, Competitive Programming, Machine Learning and Data Science. Working as a team, inspiring each other we quickly develop viable solutions for a better outcome.
                                             </p>
                                        </div>
                                   </div>
                                   <div class="flip-box-back">
                                        <h4 class="Programming">COMPETITIVE PROGRAMMING</h4>
                                        <hr>
                                        <h4 class="web_dev">WEB DEVELOPMENT</h4>
                                        <hr>
                                        <h4 class="app-dev">APP DEVELOPMENT</h4>
                                        <hr>
                                        <h4 class="m-l">MACHINE LEARNING</h4>
                                        <hr>
                                   </div>
                              </div>
                         </div>
                    
                    
                         <div class="flip-box">
                              <div class="flip-box-inner">
                                   <div class="flip-box-front">
                                        <div class="card-body">
                                             <img src="hardware.jpg" alt="software-image" class="img-fluid" >
                                             <h3 class="card-title text-center">Hardware</h3>
                                             <p class="card-text">The HARDWARE team of the Club mainly focuses on VLSI, Embedded Systems and PCB Design. We have developed many projects with implementation and testing of circuits, components, systems, etc.
                                             </p>
                                        </div>
                                   </div>
                                   <div class="flip-box-back">
                                        <h4 class="vlsi">VLSI</h4>
                                        <hr>
                                        <h4 class="embedded">EMBEDDED SYSTEM</h4>
                                        <hr>
                                        <h4 class="pcb">PCB DESIGN</h4>
                                        <hr>
                                   </div>
                              </div>
                         </div>
                    
                    
                         <div class="flip-box">
                              <div class="flip-box-inner">
                                   <div class="flip-box-front">
                                        <div class="card-body">
                                             <img src="./design.jpg" alt="software-image" class="img-fluid" >
                                             <h3 class="card-title text-center">Design</h3>
                                             <p class="card-text">The DESIGN Wing of our Club has proven their creativity in UI/UX Poster Designing. We believe visual communication is a major tool to enhance various creative projects.
                                             </p>
                                        </div>
                                   </div>
                                   <div class="flip-box-back">
                                        <h4 class="ui-ux">UI/UX DESIGNING</h4>
                                        <hr>
                                        <h4 class="poster">POSTER DESIGNING</h4>
                                        <hr>
                                        
                                   </div>
                              </div>
                         </div>
                    
               </div>

          </div>
     </section>


     <!-- projects -->
     <section class="project-page">
          <div class="about-heading text-center" id="project">Projects</div>
          <div class="container">
               <div class="card-deck">
                    <div class="card">
                         <img src="https://www.spectrumcet.com/assets/blind.jpg" alt="project-one" class="card-img-top">
                         <div class="card-body">
                              <h3 class="card-title">BHAAVANA</h3>
                              <p class="card-text">device helps physically imapired people to understand the emotions of the person they are talking to.</p>
                              <a href="#" class="btn btn-secondary">GitHub Link</a>
                         </div>
                    </div>
                    <div class="card">
                         <img src="https://www.spectrumcet.com/assets/toilet.jpg" alt="project-one" class="card-img-top">
                         <div class="card-body">
                              <h3 class="card-title">SMART TOILET FOR SENIOR CITIZENS AND PATIENTS</h3>
                              <p class="card-text">A semi automated toilet that is designed for the elderly people and the patients. This toilet helps them defecate and urinate with ease and reduces the filthy labour for the hospital authorities. The use of embedded microcontroller Arduino Mega 2560 makes the system smart.</p>
                              <a href="#" class="btn btn-secondary">GitHub Link</a>
                         </div>
                    </div>
                    <div class="card">
                         <img src="https://www.spectrumcet.com/assets/bot%20(1).jpg" alt="project-one" class="card-img-top">
                         <div class="card-body">
                              <h3 class="card-title">SUPPLY BOT</h3>
                              <p class="card-text">Robots help to deliver food and medicine aid in flood scenarios to the affected people in remote areas. Semi finalist at IIT bombay, Eyantra competition 2019-20.</p>
                              <a href="#" class="btn btn-secondary">GitHub Link</a>
                         </div>
                    </div>
                    
               </div>
          </div>
          
     </section>

     <footer>
          <h2 class="contact-part" id="contact">Contact Us</h2>
          <form class="contact-form">
               <div>
                    <label for="name">Name:</label>
               <input type="text" id="userName" placeholder="Enter Your Name" required>
               </div>
               <div>
                    <label for="email">Email:</label>
               <input type="email" id="email" placeholder="Enter Your Email" required>
               </div>
               <div>
                    <textarea name="message" id="message" placeholder="Please Enter Your Message Here:)" cols="40" rows="5" required></textarea>
               </div>
               
               <input type="submit" id="form-submit">
          </form>
          <div class="last">
               <div class="follow">Follow Us</div>
               <ul class="socials">
                    <li><a href="https://www.facebook.com/spCETrum" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/spectrum-cet-3b71431b1/" target="_blank" rel="noopener"><i class="fa fa-linkedin-square"></i></a></li>
                    <li><a href="https://www.instagram.com/spectrum.cetb/?hl=en" target="_blank" rel="noopener"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://github.com/Spectrum-CETB" target="_blank" rel="noopener"><i class="fa fa-github"></i></a></li>
               </ul>
          </div>


          <div class="footer-bottom">
               <p>copyright &copy; and designed by Maddy</p>
          </div>
     </footer>


     <script src="app.js"></script>
</body>
</html>