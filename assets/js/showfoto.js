
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
   $("#input-foto").change(function(){
      readURL(this);
   });
});
$(document).ready(function(){
   function readURL(input) {
      if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function (e) {
            $('#div_image_edit2').attr('src', e.target.result);
         }
         reader.readAsDataURL(input.files[0]);
      }
   }
   $("#input-foto2").change(function(){
      readURL(this);
   });
});
$(document).ready(function(){
   function readURL(input) {
      if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function (e) {
            $('#div_image_edit3').attr('src', e.target.result);
         }
         reader.readAsDataURL(input.files[0]);
      }
   }
   $("#input-foto3").change(function(){
      readURL(this);
   });
});

// show image at edit upload
$(document).ready(function(){
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
   $("#input-foto").change(function(){
      readURL(this);
      $('#div_image').show();
   });
});
$(document).ready(function(){
   $('#div_image2').hide();
   function readURL(input) {
      $('#div_imag2e').show();
      if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function (e) {
            $('#div_image2').attr('src', e.target.result);
         }
         reader.readAsDataURL(input.files[0]);
      }
   }
   $("#input-foto2").change(function(){
      readURL(this);
      $('#div_image2').show();
   });
});
$(document).ready(function(){
   $('#div_image3').hide();
   function readURL(input) {
      $('#div_image3').show();
      if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function (e) {
            $('#div_image3').attr('src', e.target.result);
         }
         reader.readAsDataURL(input.files[0]);
      }
   }
   $("#input-foto3").change(function(){
      readURL(this);
      $('#div_image3').show();
   });
});