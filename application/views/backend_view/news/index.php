<div class="col-sm-12">
   <ol class="breadcrumb">
      <li><a href="<?php echo base_url('backend/dashboard/index/')?>">Dashboard</a></li>
      <li class="active">News</a></li>
      <li class="active">List</li>
      <li style="float:right;"><a href="<?php echo base_url('backend/news/add/')?>">New Data</a></li>
   </ol>
   <div class="grid">
      <div class="panel panel-default">
         <div class="panel-heading black-chrome">List Data</div>
         <div class="panel-body "  style=" overflow: scroll;">
            <div class="col-md-12 div-list-shirt">
               <table id="list-news" class="table table-striped table-responsive table-bordered" cellspacing="0" width="100%">
                  <thead>
                     <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Link</th>
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
   var base_url= "<?php echo base_url('backend/news/list_data')?>";
   var table_news;
   $(document).ready(function()
   {
      $('#list-news').dataTable().fnDestroy();
      table_news = $('#list-news').dataTable( 
      {
         "ajax": 
         {
            "url": base_url,
            "type": "GET",
            "dataSrc" : function(param_data)
            {
               console.log(param_data);
               return param_data.data;
            }
         },
         "columns": 
         [
            { "data": "title" },
            { "data": "description" },
            { "data": "link" }
         ]
      } );
   });
</script>