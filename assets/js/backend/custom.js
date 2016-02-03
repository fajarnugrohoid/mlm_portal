// panel info
$(document).ready(function () {
	$('.alert-autocloseable-success').hide();;
	$('.alert-autocloseable-danger').hide();


	$(document).on('click', '.close', function () {
		$(this).parent().hide();
	});
});

function show_alert(param)
{
	if (param == 1) 
	{
		$('#autoclosable-btn-success').prop("disabled", true);
		$('.alert-autocloseable-success').show();

		$('.alert-autocloseable-success').delay(3000).fadeOut( "slow", function() {
			$('#autoclosable-btn-success').prop("disabled", false);
		});
	}
	else
	{
		$('#autoclosable-btn-danger').prop("disabled", true);
		$('.alert-autocloseable-danger').show();

		$('.alert-autocloseable-danger').delay(3000).fadeOut( "slow", function() {
			$('#autoclosable-btn-danger').prop("disabled", false);
		});
	}

}