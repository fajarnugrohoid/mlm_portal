<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="fb-root"></div>
	<div class="fb-login-button"></div>
	<script>
	/*(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1092494590777579";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk')); */
</script>

<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1558553821135600',
			xfbml      : true,
			version    : 'v2.5'
		});
	};

	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>