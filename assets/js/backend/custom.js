// panel info
$(document).ready(function () {
	$('.alert-autocloseable-success').hide();
	$('.alert-autocloseable-danger').hide();
});

function show_alert(param)
{
	console.log("from js=",param);
	if (param.isSuccess == 1) 
	{
		$('#autoclosable-btn-success').prop("disabled", true);
		$('#label_berhasil').html(param.message);
		$('.alert-autocloseable-success').show();

		$('.alert-autocloseable-success').delay(3000).fadeOut( "slow", function() {
			$('#autoclosable-btn-success').prop("disabled", false);
		});
	}
	else
	{
		$('#autoclosable-btn-danger').prop("disabled", true);
		$('#label_gagal').html(param.message);
		$('.alert-autocloseable-danger').show();

		$('.alert-autocloseable-danger').delay(3000).fadeOut( "slow", function() {
			$('#autoclosable-btn-danger').prop("disabled", false);
		});
	}

}