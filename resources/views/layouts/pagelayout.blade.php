<!DOCTYPE HTML>
<html>
        <head>
                <title>@yield("title","Asylum")</title>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1" />
                <link rel="stylesheet" href="/css/main.css" />
        </head>
        <body class="subpage">

                <!-- Header -->
                        <header id="header">
                                <div class="logo"><a href="/">Asylum <span></span></a></div>
                                <a href="#menu">Menu</a>
                        </header>

                <!-- Nav -->
                        <nav id="menu">
                                <ul class="links">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="login">Login</a></li>
                                        <li><a href="contact">Contact</a></li>
                                </ul>
                        </nav>

               @yield("content") 

                <!-- Footer -->
                        <footer id="footer">
                                <div class="container">
                                        <ul class="icons">
<li><a href="https://fetlife.com/users/6986766" target="_blank"> <img src="/fet_logo.png" style="width:25px;height:25px;border:0;"><span class="label"></span></a></li>
  <li><a href="https://twitter.com/AsylumBuffalo" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
  <li><a href="https://www.instagram.com/asylum_buffalo/?hl=en" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
  <li><a href= "mailto: asylumbuffalo@gmail.com" class="icon fa-envelope-o" target="_blank"><span class="label">Email</span></a></li>
                                        </ul>
                                </div>
                         <div class="ncsf_partner">
                          <a href="https://ncsfreedom.org/" target="_blank"> <img src="/images/ncsf_partner.png" style="width:200px;height:100px;"></a>
                         </div>
                                <div class="copyright">
                                        &copy; Asylum by Sad Blue Dragon. All rights reserved.
                                </div>
                        </footer>

                <!-- Scripts -->
                        <script src="/assets/js/jquery.min.js"></script>
                        <script src="/assets/js/jquery.scrollex.min.js"></script>
                        <script src="/assets/js/skel.min.js"></script>
                        <script src="/assets/js/util.js"></script>
                        <script src="/assets/js/main.js"></script>


