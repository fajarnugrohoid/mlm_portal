<script type="text/javascript">
    function copylink(){
        var holdtext = $("#txt_copy_link").val();
        var isIe = (navigator.userAgent.toLowerCase().indexOf("msie") != -1 
         || navigator.userAgent.toLowerCase().indexOf("trident") != -1);

        document.addEventListener('copy', function(e) {
            var textToPutOnClipboard = "This is some text";
            if (isIe) {
                window.clipboardData.setData('Text', textToPutOnClipboard);    
            } else {
                e.clipboardData.setData('text/plain', textToPutOnClipboard);
            }
            e.preventDefault();
        });
    }
</script>

<section id="referral-section">
    <div class="container">
        <form role="form" id="form" class="contactForm" method="post" action="http://misc.nestolab.com/Safandi/php/send.php">
            <!-- col-md-6 -->
            <div class="col-md-6">

                <!-- LINK URL Ref -->
                <div class="col-md-12">
                    <div class="controls">
                        <input type="text" class="form-control" name="link_url_referral" id="txt_copy_link" value="<?php echo site_url() . $sess_member_id; ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-lg btn-nesto submit" onclick="copylink()">Copy Link</button>
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
