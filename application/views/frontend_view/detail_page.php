<section class="container">    
    <?php foreach($list_data as $row):?>
        <div class="col-md-12 row" id="products-section" style="margin-bottom:0px !important;color:black;padding-top : 50px;padding-bottom : 50px;padding-left : 0px;padding-right : 0px;min-height:438px;">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-sm-12" align="right"> 
                        <a href="#" class="ribbon-container"> 
                            <?php if ($row->image ==""): ?>
                                <img style="width:150px;height:150px;" src="<?php echo base_url('assets/images/no_photo.png'); ?>"/>
                            <?php else: ?>
                                <img style="width:150px;height:150px;" src= "<?php echo base_url().'assets/images/news/'.$row->image ?>"/>
                            <?php endif ?> 
                            <span class="ribbon"><i =class="fa fa-database fa-fw"> <?php echo $row->title ?></i>
                            </span></img>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8" style="margin-top:25px;margin-left:0px">
            <h3><i><b><?php echo $row->title ?></b></i></h3>
                <small>
                    <i class="glyphicon glyphicon-time"></i> 11/11/1111</span>
                    <br>
                    <span class="explore"><i class="glyphicon glyphicon-th"></i>category : product</span>
                </small>
            </div>
            <div class="col-md-12" style="padding-left:200px;padding-right:200px;margin-top:50px;">
                <h3><i>Description : </i></h3>
                <div><?php echo $row->description ?></div>
                <div style="margin-bottom:20px;" align="right"><small>Author : <?php echo $row->author ?></small></div>
            </div>
        </div>
    <?php endforeach ?>
</section>
<style type="text/css">

    .ribbon-container {
        position: relative;
        display: inline-block;
        line-height: 1;
    }
    .ribbon-container img {
        vertical-align: middle;
    }
    .ribbon {
        position: absolute;
        bottom: 1em;
        left: 0;
        margin-right: 1em;
        padding: .75em 1.25em .75em .75em;
        border-radius: 0 .5em .5em 0;
        background-color: #39f;
        background-image: linear-gradient(to right, rgba(0,0,0,0) 0%, rgba(0,0,0,.1) 100%);
        box-shadow: inset 0 .062em 0 rgba(255,255,255,.6), 0 .125em .25em rgba(0,0,0,.2);
        color: #fff;
        text-shadow: 0 -.062em 0 rgba(0,0,0,.2);
        white-space: nowrap;
        transition: background-color .2s ease-in-out;
    }
    .ribbon:before,
    .ribbon:after {
        position: absolute;
        background-color: inherit;
        content: "";
    }
    .ribbon:before {
        bottom: 0;
        left: -.5em;
        width: .5em;
        height: 3em;
        border-radius: 0 0 0 .5em;
        background-image: linear-gradient(to right, rgba(0,0,0,.2) 0%, rgba(0,0,0,0) 100%);
    }
    .ribbon:after {
        top: -1em;
        left: -.5em;
        width: .5em;
        height: 1em;
        border-radius: .5em 0 0 .5em;
        background-image: linear-gradient(to right, rgba(0,0,0,0) 0%, rgba(0,0,0,.2) 100%);
        box-shadow: 0 .062em 0 rgba(255,255,255,.6);
    }
    .ribbon-container:hover .ribbon {
        background-color: #7acc29;
    }
</style>