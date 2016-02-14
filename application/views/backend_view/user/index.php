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
      <!-- <li style="float:right;"><a href="<?php echo base_url('backend/news/insert/')?>">New Data</a></li> -->
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
               return '<a href="'+base_url+'backend/user/edit_user/'+full.id+'" class="btn form-control btn-success">Edit</a> &nbsp;<select id="change_status_select_box" onchange="change_status()" class="form-control btn"><option value="1">Approve</option><option value="0">Disapprove</option></select>';
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
         { "data": "status" },
         { "data": "email" },
         ]

      });
      table_user.on( 'order.dt search.dt', function () {
         table_user.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
         });
      }).draw();
   }

function change_status()
{
   $.ajax({
      type:"post",
      dataType: 'json',
      "url": base_url+'backend/user/change_status',
      datatype:'application/json',
      success:function(success){
         alert(success.message);
      }
    });
}
   
</script>