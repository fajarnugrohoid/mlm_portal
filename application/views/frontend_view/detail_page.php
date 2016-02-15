<section>
    <div class="col-md-3">

        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">
            List Menu
            <span class="pull-right"><i class="glyphicon glyphicon-chevron-right"></i></span>
        </div>
        <!-- List group -->
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>
</div>
<div class="col-md-9" id="products-section" style="margin-bottom:0px !important;">
    <div class="col-md-4">
        <div class="row">
            <div class="col-sm-12"> 
                <a href="#" class="ribbon-container"> 
                    <img src="http://placehold.it/300x150" alt=""> 
                    <span class="ribbon"><i =class="fa fa-database fa-fw"> Title</i>
                    </span></img>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-8" style="margin-top:25px;">
        <h3><i><b>asvragegregsegstrsr</b></i></h3>
        <small>
            <i class="glyphicon glyphicon-time"></i> 11/11/1111</span>
            <br>
            <span class="explore"><i class="glyphicon glyphicon-th"></i> <a href="<?php echo base_url('home/all_product/')?>">category : product </a></span>
        </small>
    </div>
    <div class="col-md-12" style="margin-top:50px;">
        <h3><i>Description : </i></h3>
        <div>vewvzewveawwwwwwwwwwwwwwwwwwwwwwwww</div>
        <div style="margin-bottom:20px;" align="right"><small>Author:admin</small></div>
    </div>
</div>
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