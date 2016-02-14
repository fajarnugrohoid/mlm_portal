<div class="col-sm-12" id="news_add">
  <div class="grid">
    <div class="panel panel-default">
      <div class="panel-heading black-chrome">Add Data</div>
      <div class="panel-body">
        <div align="center" class="col-md-12" style="margin-left:25px;">
          <?php if(isset($_SESSION)) {
            echo $this->session->flashdata('flash_data');
          } ?>
        </div>
        <?php foreach ($data_edit as $val) {?>
        <?php echo form_open_multipart('register/submit'); ?>
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Data Sponsor / Upline</h3>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label>Email Sponsor</label>
                <input type="email" name="sponsor_email" class="form-control" placeholder="admin@mail.com" required>
              </div>
              <div class="form-group">
                <label>Username Sponsor</label>
                <input type="password" name="sponsor_name" class="form-control" placeholder="admin" required>
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
                <input type="text" name="name" class="form-control" placeholder="username" required>
              </div>
              <div class="form-group">
                <label>Birthday Place</label>
                <input type="text" name="birthday_place" class="form-control" placeholder="New York" required>
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="birthday" class="form-control" placeholder="dd/mm/yyyy" required>
              </div>
              <div class="form-group">
                <label>Nomor Telepon Genggam</label>
                <input type="text" name="handphone" class="form-control" placeholder="+62 85862624149" required>
              </div>
              <div class="form-group">
                <label>Nomor Telepon</label>
                <input type="text" name="phone" class="form-control" placeholder="+62 021 111 11111" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="admin@gmail.com" required>
              </div>
              <div class="form-group">
                <label>Nama Ibu</label>
                <input type="email" name="mothers_name" class="form-control" placeholder="admin@gmail.com" required>
              </div>
              <div class="form-group">
                <label>Nationality</label>
                <input type="text" name="nationality" class="form-control" placeholder="Indonesia" required>
              </div>
              <div class="form-group">
                <label>No KTP</label>
                <input type="text" name="no_ktp" class="form-control" placeholder="123456789" required>
              </div>
              <div class="form-group">
                <label>No SIM</label>
                <input type="text" name="no_sim" class="form-control" placeholder="123456789" required>
              </div>
              <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="job" class="form-control" placeholder="Developer" required>
              </div>
              <div class="form-group">
                <label>Bank</label>
                <input type="text" name="bank" class="form-control" placeholder="Mandiri" required>
              </div>
              <div class="form-group">
                <label>Nama Akun Bank</label>
                <input type="text" name="bank_an" class="form-control" placeholder="Admin" required>
              </div>
              <div class="form-group">
                <label>Nomor Rekening</label>
                <input type="text" name="no_rek" class="form-control" placeholder="123456789" required>
              </div>
              <div class="form-group">
                <label>Cabang Bank</label>
                <input type="text" name="bank_branch" class="form-control" placeholder="Sukabumi" required>
              </div>
              <div class="form-group">
                <label>Kota Bank</label>
                <input type="text" name="bank_city" class="form-control" placeholder="Bandung" required>
              </div>
              <div class="form-group">
                <label>Nilai</label>
                <input type="text" name="value" class="form-control" placeholder="1000.000.000" required>
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
                <input type="text" name="bank_branch" class="form-control" placeholder="Sukabumi" required>
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
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="userfile" class="form-control" id="userfile">
                <br>
                <img style="width:150px;height:150px;" class="show_foto" src="#" id="div_image">
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Alamat</h3>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label>Alamat KTP</label>
                <input type="text" name="ktp_address" class="form-control" placeholder="kp.xxx rt000/000" required>
              </div>
              <div class="form-group">
                <label>Daerah</label>
                <input type="text" name="ktp_district" class="form-control" placeholder="sukabumi" required>
              </div>
              <div class="form-group">
                <label>Kecamatan</label>
                <input type="text" name="ktp_subdistrict" class="form-control" placeholder="limbagan" required>
              </div>
              <div class="form-group">
                <label>Kabupaten/Kota Madya</label>
                <input type="text" name="ktp_city" class="form-control" placeholder="sukabumi" required>
              </div>
              <div class="form-group">
                <label>Propinsi</label>
                <input type="text" name="ktp_province" class="form-control" placeholder="jawa barat" required>
              </div>
              <div class="form-group">
                <label>Alamat Pengiriman</label>
                <input type="text" name="shipment_address" class="form-control" placeholder="kp.xxxxx rt 000/000" required>
              </div>
              <div class="form-group">
                <label>Daerah pengiriman</label>
                <input type="text" name="shipment_district" class="form-control" placeholder="sukabumi" required>
              </div>
              <div class="form-group">
                <label>Kecamatan Pengiriman</label>
                <input type="text" name="shipment_subdistricts" class="form-control" placeholder="sukaraja" required>
              </div>
              <div class="form-group">
                <label>Kabupaten/Kota Madya Pengiriman</label>
                <input type="text" name="shipment_city" class="form-control" placeholder="sukabumi" required>
              </div>
              <div class="form-group">
                <label>Propinsi Pengiriman</label>
                <input type="text" name="shipment_province" class="form-control" placeholder="Jawabarat" required>
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
          <div align="center">
            <button type="submit" name="register" class="btn btn-success">Sign Up</button>
          </div>
        </div>
        <?php echo form_close();?> 
        <?php } ?>
      </div>
    </div>
  </div>
</div>
</div>