
<div class="col-md-12">
  <div class="alert alert-success alert-autocloseable-success">
    <span id="label_berhasil">Data Berhasil Di Proses</span>
  </div>
  <div class="alert alert-danger alert-autocloseable-danger">
    <span id="label_gagal">Data Gagal Di proses</span>
  </div>
</div>
<div class="col-sm-12" id="news_add">
  <div class="grid">
    <div class="panel panel-default">
      <div class="panel-heading black-chrome">Add Data</div>
      <div class="panel-body">
        <div class="col-md-12">
          <form method="post" action="" id="news-form">
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea name="description" id="description" class="form-control ckeditor"></textarea> 
            </div>
            <div class="form-group">
              <label>Category</label>
              <select class="form-control" id="category" name="category">
              </select>
            </div>
            <div class="form-group">
              <label>Related video link</label>
              <input type="text" name="link" id="link" class="form-control">
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="userfile" class="form-control" id="userfile">
              <br>
              <img class="show_foto" src="#" id="div_image">
            </div>
            <input type="submit" name="submit" value="submit" class="btn btn-success">        
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


    $(function() {
    $('#news-form').submit(function() {

      var valueDescription = CKEDITOR.instances['description'].getData();
      var valTitle= $('#title').val();
      var valCategory= $('#category').val();
      var valLink= $('#link').val();

      $.ajaxFileUpload({
        url       : base_url+'backend/news/insert_data', 
        secureuri   :false,
        data      : {
          title : valTitle,
          description : valueDescription,
          category : valCategory,
          link : valLink,
        },
        fileElementId :'userfile',
        dataType    : 'json',
        success : function (data)
        {
          alert("coba hit 2 kali karak muncul");
          show_alert(success);
          if (success.isSuccess==1) {
            $("#title").val("");
            $('.show_foto').hide();
            $('#userfile').val("");
            CKEDITOR.instances.description.setData('');
          };
          console.log(data);
        }
      });
      return false;
    });
  });
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


  

</script>