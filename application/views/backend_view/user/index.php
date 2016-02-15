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
      <li class="active">User</a></li>
      <li class="active">List</li>
   </ol>
   <div class="grid">
      <div class="panel panel-default">
         <div class="panel-heading black-chrome">List Data</div>
         <div class="panel-body "  style=" overflow: scroll;">
            <div class="col-md-12">
               <table id="list-user" class="table table-striped table-responsive table-bordered" cellspacing="0" width="100%">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th width="25%">Aksi</th>
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
   var table_user;
   $(document).ready(function()
   {
      load_data_user();

   });

   function load_data_user()
   {
      $('#list-user').dataTable().fnDestroy();
      table_user = $('#list-user').DataTable( 
      {

         "columnDefs": 
         [ 
         {
            "targets": 4,
            "render": function ( data, type, full, meta ) 
            {
               if (full.is_active == 1) 
               {
                  return '<a class="btn btn-danger" oncLick="delete_user('+full.id+')">Delete</a><a href="'+base_url+'backend/user/edit_user/'+full.id+'" class="btn form-control btn-success">Edit</a><a oncLick="change_status('+full.id+','+0+')" class="btn form-control btn-danger"> Set In Active</a>';
               }
               else
               {
                  return '<a class="btn btn-danger" oncLick="delete_user('+full.id+')">Delete</a><a href="'+base_url+'backend/user/edit_user/'+full.id+'" class="btn form-control btn-success">Edit</a><a oncLick="change_status('+full.id+','+1+')" class="btn form-control btn-success">Set Active</a>';                     
               }              
            }
         },
         {
            "targets": 3,
            "render": function ( data, type, full, meta ) 
            {
               if (full.is_active == 1) 
               {
                  return 'Active';
               }
               else
               {
                  return 'In Active';                     
               }              
            }
         }
         ],
         "order": [[ 1, 'asc' ]],
         "ajax": 
         {
            "url": base_url+'backend/user/list_data',
            "type": "GET",
            "dataSrc" : function(param_data)
            {
               console.log(param_data);
               return param_data.data;
            }
         },
         "order": [[ 1, 'asc' ]],
         "columns": 
         [
         { "data": "id" },
         { "data": "name" },
         { "data": "level" },
         { "data": "is_active" },
         { "data": "email" },
         ]

      });
table_user.on( 'order.dt search.dt', function () {
   table_user.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
      cell.innerHTML = i+1;
   });
}).draw();
}

function change_status(param,param2)
{
   $.ajax({
      type:"post",
      dataType: 'json',
      data : {id : param , is_active : param2},
      "url": base_url+'backend/user/change_status',
      datatype:'application/json',
      success:function(success){
         $(window).scrollTop(0);
         console.log(success);
         show_alert(success);
         table_user.ajax.reload();
      }
   });
}
function delete_user(param)
{
   $.ajax({
      type:"GET",
      dataType : "json",
      "url": base_url+'backend/user/delete_user_data/'+param,
      success:function(success){
         $(window).scrollTop(0);
         console.log(success);
         show_alert(success);
         table_user.ajax.reload();
      }
   });
}

</script>