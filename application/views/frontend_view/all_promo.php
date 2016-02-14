<section id="products-section" style="margin-bottom:0px !important;">
    <div class="container"> 
        <div class="col-md-12" style="padding: 50px 50px 10px 10px;">
            <div class="section-title">
                <div class="desc-title">
                    THis What We Have Of Product
                </div>
                <div class="main-title">
                    All Product
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
    </div>
</section>