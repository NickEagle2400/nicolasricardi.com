<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Message Sent Successfully</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Favicon -->
        <link rel="icon" href="assets/images/logo.png" type="image/x-icon">

        <!-- CSS -->
        <link rel="stylesheet" href="../assets/css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css" integrity="sha512-SJw7jzjMYJhsEnN/BuxTWXkezA2cRanuB8TdCNMXFJjxG9ZGSKOX5P3j03H6kdMxalKHZ7vlBMB4CagFP/de0A==" crossorigin="anonymous" type="text/css"/>

        <style>
            /* HERO */
            .hero{
                display: block;
                /*background: url(../img/portrait2.jpg);*/
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .hero-layer{
                background: linear-gradient(to top, #000000,#11181a70);
                /*background: linear-gradient(to right, #00000070,#11181a70);*/
                height: 100vh;
                width: 100%;
            }
            .hero-container{
                display: flex;
                flex-direction: column;
                width: 100%;
                height: 100%;
                justify-content: center;
                padding: 0px 250px;
            }
            .hero-ita{
                margin: 10px 0px;
            }
            .hero-ita span{
                font-weight: bold;
                text-transform: uppercase;
            }
            .hero-title{
                letter-spacing: -3px;
                color: #fff;
                line-height: 1.1;
            }

            .hero-description{
                margin: 0px;
                line-height: 1.5;
                font-weight: 200;
            }
            .hero-social{
                display: none;
            }
            .hero-cta{
                font-size: 20px;
                width: 250px;
                text-decoration: none;
                text-align: center;
                border: 2px solid #fff;
                background: transparent;
                color:#fff;
                margin-top: 50px;
                text-transform: capitalize;
                font-weight: bold;
                padding: 15px 25px;
            }
            .hvr-sweep-to-right:before{
                background: #fff!important;
            }
            .hero-cta:hover{
                color:#11181a!important;
            }
            .hero-text-big{
                position: absolute;
                font-weight: bold;
                bottom:20px;
                right:80px;
                font-size: 180px;
                color: #7a7a7a40;
                letter-spacing: -10px;
                margin: 0;
                line-height: 1;
                z-index: 3;
            }

            @media screen and (max-width: 676px) {
                /* HERO */
                .hero{
                    height: 100vh;
                    margin-bottom: 20px;
                }
                .hero-layer{
                    height: 100%;
                }
                .hero-container{
                    padding: 0px 20px;
                }
                .hero-ita{
                    margin: 10px 0px;
                }
                .hero-social{
                    display: block;
                    margin-top: 0px;
                }
                .hero-social li a{
                    font-size: 30px;
                }
                .hero-social li{
                    display: inline-block;
                    margin-top: 30px;
                    margin-right: 30px;
                }
                .hero-cta{
                    font-size: 18px;
                    width: 100%;
                    margin-top: 30px;
                }
                .hero-text-big{
                    display: none;
                }
            }
            @media screen and (min-width: 768px) and (max-width: 1200px) {
                .hero-container{
                    padding: 80px;
                }
            }
        </style>
        <!-- Canonical URL-->
        <link rel="canonical" href="https://www.nicolasricardi.com/thank-you" >

        <!-- Meta -->  
        <meta name="description" content="Junior Web Developer in Treviglio. I help local businesses build an online presence." />
        <meta name="keywords" content="Nicolas Ricardi, Junior Web Developer, Web Developer Portfolio" />
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
        
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Nicolas Ricardi - Junior Web Developer">
        <meta name="twitter:description" content="Junior Web Developer in Treviglio. I help local businesses build an online presence.">
        <meta name="twitter:site" content="@nick_ricardi00" />
        <meta name="twitter:creator" content="@nick_ricardi00" />
        <meta name="twitter:image" content="https://www.nicolasricardi.com/assets/images/website.png">
        
        <!-- OpenGraph -->
        <meta property="og:title" content="Nicolas Ricardi - Junior Web Developer" />
        <meta property="og:description" content="Junior Web Developer in Treviglio. I help local businesses build an online presence." />
        <meta name="og:author" content="Nicolas Ricardi">
        <meta property="og:site_name" content="Nicolas Ricardi">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.nicolasricardi.com" />
        <meta property="og:image" content="https://www.nicolasricardi.com/assets/images/website.png" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-M50417N8E4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-M50417N8E4');
        </script>

    </head>
    <body onload="load()">

        <!-- Loader -->
        <div id="loader" class="loader">
            <h2 class="loader-text">Sending . . .</h2>
        </div>
        <!-- Loader End-->

        <div id="pagination" class="pagination" style="display: none;"></div>

        <main id="main" style="display: none;">
            
            <!-- Header -->
            <header>
                <!-- Navbar -->
                <nav>
                    <div class="nav-logo">
                        <a href="https://www.nicolasricardi.com" target="_self" rel="author" title="Nicolas Ricardi - Junior Web Developer" ><img src="../assets/images/logo.png" alt="Nicolas Ricardi Logo" class="logo" /></a>
                    </div>
                    <ul id="menu" class="nav-menu">
                        <li><a href="../index.html#about" title="About" class="hvr-underline-from-left">about</a></li>
                        <li><a href="../index.html#skills" title="Skills" class="hvr-underline-from-left">skills</a></li>
                        <li><a href="../index.html#portfolio" title="Portfolio" class="hvr-underline-from-left">Portfolio</a></li>
                        <li><a href="../index.html#get-in-touch" title="Get in Touch" class="hvr-sweep-to-right"><strong>Get in Touch</strong></a></li>
                    </ul>
                </nav>
                <!-- Navbar End -->
            </header>
            <!-- Header End -->

            <!-- Hero -->
            <section class="hero">
                <div class="hero-layer">
                    <div class="hero-container">
                        <p class="hero-ita">Thank you<span style="color: #389edb; text-transform:capitalize;">
                            <?php 
                                echo " " . $_GET['fullName']?>
                                </span>. Message sent successfully.</p>
                        <h1 class="hero-title">I will get back to you as soon as possible</h1>
                        <ul class="hero-social">
                            <li><a href="https://www.instagram.com/nick_ricardi" title="Instagram" target="_blank" rel="nofollow noreferrer"><i class="ig fab fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/nicolasricardi/" title="Linkedin" target="_blank" rel="nofollow noreferrer"><i class="in fab fa-linkedin-in"></i></i></a></li>
                            <li><a href="https://github.com/NickEagle2400" title="GitHub" target="_blank" rel="nofollow noreferrer"><i class="git fab fa-github-alt"></i></a></li>
                        </ul>
                        <a href="https://www.nicolasricardi.com" class="hero-cta hvr-sweep-to-right" title="About Me">Homepage &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                    <p class="hero-text-big">404</p>
                </div>
            </section>
            <!-- Hero End -->


            <!-- Footer -->
            <footer>
                <div class="copyright">
                    <p>Design & Develop by <strong>Nicolas Ricardi</strong> © 2021 | VAT: 04455400160 | <a href="mailto:info@nicolasricardi.com" target="_blank" title="Email">info@nicolasricardi.com</a></p>
                </div>
            </footer>
            <!-- Footer End -->

            <!-- Left Sidebar -->
            <h3 class="sideleft-text">C.S. Engineering Student&nbsp;&nbsp; /&nbsp;&nbsp; Freelance</h3>
            <ul class="sideleft-menu">
                <li><a href="https://www.instagram.com/nick_ricardi" title="Instagram" target="_blank" rel="nofollow noreferrer"><i class="ig fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/nicolasricardi/" title="Linkedin" target="_blank" rel="nofollow noreferrer"><i class="in fab fa-linkedin-in"></i></i></a></li>
                <li><a href="https://github.com/NickEagle2400" title="GitHub" target="_blank" rel="nofollow noreferrer"><i class="git fab fa-github-alt"></i></a></li>
            </ul>
            <!-- Left Sidebar End-->
        </main>

        <script type="text/javascript" language="JavaScript">
            var elem;

            function load() {
                elem = setTimeout(showPage, 2000);
            }
            
            function showPage() {
                document.getElementById("loader").style.display = "none";
                document.getElementById("pagination").style.display = "block";
                document.getElementById("main").style.display = "block";
            }
        </script>

        <script type="text/javascript" language="JavaScript">
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        </script>

    </body>
</html>