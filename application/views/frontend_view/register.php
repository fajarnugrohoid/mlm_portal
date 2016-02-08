<link href="<?php echo base_url('assets/css/frontend/login.css'); ?>" rel="stylesheet">
<div class=" col-md-12 login-content">
  <div align="center" style="margin-top:80px;">
    <?php if(isset($_SESSION)) {
      echo $this->session->flashdata('flash_data');
    } ?>
  </div>
  <div class="col-md-12 login-box container-fluid" style="margin-bottom:80px;">
    <legend>Sing Up</legend>
    <div class="col-md-7">
      <?php echo form_open('register/submit'); ?>
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control" placeholder="username" required>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="********" required>
      </div>
      <div class="form-group col-md-6">
        <label>Email</label>
        <input type="text" name="email" class="form-control" placeholder="admin" required>
      </div>
      <div class="form-group col-md-6">
        <label>Domain Email</label>
        <select name="type_email" id="type_email" class="form-control">
          <option value="gmail.com">gmail.com</option>
          <option value="yahoo.com">yahoo.com</option>
        </select>
      </div>
      <div class="form-group panel-captcha">
        <div class="image" align="center" style="margin-bottom:25px;margin-top:85px;"><?php echo $captcha_img;?></div>
        <div class="input-group">
          <input name="captcha" class="form-control" required>
          <span class="input-group-addon" id="basic-addon2">&nbsp;&nbsp;<a href='' class ='refresh'><i class='fa fa-refresh'></i>&nbsp;perbarui gambar</a></span>
        </div>
        <?php
        $wrong = $this->input->get('cap_error');
        if($wrong)
        {
          ?>
          <span style="color:red;">Wrong Input capthca,please try again</span>
          <?php
        }
        ?>
      </div>
    </div>
    <div class="col-md-5">
      <h3 class="dark-grey">Terms and Conditions</h3>
      <p>
        By clicking on "Register" you agree to The Company's' Terms and Conditions
      </p>
      <p>
        While you have been registered, your account has activated but does'nt have ID NUMBER until adminsitrator process it!
      </p>
      <p>
        contact your administrator @ israj.haliri@gmail.com or 085862624149 and you should there be an error in the description or pricing of a product
      </p>
      <p>
        Acceptance of an order by us is dependent on our suppliers ability to provide the product
      </p>
    </div>  
    <div align="center">
      <button type="submit" name="register" class="btn btn-success">Sign Up</button>
    </div>
    <?php echo form_close();?> 
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    var base_url= "<?php echo base_url()?>";
    $("a.refresh").click(function(e) {
      e.preventDefault(); 
      $.ajax({
        type: "POST",
        url: base_url + "register/captcha_refresh",            
        success: function(res) {
          console.log(res);
          if (res)
          {
            jQuery("div.image").html(res);
          }
        }
      });
    });
  });
</script>

