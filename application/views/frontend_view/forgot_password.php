<link href="<?php echo base_url('assets/css/frontend/login.css'); ?>" rel="stylesheet">
<div class="col-md-12 container" style="margin-bottom:30px;">
    <div class="row">
        <div style="margin-top:50px;" class="col-md-12" align="center">
            <?php if(isset($_SESSION)) {
                echo $this->session->flashdata('flash_data');
            } ?>
        </div>
        <div class='col-md-3'></div>
        <div class="col-md-6">
            <div class="login-box well">
                <?php echo form_open('forgot_password/submit'); ?>
                    <legend>Forgot Password</legend>
                    <div class="form-group">
                        <label for="username-email">Email</label>
                        <input value='' id="email" name="email" placeholder="Email" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input id="new_password" name="new_password" value='' placeholder="New Password" type="text" class="form-control" />
                    </div>
                    <div class="form-group link_register">
                        <button type="submit" class="btn btn-default btn-login-submit btn-block m-t-md">Send Request</button>
                    </div>
                <?php echo form_close(); ?>
                <span class='text-center'>Already remeber password Click <a href="<?php echo base_url('home/login/')?>" class="text-sm">Login</a></span>
                <div class="form-group">
                    <p class="text-center m-t-xs text-sm">Do not have an account? <span class="label_login_fb">or login with facebook</span> &nbsp;<span id="fb-root"></span><span class="fb-login-button"></span></p> 
                    <a href="<?php echo base_url('home/register/')?>" class="btn btn-default btn-block m-t-md">Create an account</a>
                </div>
            </div>
        </div>
        <div class='col-md-3'></div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/frontend/login.js')?>"></script>