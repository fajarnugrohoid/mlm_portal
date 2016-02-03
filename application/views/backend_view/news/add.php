<div class="container" style="height: 600px;">
	<div class="row">
    <div class="col-md-3">
     <button id="autoclosable-btn-success" class="btn btn-primary btn-success btn-block">
       Autocloseable message success
     </button>
     <button id="autoclosable-btn-danger" class="btn btn-primary btn-danger btn-block">
       Autocloseable message danger	
     </button>

   </div>
   <div class="col-md-9">
     <div class="alert alert-success alert-autocloseable-success">
       I'm an autocloseable success  message. I will hide in 5 seconds.
     </div>
     <div class="alert alert-danger alert-autocloseable-danger">
      I'm an autocloseable danger message. I will hide in 5 seconds.
    </div>

  </div>
</div>
</div>
<div class="col-sm-12">
  <div class="grid">
    <div class="panel panel-default">
      <div class="panel-heading black-chrome">Add Data</div>
      <div class="panel-body "  style=" overflow: scroll;">
        <div align="center" class="col-md-12" style="margin-left:25px;">
          <?php if(isset($_SESSION)) {
            echo $this->session->flashdata('flash_data');
          } ?>
        </div>
        <div class="col-md-12">
          <?php echo form_open_multipart('backend_controller/shirt_controller/insert_data'); ?>
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title_product" class="form-control required" title="Nama harus diisi" required>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="number" name="price_product" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Date</label>
            <input type="date"  name="date_publish" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Barcode</label>
            <input type="text" name="barcode_shirt" class="form-control" requrired>
          </div>
          <div class="form-group">
            <label>Brand</label>
            <input type="text" name="brand_shirt" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Size</label>
            <select class="form-control" name="size_shirt">
              <option value="XXS">XXS</option>
              <option value="XS">XS</option>
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
              <option value="XL">XL</option>
              <option value="XXL">XXL</option>
            </select>
          </div>
          <div class="form-group">
            <label>Descirbe</label>
            <textarea name="describe_shirt" class="ckeditor" class="form-control" required></textarea> 
          </div>
          <div class="form-group">
            <label>Image</label>
            <input type="file" name="userfile" class="form-control" id="input-foto" accept="image/x-png, image/gif, image/jpeg , image/jpg" >
            <br>
            <img class="show_foto" src="#" id="div_image">
          </div>
          <input type="submit" name="save" value="save" class="btn btn-success">        
          <?php echo form_close();?> 
        </div>
      </div>
    </div>
  </div>
</div>