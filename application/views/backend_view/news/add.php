
<div class="col-md-12">
  <div class="alert alert-success alert-autocloseable-success">
    <span id="label_berhasil">Data Berhasil Di Proses</span>
  </div>
  <div class="alert alert-danger alert-autocloseable-danger">
    <span id="label_gagal">Data Gagal Di proses</span>
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
              <input type="text" name="title" class="form-control required" required>
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea name="description" class=" ckeditor form-control" required></textarea> 
            </div>
            <div class="form-group">
              <label>Link</label>
              <input type="number" name="link" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Category</label>
              <select class="form-control" id="category" name="category">
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
    load_category();
    console.log($('form').serialize());
  });

  function load_category()
  {
    $.ajax({
      type:"GET",
      dataType: 'json',
      "url": base_url+'backend/news/list_data_category',
      datatype:'application/json',
      success:function(success){

        $('select#category').html('');
        for(var i=0;i<success.length;i++)
        {
          $("<option />").val(success[i].id)
          .text(success[i].category)
          .appendTo($('select#category'));
        }

      }
    });
  }

  function save_news()
  {
    console.log(form.serialize());
    $.ajax({
      type:"POST",
      "url": base_url+'backend/news/insert_data',
      "data": form.serialize(),
      success:function(success){


      }
    });
  }

</script>