
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
          <!-- <form name="form_news" id="form_news" action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">
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
              <label>Related video link</label>
              <input type="text" name="link" id="link" class="form-control validate[required]">
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="userfile" class="form-control" id="input-foto" accept="image/x-png, image/gif, image/jpeg , image/jpg" >
              <br>
              <img class="show_foto" src="#" id="div_image">
            </div>
            <input type="submit" onclick="uploadImage()" name="save" value="save" class="btn btn-success">        
          </form> -->

          <form method="post" action="" id="upload_file">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="" />

            <label for="userfile">File</label>
            <input type="file" name="userfile" id="userfile" size="20" />

            <input type="submit" name="submit" id="submit" />
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

  function uploadImage(e)
  {
    e.preventDefault();
    $.ajax({
      type:"POST",
      "url": base_url+'backend/news/uploadImage',
      fileElementId :'userfile',
      success:function(success){
        return success;
      }
    });

  }

  $(function() {
  $('#upload_file').submit(function(e) {
    e.preventDefault();
    $.ajaxFileUpload({
      url       : base_url+'backend/news/uploadImage', 
      secureuri   :false,
      fileElementId :'userfile',
      dataType    : 'json',
      data      : {
        'title'       : $('#title').val()
      },
      success : function (data, status)
      {
        if(data.status != 'error')
        {
          $('#files').html('<p>Reloading files...</p>');
          refresh_files();
          $('#title').val('');
        }
        alert(data.msg);
      }
    });
    return false;
  });
});

  // $("#news_add form").validationEngine({
  //   custom_error_messages: {
  //     '#title': {
  //       'required': {
  //         'message': "You Must Set The Title"
  //       }
  //     },
  //     '#description': {
  //       'required': {
  //         'message': "You Must Set The Description Of This Article"
  //       }
  //     }
  //   },
  //   onValidationComplete: function (form, status) {
  //     uploadImage();
  //     var valueDescription = CKEDITOR.instances['description'].getData();
  //     var valTitle= $('#title').val();
  //     var valCategory= $('#category').val();
  //     var valLink= $('#link').val();
  //     var valUserfile= $('#input-foto').val();
  //     var data = {
  //       title : valTitle,
  //       description : valueDescription,
  //       category : valCategory,
  //       link : valLink,
  //       userfile : valUserfile
  //     }
  //     $.ajax({
  //       type:"POST",
  //       "url": base_url+'backend/news/insert_data',
  //       // contentType : false,
  //       // "data": 'title=' + valTitle + '&description=' + valueDescription+ '&category=' + valCategory+ '&userfile=' + valUserfile,
  //       "data": data,
  //       fileElementId :'userfile',
  //       dataType    : 'json',
  //       mimeType: "multipart/form-data",
  //       success:function(success){
  //         console.log(success);
  //         show_alert(success);
  //         if (success.isSuccess==1) {
  //           $("#title").val("");
  //           CKEDITOR.instances.description.setData('');
  //         };
  //       }
  //     });
  //   }
  // });

</script>