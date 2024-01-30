<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profil</title>

    <!-- Box Icons -->

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!--Custom Style css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- header -->
    <header class="header">
        <a href="#" class="logo">Zakir<span>Dev</span></a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
                    <a href="#home" class="active">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Service</a>
                    <a href="#portfolio">My Portopilo</a>
                    <a href="#contact">Contact</a>         
            </nav>
    </header>

    <!-- Home Start -->
    <section class="home" id="home">
            <div class="home-content">
                <h3>Hello,It's Me</h3>
                <h1>Ahmad Muzakir</h1>
                <h3>And I'm a <span class="MultiText"></span></h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci praesentium quibusdam quos est dignissimos laborum non iste cum illo, reiciendis sunt labore sint omnis, itaque hic eligendi velit voluptatibus libero.</p>
            <div class="social-media">
                <a href="https://www.instagram.com/muzakirjohn/" class='bx bxl-instagram-alt'></a>
                <a href="https://twitter.com/JohnMuzakir" class='bx bxl-twitter'></a>
                <a href="https://www.linkedin.com/in/ahmad-muzakir-b5710919b/" class='bx bxl-linkedin'></a>
             
            </div>
            <a href="https://drive.google.com/file/d/1dQxRp_tFF3XWEJft-BjMYl9kZg7evJ_Q/view?usp=sharing" class="btn">Download CV</a>
            </div>
            <div class="home-img">
                <img src="img/home.png" alt="">
            </div>
    </section>
<!-- About me Start -->
<section class="about" id="about">
    <div class="container">
        <div class="row">
            
            <div class="about-col-1">
                <img src="img/poto-formal.jpeg">
        </div>
        <div class="about-col-2">
            <h2 class="Sub-title">About Me</h2>
            <p>I am very interested in technology, I also deepen knowledge of technology such as data analysis, creating websites and in science that continues to develop. I graduated majoring in informatics engineering at one of the state universities in Indonesia</p>
            <div class="tab-titles">
                <p class="tab-links active-link" onclick="opentab('skills')"> Skill </p>
                <p class="tab-links"onclick="opentab('experience')"> Exprience </p>
                <p class="tab-links" onclick="opentab('education')"> Education </p>
            </div>
            <div class="tab-contents active-tab" id="skills"> 
                <ul>
                    <li><span>Web Development</span><br>Built FullStack Website App</li>
                    <li><span>Data Analisis</span><br>Built Data analisis</li>
                </ul>
            </div>
            <div class="tab-contents" id="experience"> 
                <ul>
                    <li><span>Program Kampus Merdeka of Kemendikbudristek RI</span><br>Staff Officier</li>
                    <li><span>Diskominfo Tangerang Selatan</span><br>Data Enginering</li>
                </ul>
            </div>
            <div class="tab-contents" id="education"> 
                <ul>
                    <li><span>2018-2023</span><br>BACHELOR OF INFORMATICS FROM UIN SYARIF HIDAYATULLAH</li>
                    <li><span>2015-2018</span><br>ADI LUHUR HIGH SCHOOL, JAKARTA</li>
                    <li><span>2012-2015</span><br>MTS NEGERI 6 JAKARTA</li>
                    <li><span>2006-2012</span><br>elementary school 08 Batu Ampar</li>
                </ul>
            </div>

        </div>
    </div>
</section>
<!-- About me End -->

<!-- Service Section Desigm -->

<section class="services" id="services">
    <h2 class="heading">Our <span>Service</span></h2>

    <div class="services-container">
        <div class="services-box">
             <i class='bx bx-code-alt'></i>
            <h3>Web Deveploment</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque error fuga facilis esse mollitia quasi! Rem iure dignissimos quas animi.</p>
            <a href="#" class="btn">Read More</a>
        </div>
    
        <div class="services-box">
            <i class='bx bx-bar-chart'></i>
            <h3>Data Anlyze</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque error fuga facilis esse mollitia quasi! Rem iure dignissimos quas animi.</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </div>

</section>

<!-- Portopolio Section design -->
<section class="portfolio" id="portfolio">
    <h2 class="heading">Latest <span>Project</span></h2>

    <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="img/Portopolio/1.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, vitae!</p>
                    <a href="#"><i class="bx bx-link-external"></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="img/Portopolio/port7.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, vitae!</p>
                    <a href="#"><i class="bx bx-link-external"></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="img/Portopolio/port2.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, vitae!</p>
                    <a href="#"><i class="bx bx-link-external"></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="img/Portopolio/port5.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, vitae!</p>
                    <a href="#"><i class="bx bx-link-external"></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="img/Portopolio/port6.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, vitae!</p>
                    <a href="#"><i class="bx bx-link-external"></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="img/Portopolio/port1.jpg" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, vitae!</p>
                    <a href="#"><i class="bx bx-link-external"></i></a>
                </div>
            </div>
    </div>
</section>

<!-- Contact Section design -->
<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span></h2>
    
    <form action="#">
        <div class="input-box">
            <input type="text" placeholder="Full Name">
            <input type="email" name="" id="" placeholder="Email Address">
        </div>
        <div class="input-box">
            <input type="number" placeholder="Mobile Number">
            <input type="text" name="" id="" placeholder="Email Subject">
        </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Massage"></textarea>
        <input type="submit" value="Send Massage" class="btn">
    </form>
</section>

<footer class="footer">
    <div class="footer-text">   
        <p>Copyright &copy; 2024 by Zakir | All rights Reserved</p>
    </div>

    <div class="footer-iconTop">
        <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
    </div>
</footer>    

 <!-- Scroll reveal package -->
<script src="https://unpkg.com/scrollreveal"></script>

<!-- TType js -->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

<!-- script javascript call -->
<script src="js/script.js"></script>
<script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents= document.getElementsByClassName("tab-contents");

        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");

            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");  
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
 </script>
 
</body>
</html>