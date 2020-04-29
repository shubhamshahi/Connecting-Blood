<?php
$fullname = filter_input(INPUT_POST, 'name');
$mobile = filter_input(INPUT_POST, 'mob');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');
$to= "bloodconnecting@gmail.com";
$subject= "Querry from ".$fullname."!";
$header="From: ".$email;
if(mail($to, $subject, $message, $header))
{
    $subjectt="Thank You for connecting!";
    $messagee="Thank You ".$fullname." for connecting with us! Our executives will contact you soon! Have a nice day!";
    $headerr="From: ".$to;
    if(mail($email, $subjectt, $messagee, $headerr))
    {
        echo " ";
    }
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname="cicr";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else {
$sql= "INSERT INTO messages (Name, Mobile, Email, Message) values ('$fullname','$mobile','$email','$message')";
$conn->query($sql);
}


$conn->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Connecting Blood </title>
    <link rel="shortcut icon" href="IMG/fav5.ico">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="CSS/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="CSS/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="CSS/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" media="screen" href="CSS/css/style.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    <style>
table {
  font-family: "Raleway", sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #f0c420;
}

</style>  

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">


    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <header>
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="site-nav-wrapper">
                    <div class="navbar-header">
                    <span id="mobile-nav-open-btn">&#9776;</span>
                    <a class="navbar-brand smooth-scroll" href="#home"><img src="IMG/logo11.png" alt="logo"></a></div>

                    <div class="container">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav pull-right">
                                <li><a class="smooth-scroll" href="#home">Home</a></li>
                                <li><a class="smooth-scroll" href="#about">About Us</a></li>
                                <li><a class="smooth-scroll" href="#team">Updates</a></li>
                                <li><a class="smooth-scroll" href="#gallery">Contributers</a></li>
                                <li><a class="smooth-scroll" href="#connect">Support Us</a></li>
                                <li><a class="smooth-scroll" href="#contact">Connect</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu-->
                    <div id="mobile-nav">
                        <span id="mobile-nav-close-btn">&times;</span>
                        <div id="mobile-nav-content">
                            <ul class="nav">
                                <li><a class="smooth-scroll" href="#home">Home</a></li>
                                <li><a class="smooth-scroll" href="#about">About Us</a></li>
                                <li><a class="smooth-scroll" href="#team">Updates</a></li>
                                <li><a class="smooth-scroll" href="#gallery">Contributers</a></li>
                                <li><a class="smooth-scroll" href="#connect">Support Us</a></li>
                                <li><a class="smooth-scroll" href="#contact">Connect</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section id="home">
       
       <div id="particles-js"></div>

        <div id="home-content">
            <div id="home-content-inner" class="text-center">

                <div id="home-heading">
                    <h1 id="home-heading-1">CONNECTING </h1>
                    <h1 id="home-heading-2"><span>BLOOD </span></h1><br>
                </div>
                <div id="home-text">
                    <p>A Digital Way to Donate Blood! </p><br>
                </div>
                <div id="home-btn">
                    <a class="btn btn-general btn-home smooth-scroll" href="#about" title="Start Now" role="button">GET SET GO</a>
                </div>
            </div>
        </div>
 
        <a href="#about" id="arrow-down" class="smooth-scroll">
            <i class="fa fa-angle-down"></i>
        </a>
        
    </section>

    <section id="about">

        <div id="about-01">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row>">

                        <div class="col-md-6 col-sm-6">
                            <div id="about-left">
                                <div class="vertical-heading">

                                    <h5>About Us</h5>
                                    <h2><strong>Who</strong><br>We Are</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">

                            <div id="about-right"><br>

                                <p>We are Team Connecting Blood, an initiative by JP Hospital.
                                Connecting Blood works for an unparalleled objective of solving the problem of blood shortage in India. </p>

                                <p> Connecting Blood acts as a channel connecting nearby voluntary blood donors with those who need blood digitally through our new application which would be lauched shortly. </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                       <div class="col-md-6 col-sm-6">

                            <div id="about-bottom">
                                <img src="IMG/connecting%20blood.png" alt="img" class="img-responsive">

                                
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">

                            <div id="about-bottom">

                               
                                <img src="IMG/logo3.png" alt="img" class="img-responsive">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="about-02">

            <div class="container">

                <div class="row">

                    <div class="col-md-4 col-sm-4">

                        <div class="about-item text-center">

                            <i class="fa fa-rocket"></i>
                            <h3>Mission</h3>
                            <hr>
                            <p>No one should die due to excessive blood loss!</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="about-item text-center">

                            <i class="fa fa-eye"></i>
                            <h3>Vission</h3>
                            <hr>
                            <p>To provide required blood to the pateint!</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="about-item text-center">

                            <i class="fa fa-pencil"></i>
                            <h3>Passion</h3>
                            <hr>
                            <p>Connecting donors with those who needs blood!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="team">

        <div class="content-box-md">

            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-sm-6">

                        <div id="team-left">
                            <div class="vertical-heading">

                                <h1>Updates</h1>
                                <h2>Recent <br><strong>News</strong></h2>
                            </div>
                            <p>Take a view on some recent news related to blood donation here.</p>
                            <p> Hover on the photo and you may click on the link to read the full news! </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">

                        <div id="team-members" class="owl-carousel">
                            <div class="team-member">

                                <img src="IMG/news1.png" alt="news1" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Patiala Media Club</h6>
                                        
                                        <ul class="social-list">
                                            <li><a href="https://timesofindia.indiatimes.com/city/ludhiana/patiala-media-club-organizes-blood-donation-camp-collects-41-units/articleshow/72093534.cms"><i class="fa fa-link"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="team-member">

                                <img src="IMG/news2.png" alt="news2" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Camp by Dadhich Samaj</h6>
                                        
                                        <ul class="social-list">
                                            <li><a href="https://timesofindia.indiatimes.com/citizen-reporter/stories/blooddonationcamp/articleshow/72324223.cms"><i class="fa fa-link"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="team-member">

                                <img src="IMG/news3.png" alt="news3" class="img-responsive">
                                <div class="team-member-overlay">
                                    <div class="team-member-info text-center">
                                        <h6>Camp by women, for women</h6>
                                        
                                        <ul class="social-list">
                                            <li><a href="https://timesofindia.indiatimes.com/city/mangaluru/an-all-woman-blood-donors-group-inspires-residents/articleshow/72859548.cms"><i class="fa fa-link"></i></a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            
                        

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="gallery">

        <div id="about-01">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 col-sm-6">
                            <div id="about-left">
                                <div class="vertical-heading">

                                    <h1>Our Family</h1>
                                    <h2> Top<br><strong>Contributers </strong></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                        <div id="about-right">
                           <div class="row">

                        <div class="col-md-6 col-sm-6">

                            <div class="other">

                                <img src="IMG/shubham.jpg" alt="Shubham Shahi" class="img-responsive">
                                <div class="other-overlay">
                                    <div class="other-info text-center">
                                        <h6>Shubham Shahi</h6>
                                    </div>
                                </div>



                            </div>
                        </div>
                           <div class="col-md-6 col-sm-6">

                            <div class="other">

                                <img src="IMG/prince.jpg" alt="prince" class="img-responsive">
                                <div class="other-overlay">
                                    <div class="other-info text-center">
                                        <h6>Prince Kasaudhan</h6>
                                        
                                        

                                    </div>
                                </div>



                            </div>
                        </div>
                            </div>
                            </div>
                        
                        </div>
                        
                    </div>
                    
                    <div class="row">

                        <div class="col-md-3 col-sm-3">

                            <div class="other">

                                <img src="IMG/nvs.jpg" alt="neeti vardhan" class="img-responsive">
                                <div class="other-overlay">
                                    <div class="other-info text-center">
                                        <h6>Neeti Vardhan</h6>
                                        
                                        

                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">

                            <div class="other">

                                <img src="IMG/shubham.jpg" alt="shubham" class="img-responsive">
                                <div class="other-overlay">
                                    <div class="other-info text-center">
                                        <h6>Shubham Shahi-1</h6>
                                        
                                        

                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">

                            <div class="other">

                                <img src="IMG/prince.jpg" alt="prince" class="img-responsive">
                                <div class="other-overlay">
                                    <div class="other-info text-center">
                                        <h6>Prince Kasaudhan-1</h6>
                                        
                                        

                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">

                            <div class="other">
                                <img src="IMG/nvs.jpg" alt="neeti" class="img-responsive">
                                <div class="other-overlay">
                                    <div class="other-info text-center">
                                        <h6>Neeti Vardhan-1</h6>
                                        
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section id="connect">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div id="contact-left">
                            <div class="vertical-heading">
                                <h1>SUPPORT</h1>
                                <h2>Donate or<br><strong>Connect</strong></h2><br><br><br><br><br><br>
                                <h4>If you want us to reach you or want to donate us, please fill the given form with the purpose written as the message! </h4>
                                
                                
                               
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div id="contact-right">
                          
                           <center><h1><strong>Send Message</strong></h1></center>
                            
                            <div class="container1">
                                <form method="post" action="index.php">
                                    <label for="name">Name: </label>
                                    <input type="text" id="name" name="name" placeholder="Your Name.." required>
                                    <div class="col-md-6 col-sm-6">
                                    <label for="mobile">Mobile no.: </label>
                                    <input type="text" id="mob" name="mob" placeholder="9876543210" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                    <label for="email">Email ID: </label>
                                    <input type="text" id="email" name="email" placeholder="sam@email.com" required>
                                    </div>
                                    <label for="subject">Message:</label>
                                    <textarea id="message" name="message" placeholder="Write something.." style="height:150px" required></textarea>
                                    <center>
                                    <input type="submit" value="Submit">
                                    </center>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">

        <div id="about-02">
            <div class="content-box-md">
                <div class="container">
                    <div class="row>">

                        <div class="col-md-6 col-sm-6">
                            <div id="about-left">
<br>
                                <div class="vertical-heading">

                                    <h1>Contact Us</h1>
                                    <h4> <strong>Team: </strong>Connecting Blood <br></h4>

                                    <h4> <strong>Mb. </strong>+91 8299393376<br></h4>

                                    <h4> <strong>Email ID. </strong>bloodconnecting@gmail.com </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div id="about-right1">
                               <br>
                                <h3>Address<br></h3>
                                <p>Jaypee Institute of Information Technology,<br>Sector- 128, Noida, U.P.<br>Pin: 201301</p>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
    
    <!-- gmap-->
    <section id="google-map">
        <div class="container-fluid">
            <div class="row">
                <div id="map"></div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p>
                        Copyright &copy; 2019 All Right Resered By <span> CONNECTING BLOOD</span>
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p>
                        Follow us at  <ul class="social-list"><li></li>
                                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
        <a href="#home" id="back-to-top" class="btn btn-sm btn-red btn-back-to-top smooth-scroll" title="home" role="button">
            <i class="fa fa-angle-up"></i>
        </a>
    </footer>
<script src="particles.js"></script>
<script src="JS/js/app.js"></script>
    <script src="JS/jquery.js"></script>
    <sript src="JS/bootstrap/bootstrap.js"></sript>
    <script src="JS/owl-carousel/owl.carousel.min.js"></script>
    <script src="JS/easing/jquery.easing.1.3.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlXNZD2SQB4V9nepgsP_AzieLe1IweQN0"></script>
    <script src="JS/main.js"></script>
</body>

</html>