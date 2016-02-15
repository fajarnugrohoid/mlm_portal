<div class="col-md-12">
   <div class="alert alert-success alert-autocloseable-success">
      <span id="label_berhasil">Data Berhasil Di Proses</span>
   </div>
   <div class="alert alert-danger alert-autocloseable-danger">
      <span id="label_gagal">Data Gagal Di proses</span>
   </div>
</div>

<div class="col-sm-12">
   <ol class="breadcrumb">
      <li><a href="<?php echo base_url('backend/dashboard/index/')?>">Dashboard</a></li>
      <li class="active">News</a></li>
      <li class="active">List</li>
      <li style="float:right;"><a href="<?php echo base_url('backend/news/insert/')?>">New Data</a></li>
   </ol>
   <div class="grid">
      <div class="panel panel-default">
         <div class="panel-heading black-chrome">List Data</div>
         <div class="panel-body "  style=" overflow: scroll;">
            <div class="col-md-12 div-list-shirt">
               <table id="list-news" class="table table-striped table-responsive table-bordered" cellspacing="0" width="100%">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>category</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>   
<script type="text/javascript">
   var base_url= "<?php echo base_url()?>";
   var table_news;
   $(document).ready(function()
   {
      load_data_news();

   });

   function load_data_news()
   {
      $('#list-news').dataTable().fnDestroy();
      table_news = $('#list-news').DataTable( 
      {

         "columnDefs": 
         [ 
         {
            "targets": 5,
            "render": function ( data, type, full, meta ) 
            {
               // return '<a class="btn btn-danger" oncLick="delete_news('+full.id+')">Delete</a><a href="'+base_url+'backend/news/edit_news/'+full.id+'" class="btn btn-success">Edit</a>';
               if (full.status == 1) 
               {
                  return '<a class="btn btn-danger" oncLick="delete_news('+full.id+')">Delete</a><a href="'+base_url+'backend/news/edit_news/'+full.id+'" class="btn form-control btn-success">Edit</a><a oncLick="change_status('+full.id+','+0+')" class="btn form-control btn-danger"> Set In Active</a>';
               }
               else
               {
                  return '<a class="btn btn-danger" oncLick="delete_news('+full.id+')">Delete</a><a href="'+base_url+'backend/news/edit_news/'+full.id+'" class="btn form-control btn-success">Edit</a><a oncLick="change_status('+full.id+','+1+')" class="btn form-control btn-success">Set Active</a>';                     
               }              
            }
         },
         {
            "targets": 3,
            "render": function ( data, type, full, meta ) 
            {
               if (full.status == 1) 
               {
                  return 'Active';
               }
               else
               {
                  return 'In Active';                     
               }              
            }
         },
         {
            "targets": 2,
            "render": function ( data, type, full, meta ) 
            {
               var myDesc = full.description
               var desc = myDesc.substring(1, 50);
               return desc+'....';
            }
         }
         ],
         "order": [[ 1, 'asc' ]],
         "ajax": 
         {
            "url": base_url+'backend/news/list_data',
            "type": "GET",
            "dataSrc" : function(param_data)
            {
               // console.log(param_data);
               return param_data.data;
            }
         },
         "order": [[ 1, 'asc' ]],
         "columns": 
         [
         { "data": "id" },
         { "data": "title" },
         { "data": "description" },
         { "data": "category" },
         { "data": "id" }
         ]

      });
      table_news.on( 'order.dt search.dt', function () {
         table_news.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
         });
      }).draw();
   }

   function delete_news(param)
   {
      $.ajax({
         type:"GET",
         dataType : "json",
         "url": base_url+'backend/news/delete_news_data/'+param,
         success:function(success){
            $(window).scrollTop(0);
            console.log(success);
            show_alert(success);
            table_news.ajax.reload();
         }
      });
   }

   function change_status(param,param2)
{
   $.ajax({
      type:"post",
      dataType: 'json',
      data : {id : param , is_active : param2},
      "url": base_url+'backend/news/change_status',
      datatype:'application/json',
      success:function(success){
         $(window).scrollTop(0);
         console.log(success);
         show_alert(success);
         table_news.ajax.reload();
      }
   });
}
</script>