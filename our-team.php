<?php include('./include/db.php'); 
$query = "SELECT * FROM basic_setup, information, home_setup";
$runquery = mysqli_query($db,$query);
if(!$db){
    header("location:index-2.html");
}
$data = mysqli_fetch_array($runquery);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link
            href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
            rel="stylesheet"/>
        <link rel="stylesheet" href="assets/css/styles.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <title><?=$data['title']?></title>
    </head>
    <body>
    <div id="progress">
      <span id="progress-value">&#x1F815;</span>
    </div>
        <nav>
            <div class="nav__logo">
                <img src="assets/img/<?=$data['logo_pic']?>" alt="Logo Kelompok 4">
                <?=$data['app_name']?>
            </div>
            <ul class="nav__links">
                <li class="link">
                    <a href="index.php#menu_section">Home</a>
                </li>
                <li class="link">
                    <a href="index.php#feature">Feature</a>
                </li>
                <li class="link">
                    <a href="index.php#premium">Premium</a>
                </li>
                <li class="link">
                    <a href="index.php#preview">Preview</a>
                </li>
                <li class="link">
                    <a href="about-us.php">About Us</a>
                    <ul class="js-sub-menu sub-menu">
                        <li>
                            <a href="our-team.php">Our Team</a>
                        </li>
                        <li>
                            <a href="faq.php">FAQ</a>
                        </li>
                        <li>
                            <a href="terms.php">Terms Of Conditions</a>
                        </li>
                        <li>
                            <a href="sitemap.php">Sitemap</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <a href="contact-us.php">
                <button class="btn">Contact Us</button>
            </a>
        </nav>


        <section class="team">
    <h2 class="header__title">Our Team</h2>
    <div class="our_team">
        <div class="team_member member1">
          <div class="member_img">
             <img src="assets/img/dzakwan.png" alt="our_team">
            <div class="social_media">
               <div class="facebook item">
                    <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
               <div class="instagram item">
                <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
             </div>
          </div>
          <h3 class="section__title">Dzakwan Ammar Aziz</h3>
          <span class="section__subtitle">Software Developer</span>
        </div>

        <div class="team_member member2">
          <div class="member_img">
             <img src="assets/img/peru.png" alt="our_team">
             <div class="social_media">
               <div class="facebook item">
                    <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
               <div class="instagram item">
                <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
             </div>
          </div>
          <h3 class="section__title">Peru Pagustian</h3>
          <span class="section__subtitle">UI/UX Designer</span>
        </div>        
        <div class="team_member member3">
          <div class="member_img">
             <img src="assets/img/jerrian.png" alt="our_team">
             <div class="social_media">
               <div class="facebook item">
                    <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
               <div class="instagram item">
                <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
             </div>
          </div>
          <h3 class="section__title">Jerrian</h3>
          <span class="section__subtitle">Audio Engineer</span>
        </div>        
        <div class="team_member member4">
          <div class="member_img">
             <img src="assets/img/arif.png" alt="our_team">
             <div class="social_media">
               <div class="facebook item">
                    <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
               <div class="instagram item">
                <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
             </div>
          </div>
          <h3 class="section__title">Arif Rahmat Ikhsan</h3>
          <span class="section__subtitle">Music Data Analyst</span>
        </div>        
        <div class="team_member member5">
          <div class="member_img">
             <img src="assets/img/rayhan.png" alt="our_team">
             <div class="social_media">
               <div class="facebook item">
                    <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
               <div class="instagram item">
                <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
             </div>
          </div>
          <h3 class="section__title">Rayhan M. Riski</h3>
          <span class="section__subtitle">Product Manager</span>
        </div>        
        <div class="team_member member6">
          <div class="member_img">
             <img src="assets/img/anjasfedo.png" alt="our_team">
             <div class="social_media">
               <div class="facebook item">
                    <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
               <div class="instagram item">
                <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
             </div>
          </div>
          <h3 class="section__title">M. Anjasfedo Afridiansah</h3>
          <span class="section__subtitle">Security Specialist</span>
        </div>
    </div>
        </section>
        
        <footer class="footer">
            <div class="section__container footer__container">
                <div class="footer__col">
                    <h3><?=$data['heading']?></h3>
                    <p><?=$data['shortdesc']?></p>
                </div>
                <div class="footer__col">
                    <h4>Support</h4>
                    <p>
                        <a href="contact-us.php">Contact Us</a>
                    </p>
                    <p>
                        <a href="about-us.php">About Us</a>
                    </p>
                    <p>
                        <a href="our-team.php">Our Team</a>
                    </p>
                    <h4>information</h4>
                    <p>
                        <a href="faq.php">FAQ</a>
                    </p>
                    <p>
                        <a href="terms.php">Terms Of Conditions</a>
                    </p>
                    <p>
                        <a href="sitemap.php">Sitemap</a>
                    </p>
                    <h4>Admin</h4>
                    <p>
                        <a href="admin/index.php">Login</a>
                    </p>
                </div>
                <div class="footer__col">
                    <h4>Address</h4>
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="icofont-google-map"></i>
                                <h4>Location:</h4>
                                <p><?=$data['location']?></p>
                            </div>
                            <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>
                                    <a href="mailto:<?=$data['emailid']?>"><?=$data['emailid']?></a>
                                </p>
                            </div>

                            <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p><?=$data['mobile']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bar">
                Copyright © 2023 . All rights reserved.
            </div>
        </footer>
    </body>
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</html>