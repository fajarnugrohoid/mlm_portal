
<div id="carousel" class="carousel slide carousel-fade">
    <div class="carousel-inner">
        <div data-slide-no="0" class="item carousel-item active" align="center">
            <img src="<?php echo base_url('assets/images/slider/slide1.jpg'); ?>" alt="">
            <div class="carousel-caption">
                <h4>EL PODER DE TRANSFORMAR VIDAS</h4>
                <p>We Give You Power For Change Your Life</p>
            </div>
        </div>
        <div data-slide-no="1" class="item carousel-item" align="center">
            <img src="<?php echo base_url('assets/images/slider/slide2.jpg'); ?>" alt="">
            <div class="carousel-caption">
                <h4>WORLD CLASS PRODCUT</h4>
                <p>Feel The Wolrd Class Product</p>
            </div>
        </div>
        <div data-slide-no="2" class="item carousel-item" align="center">
            <img src="<?php echo base_url('assets/images/slider/slide3.jpg'); ?>" alt="">
            <div class="carousel-caption">
                <h4>FREEDOM TO BE YOU</h4>
                <p>Mix And Macth As Great Possible You Want</p>
            </div>
        </div>
    </div>
    <a class="carousel-control left" href="#carousel" data-slide="prev">‹</a>
    <a class="carousel-control right" href="#carousel" data-slide="next">›</a>
</div>
<section id="intro-section">
    <div class="container">
        <div class="row">
            <div class="home-boxes-wrapper">
                <?php foreach($promo as $row_hot_promo):?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature-box-style1">
                        <div class="box-container">
                            <div class="feature-box-image">
                                <?php if ($row_hot_promo->image==""): ?>
                                    <img style="width:125px;height:125px;" src="<?php echo base_url('assets/images/no_photo.png'); ?>"/>
                                <?php else: ?>
                                    <img style="width:125px;height:125px;" src= "<?php echo base_url().'assets/images/'.$row_hot_promo->image ?>"/>
                                <?php endif ?>
                            </div>
                            <div class="feature-box-icon">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            <div class="feature-box-containt">
                                <?php echo substr($row_hot_promo->title,0,12) ?>        
                                <br>
                                <a title="Read More">Read More</a> / <a title="Read More">See All News</a>
                            </div>
                            <div class="feature-box-subtitle">
                                <?php echo substr($row_hot_promo->description,0,12) ?>
                            </div>
                            <div class="feature-box-title">
                                <h4><?php echo substr($row_hot_promo->title,0,12) ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
</section>

<section id="products-section">
    <div class="container"> 
        <div class="col-md-6" style="padding: 50px 50px 10px 10px;">
            <div class="section-title">
                <div class="desc-title">
                    This Is Our Hot News Hope Its Makes You Interested.
                </div>
                <div class="main-title">
                    Hot News
                </div>
            </div>
            <div class="row">
                <?php foreach($news as $row_hot_news):?>
                <hr>
                <div class="row"> 
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="#">
                            <div class="feature-box-image">
                                <?php if ($row_hot_news->image==""): ?>
                                    <img style="width:125px;height:125px;" src="<?php echo base_url('assets/images/no_photo.png'); ?>"/>
                                <?php else: ?>
                                    <img style="width:125px;height:125px;" src= "<?php echo base_url().'assets/images/'.$row_hot_news->image ?>"/>
                                <?php endif ?>
                            </div>
                        </a>
                    </div> 
                    <div class="col-xs-12 col-sm-9 col-md-9">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row-picture">
                                    <a href="#" title="sintret">
                                        <img src="<?php echo base_url('assets/images/png-gto-logo.png'); ?>"/>
                                    </a>
                                </div>
                                <div class="row-content">
                                    <div class="list-group-item-heading">
                                        <a href="#" title="sintret">
                                            <small><?php echo substr($row_hot_news->title,0,12) ?></small>
                                        </a>
                                    </div>
                                    <small>
                                        <i class="glyphicon glyphicon-time"></i> 11/12/11 </span>
                                        <br>
                                        <span class="explore"><i class="glyphicon glyphicon-th"></i> <a href="#">category : news </a></span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <!-- <h4><a href="#">Top 8 Best Bali Restaurants - WanderLuxe Magazine</a></h4> -->
                        <p><?php echo substr($row_hot_news->description,0,200)."...." ?></p>
                    </div> 
                </div>
            <?php endforeach ?>
            </div>
        </div>
        <div class="col-md-6" style="padding: 50px 50px 10px 10px;">
            <div class="section-title">
                <div class="desc-title">
                    This Is Our Hot Product We Trust It Can be Your World.
                </div>
                <div class="main-title">
                    Hot Product
                </div>
            </div>
            <div class="row">
                <?php foreach($product as $row_hot_product):?>
                <hr>
                <div class="row"> 
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="#">
                            <div class="feature-box-image">
                                <?php if ($row_hot_product->image==""): ?>
                                    <img style="width:125px;height:125px;" src="<?php echo base_url('assets/images/no_photo.png'); ?>"/>
                                <?php else: ?>
                                    <img style="width:125px;height:125px;" src= "<?php echo base_url().'assets/images/'.$row_hot_product->image ?>"/>
                                <?php endif ?>
                            </div>
                        </a>
                    </div> 
                    <div class="col-xs-12 col-sm-9 col-md-9">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row-picture">
                                    <a href="#" title="sintret">
                                        <img src="<?php echo base_url('assets/images/png-gto-logo.png'); ?>"/>
                                    </a>
                                </div>
                                <div class="row-content">
                                    <div class="list-group-item-heading">
                                        <a href="#" title="sintret">
                                            <small><?php echo substr($row_hot_product->title,0,12) ?></small>
                                        </a>
                                    </div>
                                    <small>
                                        <i class="glyphicon glyphicon-time"></i> 11/12/11 </span>
                                        <br>
                                        <span class="explore"><i class="glyphicon glyphicon-th"></i> <a href="#">category : product </a></span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <!-- <h4><a href="#">Top 8 Best Bali Restaurants - WanderLuxe Magazine</a></h4> -->
                        <p><?php echo substr($row_hot_product->description,0,200)."...." ?></p>
                    </div> 
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </div>
</section><!--/products-section-->

<section id="how-to-jafra-section">
    <div class="container">
        <div class="row">
            <div class="main-title">
                Jafra How To
            </div>
            <p>
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
            </p>
        </div>
    </div>
</section><!--/how-to-jafra-section-->


<section id="events-section">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="section-title">
                <div class="main-title">
                    Events
                </div>
                <div class="desc-title">
                    Website creation services in a professional and reliable with excellent results
                </div>
            </div>
        </div>
        <?php foreach($event as $row_hot_event):?>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="feature-box-style2" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', delay:500}">
                <div class="feature-box-icon">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="feature-box-containt">
                    <h4><?php echo substr($row_hot_event->title,0,12) ?></h4>
                    <p><?php echo substr($row_hot_event->description,0,50) ?></p>
                    <div align="center"><a>Read More</a></div>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    <div align="center" class="col-md-12 see_all_news"><a>See All News</a></div>
</div>
</section>



<section id="monials-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <div class="main-title">
                        Testimonial
                    </div>
                    <div class="desc-title">

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:900}">
                    <div class="monials-block-left">
                        <div class="client-img">
                            <img src="<?php echo base_url('assets/images/clients/front-Arni.png'); ?>" alt="client" />
                        </div>
                        <div class="client-name">Arni Yuniati</div>
                        <div class="containt">
                            <p>
                                Saya Arni, penghasilan saya di Oriflame 17 juta per bulan.
                                Ketika pertama join Oriflame, target saya hanya ingin dapat bonus 4 jutaan per bulan untuk mengganti...
                                <div align="left"><a>Baca Selengkapnya ...</a></div>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:1100}">
                    <div class="monials-block-right">
                        <div class="client-img">
                            <img src="<?php echo base_url('assets/images/clients/front-adnein.png'); ?>" alt="client" />
                        </div>
                        <div class="client-name">Adnein</div>
                        <div class="containt">
                            <p>
                                Saya Adnein, penghasilan saya di Oriflame 20 juta per bulan.
                                Ini buku cerita saya tentang Oriflame, bisnis yang saya jalankan saat ini, yang membuat saya...
                                <div align="left"><a>Baca Selengkapnya ...</a></div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:900}">
                    <div class="monials-block-left">
                        <div class="client-img">
                            <img src="<?php echo base_url('assets/images/clients/front-detty.png'); ?>" alt="client" />
                        </div>
                        <div class="client-name">Detty Indriana</div>
                        <div class="containt">
                            <p>
                                Saya Detty, penghasilan saya di Oriflame 16 juta per bulan.
                                Perlahan tapi pasti, ilmu bisnis Oriflame saya bertambah, rekening tabungan saya makin lama makin...
                                <div align="left"><a>Baca Selengkapnya ...</a></div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:1100}">
                    <div class="monials-block-right">
                        <div class="client-img">
                            <img src="<?php echo base_url('assets/images/clients/1-90x90.jpg'); ?>" alt="client" />
                        </div>
                        <div class="client-name">jennifer collins</div>
                        <div class="containt">
                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt elit, laborei et dolore magnai aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>

<!--/about us-section-->

<section id="about-us-section">
    <div class="container">
        <div class="row">
            <div class="main-title">
                About Us
            </div>
            <p>
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
                Website creation services in a professional and reliable with excellent results
            </p>
        </div>
    </div>
</section>

<!--/about us-section-->



<!-- =========================================
Contact Us Section
========================================== -->
<!-- contact-section -->
<section id="contact-section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">


            <!-- col-md-12 -->
            <div class="col-md-12">

                <!-- section-title -->
                <div class="section-title">

                    <!-- main-title -->
                    <div class="main-title">
                        Contact Us
                    </div><!-- /main-title -->

                    <!-- desc-title -->
                    <div class="desc-title">
                        Submit a tip or just say hello, big or small, we've got a solution when you need it.
                    </div><!-- /desc-title -->

                </div><!-- /section-title -->

            </div><!-- /col-md-12 -->


            <!-- form -->
            <form role="form" id="form" class="contactForm" method="post" action="http://misc.nestolab.com/Safandi/php/send.php">


                <!-- col-md-6 -->
                <div class="col-md-6">

                    <!-- Contact Name -->
                    <div class="form-group" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:500}">

                        <div class="controls">
                            <input type="text" class="form-control requiredField" placeholder="Your name" name="name">
                        </div>

                    </div><!-- /Contact Name -->



                    <!-- Contact Mail -->
                    <div class="form-group" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:500}">

                        <div class="controls">
                            <input type="email" class="form-control email requiredField" placeholder="Your email" name="email">
                        </div>

                    </div><!-- /Contact Mail -->


                    <!-- Contact Subject -->
                    <div class="form-group" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:500}">

                        <div class="controls">
                            <input type="text" class="form-control requiredField" placeholder="Subject" name="subject">
                        </div>

                    </div><!-- /Contact Subject -->

                </div><!-- /col-md-6 -->


                <!-- col-md-6 -->
                <div class="col-md-6">

                    <!-- Contact Message -->
                    <div class="form-group" data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:500}">

                        <div class="controls">
                            <textarea rows="10" class="form-control requiredField" placeholder="Your message" name="message"></textarea>
                        </div>

                    </div><!-- /Contact Message -->

                    <!-- Submit Button -->
                    <div  data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:500}">
                        <button type="submit" class="btn btn-lg btn-nesto submit">Submit</button>
                    </div>

                </div><!-- /col-md-6 -->


            </form><!-- /form -->


        </div><!-- /row -->
    </div><!-- /container -->
</section><!-- /contact-section -->




<!-- =========================================
Map Section
========================================== -->
<!-- map-section -->
<!-- <section id="map-section">
    <div id="map"></div>
</section> -->

