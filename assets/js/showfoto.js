
// show image at upload
$(document).ready(function(){
   function readURL(input) {
      if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function (e) {
            $('#div_image_edit').attr('src', e.target.result);
         }
         reader.readAsDataURL(input.files[0]);
      }
   }
   $("#userfile").change(function(){
      readURL(this);
   });


    $('#div_image').hide();
   function readURL(input) {
      $('#div_image').show();
      if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function (e) {
            $('#div_image').attr('src', e.target.result);
         }
         reader.readAsDataURL(input.files[0]);
      }
   }
   $("#userfile").change(function(){
      readURL(this);
      $('#div_image').show();
   });
});
