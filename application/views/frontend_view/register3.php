<link href="<?php echo base_url('assets/css/frontend/login.css'); ?>" rel="stylesheet">
<div class=" col-md-12 login-content">
  <div align="center" style="margin-top:80px;">
    <?php if(isset($_SESSION)) {
      echo $this->session->flashdata('flash_data');
    } ?>
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
  <div class="col-md-12 login-box container-fluid" style="margin-bottom:80px;">
    <legend>Sing Up</legend>
    <?php echo form_open_multipart('register/submit'); ?>
    <div id="step-daftar">
      <h3>Data Sponsor / Upline</h3>
      <section>
        <div class="form-group">
          <label>Email Sponsor</label>
          <input type="email" name="sponsor_email" class="form-control" placeholder="admin@mail.com" >
        </div>
        <div class="form-group">
          <label>Username Sponsor</label>
          <input type="text" name="sponsor_name" class="form-control" placeholder="admin" >
        </div>
      </section>
      <h3>User Account</h3>
      <section>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control" placeholder="username" >
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="********" >
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" placeholder="admin@gmail.com" >
        </div>
        <div class="form-group">
          <label>Image</label>
          <input type="file" name="userfile" class="form-control" id="userfile">
          <br>
          <img style="width:75px;height:75px;" class="show_foto" src="#" id="div_image">
        </div>
      </section>
      <h3>Data Pendaftar</h3>
      <section>
        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="name" class="form-control" placeholder="username" >
        </div>
        <div class="form-group">
          <label>Birthday Place</label>
          <input type="text" name="birthday_place" class="form-control" placeholder="New York" >
        </div>
        <div class="form-group">
          <label>Tanggal Lahir</label>
          <input type="date" name="birthday" class="form-control" placeholder="dd/mm/yyyy" >
        </div>
        <div class="form-group">
          <label>Nomor Telepon Genggam</label>
          <input type="text" name="handphone" class="form-control" placeholder="+62 85862624149" >
        </div>
        <div class="form-group">
          <label>Nomor Telepon</label>
          <input type="text" name="phone" class="form-control" placeholder="+62 021 111 11111" >
        </div>
      </section>
      <h3>Detail Data Pendaftar Data Diri</h3>
      <section>
        <div class="form-group">
          <label>No KTP</label>
          <input type="text" name="no_ktp" class="form-control" placeholder="123456789" >
        </div>
        <div class="form-group">
          <label>Nama Ibu</label>
          <input type="text" name="mothers_name" class="form-control" placeholder="admin@gmail.com" >
        </div>
        <div class="form-group">
          <label>No SIM</label>
          <input type="text" name="no_sim" class="form-control" placeholder="123456789" >
        </div>
        <div class="form-group">
          <label>Status</label>
          <select name="status" class="form-control">
            <option value="Menikah">Menikah</option>
            <option value="Lajang">Lajang</option>
            <option value="Bercerai">Bercerai</option>
          </select>
        </div>
        <div class="form-group">
          <label>Jenis Kelamin</label>
          <select name="sex" class="form-control">
            <option value="laki-laki">L</option>
            <option value="perempuan">P</option>
          </select>
        </div>
      </section>
      <h3>Detail Data Pendaftar Data bank</h3>
      <section>
        <div class="form-group">
          <label>Pekerjaan</label>
          <input type="text" name="job" class="form-control" placeholder="Developer" >
        </div>
        <div class="form-group">
          <label>Bank</label>
          <input type="text" name="bank" class="form-control" placeholder="Mandiri" >
        </div>
        <div class="form-group">
          <label>Nama Akun Bank</label>
          <input type="text" name="bank_an" class="form-control" placeholder="Admin" >
        </div>
        <div class="form-group">
          <label>Nomor Rekening</label>
          <input type="text" name="no_rek" class="form-control" placeholder="123456789" >
        </div>
        <div class="form-group">
          <label>Cabang Bank</label>
          <input type="text" name="bank_branch" class="form-control" placeholder="Sukabumi" >
        </div>
      </section>
      <h3>Detail Data Pendaftar Data bank 2</h3>
      <section>
        <div class="form-group">
          <label>Nationality</label>
          <input type="text" name="nationality" class="form-control" placeholder="Indonesia" >
        </div>
        <div class="form-group">
          <label>Kota Bank</label>
          <input type="text" name="bank_city" class="form-control" placeholder="Bandung" >
        </div>
        <div class="form-group">
          <label>Nilai</label>
          <input type="text" name="value" class="form-control" placeholder="1000.000.000" >
        </div>
        <div class="form-group">
          <label>Rencana</label>
          <select class="form-control" name="status_barang">
            <option value="Kirim">Kirim</option>
            <option value="Ambil">Ambil</option>
          </select>
        </div>
        <div class="form-group">
          <label>Cabang Bank</label>
          <input type="text" name="bank_branch" class="form-control" placeholder="Sukabumi" >
        </div>
      </section>
      <h3>Alamat</h3>
      <section>
        <div class="form-group">
          <label>Alamat KTP</label>
          <input type="text" name="ktp_address" class="form-control" placeholder="kp.xxx rt000/000" >
        </div>
        <div class="form-group">
          <label>Daerah</label>
          <input type="text" name="ktp_district" class="form-control" placeholder="sukabumi" >
        </div>
        <div class="form-group">
          <label>Kecamatan</label>
          <input type="text" name="ktp_subdistrict" class="form-control" placeholder="limbagan" >
        </div>
        <div class="form-group">
          <label>Kabupaten/Kota Madya</label>
          <input type="text" name="ktp_city" class="form-control" placeholder="sukabumi" >
        </div>
        <div class="form-group">
          <label>Propinsi</label>
          <input type="text" name="ktp_province" class="form-control" placeholder="jawa barat" >
        </div>
      </section>
      <h3>Alamat</h3>
      <section>
        <div class="form-group">
          <label>Alamat Pengiriman</label>
          <input type="text" name="shipment_address" class="form-control" placeholder="kp.xxxxx rt 000/000" >
        </div>
        <div class="form-group">
          <label>Daerah pengiriman</label>
          <input type="text" name="shipment_district" class="form-control" placeholder="sukabumi" >
        </div>
        <div class="form-group">
          <label>Kecamatan Pengiriman</label>
          <input type="text" name="shipment_subdistricts" class="form-control" placeholder="sukaraja" >
        </div>
        <div class="form-group">
          <label>Kabupaten/Kota Madya Pengiriman</label>
          <input type="text" name="shipment_city" class="form-control" placeholder="sukabumi" >
        </div>
        <div class="form-group">
          <label>Propinsi Pengiriman</label>
          <input type="text" name="shipment_province" class="form-control" placeholder="Jawabarat" >
        </div>
      </section>
      <h3 class="dark-grey">Terms and Conditions</h3>
      <section>
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
        <div class="form-group panel-captcha">
          <div class="image" align="center" style="margin-bottom:25px;margin-top:25px;"><?php echo $captcha_img;?></div>
          <div class="input-group">
            <input name="captcha" class="form-control" required>
            <span class="input-group-addon" id="basic-addon2">&nbsp;&nbsp;<a href='' class ='refresh'><i class='fa fa-refresh'></i>&nbsp;perbarui gambar</a></span>
          </div>
        </div>
        <div align="center" style="margin-top:20px;">
          <button type="submit" name="register" class="btn btn-success">Sign Up</button>
        </div>
      </section>
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


    $("#step-daftar").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      autoFocus: true
    });

  });
</script>

