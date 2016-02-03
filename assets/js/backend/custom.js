// panel info
$(document).ready(function () {
	alert("was included");
     	$('.alert-autocloseable-success').hide();;
		$('.alert-autocloseable-danger').hide();

		$('#autoclosable-btn-success').click(function() {
			$('#autoclosable-btn-success').prop("disabled", true);
			$('.alert-autocloseable-success').show();

			$('.alert-autocloseable-success').delay(5000).fadeOut( "slow", function() {
				// Animation complete.
				$('#autoclosable-btn-success').prop("disabled", false);
			});
		});

		$('#autoclosable-btn-danger').click(function() {
			$('#autoclosable-btn-danger').prop("disabled", true);
			$('.alert-autocloseable-danger').show();

			$('.alert-autocloseable-danger').delay(5000).fadeOut( "slow", function() {
				// Animation complete.
				$('#autoclosable-btn-danger').prop("disabled", false);
			});
		});

		$(document).on('click', '.close', function () {
			$(this).parent().hide();
    	});
});