<?php 
if(isset($_COOKIE['remember_me_cookie'])) 
{
    if ($level=$this->session->userdata('level')=='admin') 
    {
        redirect('backend_controller/dashboard_controller/index');
    }
    else if($level=$this->session->userdata('level')=='guest')
    {
        redirect('backend_controller/dashboard_controller/dashboard_user');
    }
    
}
?>
<link href="<?php echo base_url('assets/css/frontend/login.css'); ?>" rel="stylesheet">
<div class="container">
    <div class="row">
        <div align="center">
            <?php if(isset($_SESSION)) {
                echo $this->session->flashdata('flash_data');
            } ?>
        </div>
        <div class='col-md-3'></div>
        <div class="col-md-6">
            <div class="login-box well">
                <?php echo form_open('login/auth'); ?>
                    <legend>Sign In</legend>
                    <div class="form-group">
                        <label for="username-email">E-mail or Username</label>
                        <input value='' id="email" name="email" placeholder="E-mail" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" name="password" value='' placeholder="Password" type="text" class="form-control" />
                    </div>
                    <!-- <div class="input-group">
                        <div class="checkbox">
                            <label><input id="login-remember" type="checkbox" name="remember" value="1"> Remember me</label>
                        </div>
                    </div> -->
                    <div class="form-group link_register">
                        <button type="submit" class="btn btn-default btn-login-submit btn-block m-t-md">Login</button>
                    </div>
                <?php echo form_close(); ?>
                <!-- <span class='text-center'><a href="/resetting/request" class="text-sm">Forgot Password?</a></span> -->
                <div class="form-group">
                    <p class="text-center m-t-xs text-sm">Do not have an account? <span class="label_login_fb">or login with facebook</span> &nbsp;<span id="fb-root"></span><span class="fb-login-button"></span></p> 
                    <a href="/register/" class="btn btn-default btn-block m-t-md">Create an account</a>
                </div>
            </div>
        </div>
        <div class='col-md-3'></div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/frontend/login.js')?>"></script>