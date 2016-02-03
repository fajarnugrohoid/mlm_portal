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
                        <th>Link</th>
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
      table_news = $('#list-news').dataTable( 
      {
         
         "columnDefs": 
         [ 
            {
               "targets": 4,
               "render": function ( data, type, full, meta ) 
               {
                  return '<a class="btn btn-danger" oncLick="delete_news('+full.id+')">Delete</a><a href="'+base_url+'backend/news/insert" class="btn btn-success">Edit</a>';
                  return ;
               }
            },
            {
               "targets": 0,
               "render": function ( data, type, full, meta ) 
               {
                  var number = 0;
                  for (var i = 0; i <  0; i++) {
                     i++;
                  };
                  console.log(i);
                  return number+i;
               }
            } 
         ],
         "ajax": 
         {
            "url": base_url+'backend/news/list_data',
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
            { "data": "title" },
            { "data": "description" },
            { "data": "link" }
         ]

      });
   }

   function delete_news(data)
   {
      alert(data);
   }
</script>