
<div class="col-md-12">
  <div class="alert alert-success alert-autocloseable-success">
    <span id="label_berhasil">Data Berhasil Di Proses</span>
  </div>
  <div class="alert alert-danger alert-autocloseable-danger">
    <span id="label_gagal">Data Gagal Di proses</span>
  </div>
</div>

</div>
<div class="col-sm-12" id="news_add">
  <div class="grid">
    <div class="panel panel-default">
      <div class="panel-heading black-chrome">Add Data</div>
      <div class="panel-body">
        <div class="col-md-12">
          <form name="form_news" id="form_news" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" id="title" class="form-control validate[required]">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea name="description" id="description" class="validate[required] form-control ckeditor"></textarea> 
            </div>
            <div class="form-group">
              <label>Category</label>
              <select class="form-control" id="category" name="category">
              </select>
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="userfile" class="form-control" id="input-foto" accept="image/x-png, image/gif, image/jpeg , image/jpg" >
              <br>
              <img class="show_foto" src="#" id="div_image">
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

  $("#news_add form").validationEngine({
    custom_error_messages: {
      '#title': {
        'required': {
          'message': "You Must Set The Title"
        }
      },
      '#description': {
        'required': {
          'message': "You Must Set The Description Of This Article"
        }
      }
    },
    onValidationComplete: function (form, status) {
      var valueDescription = CKEDITOR.instances['description'].getData();
      var valTitle= $('#title').val();
      var valCategory= $('#category').val();
      var valUserfile= $('#userfile').val();
      $.ajax({
        type:"POST",
        "url": base_url+'backend/news/insert_data',
        "data": 'title=' + valTitle + '&description=' + valueDescription+ '&category=' + valCategory+ '&userfile=' + valUserfile,
        mimeType: "multipart/form-data",
        success:function(success){
          console.log(success);
          show_alert(success);
          if (success.isSuccess) {
            $("#title").val("");
            CKEDITOR.instances.description.setData('');
          };
        }
      });
    }
  });

</script>