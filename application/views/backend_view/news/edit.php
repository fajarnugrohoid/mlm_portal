
<div class="col-md-12">
  <div class="alert alert-success alert-autocloseable-success">
    Data Berhasil Di Proses
  </div>
  <div class="alert alert-danger alert-autocloseable-danger">
    Data Gagal Di proses
  </div>
</div>

</div>
<div class="col-sm-12">
  <div class="grid">
    <div class="panel panel-default">
      <div class="panel-heading black-chrome">Add Data</div>
      <div class="panel-body "  style=" overflow: scroll;">
        <div class="col-md-12">
          <form>
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title_product" class="form-control required" title="Nama harus diisi" required>
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea name="describe_shirt" class=" ckeditor form-control" required></textarea> 
            </div>
            <div class="form-group">
              <label>Link</label>
              <input type="number" name="price_product" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Category</label>
              <select class="form-control" id="category_selectbox" name="size_shirt">
              </select>
            </div>
            <input type="submit" name="save" value="save" class="btn btn-success">        
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  var base_url= "<?php echo base_url()?>"
  $(document).ready(function()
  {
    show_alert("1");
    load_category();
  });

  function load_category()
  {
    $.ajax({
      type:"GET",
      dataType: 'json',
      "url": base_url+'backend/news/list_data_category',
      datatype:'application/json',
      success:function(success){

        $('select#category_selectbox').html('');
        for(var i=0;i<success.length;i++)
        {
          $("<option />").val(success[i].id)
          .text(success[i].category)
          .appendTo($('select#category_selectbox'));
        }

      }
    });
  }

</script>