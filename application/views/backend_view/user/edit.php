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
        <?php echo form_open_multipart('backend/user/edit_user_data'); ?>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title" style="color:white;">Data Sponsor / Upline</h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label>Email Sponsor</label>
              <input type="email" name="sponsor_email" class="form-control" placeholder="admin@mail.com" value="<?php echo $val->sponsor_email ?>" required>
            </div>
            <div class="form-group">
              <label>Username Sponsor</label>
              <input type="text" name="sponsor_name" class="form-control" placeholder="admin" value="<?php echo $val->sponsor_name ?>" required>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title" style="color:white;">Username & Password</h3>
          </div>
          <div class="panel-body">
            <div class="form-group" style="display:none">
              <label>ID</label>
              <input type="text" name="id" id="id" class="form-control" value="<?php echo $val->id ?>">
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" placeholder="admin" value="<?php echo $val->username ?>" required>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="********" value="<?php echo $val->password ?>" required>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title" style="color:white;">Data Pendaftar</h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="name" class="form-control" placeholder="admin" value="<?php echo $val->name ?>" required>
            </div>
            <div class="form-group">
              <label>Birthday Place</label>
              <input type="text" name="birthday_place" class="form-control" placeholder="New York" value="<?php echo $val->birthday_place ?>" required>
            </div>
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="date" name="birthday" class="form-control" placeholder="dd/mm/yyyy" value="<?php echo $val->birthday ?>" required>
            </div>
            <div class="form-group">
              <label>Nomor Telepon Genggam</label>
              <input type="text" name="handphone" class="form-control" placeholder="+62 85862624149" value="<?php echo $val->handphone ?>" required>
            </div>
            <div class="form-group">
              <label>Nomor Telepon</label>
              <input type="text" name="phone" class="form-control" placeholder="+62 021 111 11111" value="<?php echo $val->phone ?>" required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" placeholder="admin@gmail.com" value="<?php echo $val->email ?>" required>
            </div>
            <div class="form-group">
              <label>Nama Ibu</label>
              <input type="text" name="mothers_name" class="form-control" placeholder="admin@gmail.com" value="<?php echo $val->mothers_name ?>" required>
            </div>
            <div class="form-group">
              <label>Nationality</label>
              <input type="text" name="nationality" class="form-control" placeholder="Indonesia" value="<?php echo $val->nationality ?>" required>
            </div>
            <div class="form-group">
              <label>No KTP</label>
              <input type="text" name="no_ktp" class="form-control" placeholder="123456789" value="<?php echo $val->no_ktp ?>" required>
            </div>
            <div class="form-group">
              <label>No SIM</label>
              <input type="text" name="no_sim" class="form-control" placeholder="123456789" value="<?php echo $val->no_sim ?>" required>
            </div>
            <div class="form-group">
              <label>Pekerjaan</label>
              <input type="text" name="job" class="form-control" placeholder="Developer" value="<?php echo $val->job ?>" required>
            </div>
            <div class="form-group">
              <label>Bank</label>
              <input type="text" name="bank" class="form-control" placeholder="Mandiri" value="<?php echo $val->bank ?>" required>
            </div>
            <div class="form-group">
              <label>Nama Akun Bank</label>
              <input type="text" name="bank_an" class="form-control" placeholder="Admin" value="<?php echo $val->bank_an ?>" required>
            </div>
            <div class="form-group">
              <label>Nomor Rekening</label>
              <input type="text" name="no_rek" class="form-control" placeholder="123456789" value="<?php echo $val->no_rek ?>" required>
            </div>
            <div class="form-group">
              <label>Cabang Bank</label>
              <input type="text" name="bank_branch" class="form-control" placeholder="Sukabumi"  value="<?php echo $val->bank_branch ?> "required>
            </div>
            <div class="form-group">
              <label>Kota Bank</label>
              <input type="text" name="bank_city" class="form-control" placeholder="Bandung" value="<?php echo $val->bank_city ?>" required>
            </div>
            <div class="form-group">
              <label>Nilai</label>
              <input type="text" name="value" class="form-control" placeholder="1000.000.000" value="<?php echo $val->value ?>" required>
            </div>
            <div class="form-group">
              <label>Rencana</label>
              <select class="form-control" name="status_barang">
                <option value="Kirim" <?php if($val->status_barang == 'Kirim'){ echo 'selected'; } ?> >Kirim</option>
                <option value="Ambil" <?php if($val->status_barang == 'Ambil'){ echo 'selected'; } ?> >Ambil</option>
              </select>
            </div>
            <div class="form-group">
              <label>Cabang Bank</label>
              <input type="text" name="bank_branch" class="form-control" placeholder="Sukabumi" required>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select name="status" class="form-control">
                <option value="Menikah" <?php if($val->status == 'Menikah'){ echo 'selected'; } ?> >Menikah</option>
                <option value="Lajang" <?php if($val->status == 'Lajang'){ echo 'selected'; } ?>>Lajang</option>
                <option value="Bercerai" <?php if($val->status == 'Bercerai'){ echo 'selected'; } ?>>Bercerai</option>
              </select>
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select name="sex" class="form-control">
                <option value="laki-laki" <?php if($val->status == 'laki-laki'){ echo 'selected'; } ?>>L</option>
                <option value="perempuan" <?php if($val->status == 'perempuan'){ echo 'selected'; } ?>>P</option>
              </select>
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="userfile" class="form-control" id="userfile">
              <br>
              <?php if ($val->photo ==""): ?>
                <img style="width:150px;height:150px;"  class="show_foto" src= "<?php echo base_url().'assets/images/no_photo.png' ?>" id="div_image_edit">  
              <?php else: ?>
                <img style="width:150px;height:150px;"  class="show_foto" src= "<?php echo base_url().'assets/images/news/'.$val->photo ?>" id="div_image_edit">
              <?php endif ?>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title" style="color:white;">Alamat</h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label>Alamat KTP</label>
              <input type="text" name="ktp_address" class="form-control" placeholder="kp.xxx rt000/000" value="<?php echo $val->ktp_address ?>" required>
            </div>
            <div class="form-group">
              <label>Daerah</label>
              <input type="text" name="ktp_district" class="form-control" placeholder="sukabumi" value="<?php echo $val->ktp_districts ?>" required>
            </div>
            <div class="form-group">
              <label>Kecamatan</label>
              <input type="text" name="ktp_subdistrict" class="form-control" placeholder="limbagan" value="<?php echo $val->ktp_subdistricts ?>" required>
            </div>
            <div class="form-group">
              <label>Kabupaten/Kota Madya</label>
              <input type="text" name="ktp_city" class="form-control" placeholder="sukabumi" value="<?php echo $val->ktp_city ?>" required>
            </div>
            <div class="form-group">
              <label>Propinsi</label>
              <input type="text" name="ktp_province" class="form-control" placeholder="jawa barat" value="<?php echo $val->ktp_province ?>" required>
            </div>
            <div class="form-group">
              <label>Alamat Pengiriman</label>
              <input type="text" name="shipment_address" class="form-control" placeholder="kp.xxxxx rt 000/000" value="<?php echo $val->shipment_address ?>" required>
            </div>
            <div class="form-group">
              <label>Daerah pengiriman</label>
              <input type="text" name="shipment_district" class="form-control" placeholder="sukabumi" value="<?php echo $val->shipment_districts ?>" required>
            </div>
            <div class="form-group">
              <label>Kecamatan Pengiriman</label>
              <input type="text" name="shipment_subdistricts" class="form-control" placeholder="sukaraja" value="<?php echo $val->shipment_subdistricts ?>" required>
            </div>
            <div class="form-group">
              <label>Kabupaten/Kota Madya Pengiriman</label>
              <input type="text" name="shipment_city" class="form-control" placeholder="sukabumi" value="<?php echo $val->shipment_city ?>" required>
            </div>
            <div class="form-group">
              <label>Propinsi Pengiriman</label>
              <input type="text" name="shipment_province" class="form-control" placeholder="Jawabarat" value="<?php echo $val->shipment_province ?>" required>
            </div>
          </div>
        </div>
        <div align="center">
          <button type="submit" name="register" class="btn btn-success">Save</button>
        </div>
        <?php echo form_close();?> 
        <?php } ?>
      </div>
    </div>
  </div>
</div>