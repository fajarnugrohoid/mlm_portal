<script type="text/javascript" src="<?php echo base_url('assets/js/frontend/zeroclipboard/ZeroClipboard.js')?>"></script>
<script type="text/javascript">
$(document).ready(function() {
  var clip = new ZeroClipboard($("#btn_copy_link"), {
      moviePath: "<?php echo base_url('assets/js/frontend/zeroclipboard/ZeroClipboard.swf') ?>"
    });     
});
</script>

<section id="referral-section">
    <div class="container">
        <form role="form" id="form" class="contactForm" method="post" action="#">
            <!-- col-md-6 -->
            <div class="col-md-6">

                <!-- LINK URL Ref -->
                <div class="col-md-12">
                    <div class="controls">
                        <input type="text" class="form-control" name="link_url_referral" data-clipboard-text="<?php echo $link_referral; ?>" id="txt_copy_link" value="<?php echo $link_referral; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-lg btn-nesto submit" data-clipboard-text="<?php echo $link_referral; ?>" id="btn_copy_link">Copy Link</button>
                </div>

            </div><!-- /col-md-6 -->

            <!-- col-md-6 -->
            <div class="col-md-6">

                <!-- Email -->
                <div class="form-group" data-uk-scrollspy="{cls:'uk-animation-slide-right', delay:500}">

                    <div class="controls">
                        <textarea rows="10" class="form-control" placeholder="Email" name="email"></textarea>
                    </div>

                </div><!-- /Email -->

                <!-- Send Button -->
                <button type="submit" class="btn btn-lg btn-nesto submit">Kirim</button>

            </div><!-- /col-md-6 -->
        </form>
    </div>
</section><!--/products-section-->
