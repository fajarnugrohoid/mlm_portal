<link href="<?php echo base_url('assets/css/frontend/login.css'); ?>" rel="stylesheet">
<div class=" col-md-12 login-content">
  <div align="center" style="margin-top:80px;">
    <?php if(isset($_SESSION)) {
      echo $this->session->flashdata('flash_data');
    } ?>
  </div>
  <div class="col-md-12 login-box container-fluid" style="margin-bottom:80px;">
    <legend>Sing Up</legend>
    <?php echo form_open('register/submit'); ?>
    <div class="col-md-7">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Data Sponsor / Upline</h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label>Nama Sponsor</label>
            <input type="text" name="nama_sponsor" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group">
            <label>Username Sponsor</label>
            <input type="password" name="username_sponsor" class="form-control" placeholder="admin" required>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Username & Password</h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="username" required>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="********" required>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Data Pendaftar</h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="username" class="form-control" placeholder="username" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="password" name="password" class="form-control" placeholder="********" required>
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select>
              <option value="laki-laki">L</option>
              <option value="perempuan">P</option>
            </select>
          </div>
          <div class="form-group">
            <label>No KTP</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group">
            <label>No HP</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Alamat</h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="username" class="form-control" placeholder="username" required>
          </div>
          <div class="form-group">
            <label>Kelurahan</label>
            <input type="password" name="password" class="form-control" placeholder="********" required>
          </div>
          <div class="form-group">
            <label>Kecamatan</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group">
            <label>Kabupaten/Kota Madya</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group">
            <label>Propinsi</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group">
            <label>Kode POS</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group">
            <label>No Telp</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group">
            <label>Pin BB</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group">
            <label>Whats Up</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group">
            <label>Facebook</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control">
              <option value="laki-laki">L</option>
              <option value="perempuan">P</option>
            </select>
          </div>
          <div class="form-group">
            <label>No KTP</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group">
            <label>No HP</label>
            <input type="email" name="email" class="form-control" placeholder="admin" required>
          </div>
          <div class="form-group panel-captcha">
            <div class="image" align="center" style="margin-bottom:25px;margin-top:25px;"><?php echo $captcha_img;?></div>
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
  </div>
  <div align="center">
    <button type="submit" name="register" class="btn btn-success">Sign Up</button>
  </div>
  <?php echo form_close();?> 
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

