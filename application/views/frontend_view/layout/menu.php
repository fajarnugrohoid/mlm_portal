
<section id="home-section">
    <div id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div id="info">
                        <span>
                            Phone: +62 812 9110 7430
                        </span>
                        <span>
                            Email: dhamar.labs@gmail.com
                        </span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">

                    <ul class="nav navbar-nav navbar-right" style="padding-left:20px;">
                        <li>
                            <a href="#how-to-jafra-section" style="color:gray;" title="How To" class="scrollto">
                                Jafra How To
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('register/signup/')?>" style="color:gray;" title="Join">
                                Join
                            </a>
                        </li>
                        <li>
                        <?php if (isset($_COOKIE['remember_me_cookie'])): ?>
                            <a  style="color:gray;" href="<?php echo base_url('backend/dashboard')?>" title="Login" >
                                Dashboard
                            </a>
                            <?php else: ?>
                            <a  style="color:gray;" href="<?php echo base_url('home/login')?>" title="Login" >
                                Login
                            </a>
                        <?php endif ?>
                        </li>
                    </ul>

                    <div id="header-social-icons">
                        <ul>

                            <li>
                                <a href="#" title="Twitter" data-placement="bottom" data-rel="tooltip" class="twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Facebook" data-placement="bottom" data-rel="tooltip" class="facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Google Plus" data-placement="bottom" data-rel="tooltip" class="google-plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Youtube" data-placement="bottom" data-rel="tooltip" class="youtube-play">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Pinterest" data-placement="bottom" data-rel="tooltip" class="pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="LinkedIn" data-placement="bottom" data-rel="tooltip" class="linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Skype" data-placement="bottom" data-rel="tooltip" class="skype">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Instagram" data-placement="bottom" data-rel="tooltip" class="instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="nav-wrapper">
        <div class="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a href="<?php echo base_url();?>" class="navbar-brand" title="Safandi">
                                <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo" />
                            </a>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="<?php echo base_url('home')?>" title="Home">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#products-section" title="Products" class="scrollto">
                                        News
                                    </a>
                                </li>
                                <li>
                                    <a href="#events-section" title="Events" class="scrollto">
                                        Events
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#portfolio-section" title="Galery" class="scrollto">
                                        Galery
                                    </a>
                                </li>

                                <li>
                                    <a href="#monials-section" title="About" class="scrollto">
                                        Testimonial
                                    </a>
                                </li>

                                <li>
                                    <a href="#about-us-section" title="About" class="scrollto">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#contact-section" title="Contact" class="scrollto">
                                        Contact
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo site_url() ?>profile/user" title="Profile">
                                        Profile
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>