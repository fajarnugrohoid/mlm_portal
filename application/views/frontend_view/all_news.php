<section id="products-section" style="margin-bottom:0px !important;">
    <div class="container"> 
        <div class="col-md-12" style="margin-bottom:50px;padding: 50px 50px 10px 10px;">
            <div class="section-title">
                <div class="desc-title">
                    THis What We Have Of Promo
                </div>
                <div class="main-title">
                    All Promo
                </div>
            </div>
            <div class="row">
                <?php foreach($list_data as $row):?>
                <hr>
                <div class="row"> 
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <a href="<?php echo base_url().'home/detail_news/'.$row['id']?>">
                            <div class="feature-box-image">
                                <?php if ($row['image']==""): ?>
                                    <img style="width:125px;height:125px;" src="<?php echo base_url('assets/images/no_photo.png'); ?>"/>
                                <?php else: ?>
                                    <img style="width:125px;height:125px;" src= "<?php echo base_url().'assets/images/news/'.$row['image'] ?>"/>
                                <?php endif ?>
                            </div>
                        </a>
                    </div> 
                    <div class="col-xs-12 col-sm-9 col-md-9">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="row-picture">
                                    <a href="<?php echo base_url().'home/detail_news/'.$row['id']?>" title="sintret">
                                        <img src="<?php echo base_url('assets/images/png-gto-logo.png'); ?>"/>
                                    </a>
                                </div>
                                <div class="row-content">
                                    <div class="list-group-item-heading">
                                        <a href="<?php echo base_url().'home/detail_news/'.$row['id']?>" title="sintret">
                                            <small><?php echo substr($row['title'],0,12) ?></small>
                                        </a>
                                    </div>
                                    <small>
                                        <i class="glyphicon glyphicon-time"></i> <?php echo $row['author_date']; ?> </span>
                                        <br>
                                        <span class="explore"><i class="glyphicon glyphicon-th"></i> <a href="<?php echo base_url('home/all_news/')?>">category : promo </a></span>
                                    </small>
                                </div>
                            </div>
                        </div>
                        <!-- <h4><a href="#">Top 8 Best Bali Restaurants - WanderLuxe Magazine</a></h4> -->
                        <p><?php echo substr($row['description'],0,200) ?></p>
                        <a title="Read More" href="<?php echo base_url().'home/detail_news/'.$row['id']?>">Read More</a>
                    </div> 
                </div>
            <?php endforeach ?>
            </div>
            <?php  echo "<div class='col-md-12' align='center'>".$this->pagination->create_links()."</div>";?>
        </div>
    </div>
</section>