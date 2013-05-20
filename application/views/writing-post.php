<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title><?php echo $meta_title; ?></title>
		<meta name="description" content="<?php echo $meta_description; ?>" />
		<link rel="stylesheet" href="/assets/css/reset.css" />
		<link rel="stylesheet" href="/assets/css/design.css" />
		<link rel="stylesheet" href="/assets/css/print.css" media="print" />
		<link rel="author" href="https://plus.google.com/102110732747129499789" />
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-27602018-2', 'joelvardy.com');
			ga('send', 'pageview');
		</script>
	</head>
	<body id="writing-post">

		<header>
			<a href="/" title="About Joel Vardy"><img alt="My beautiful face" src="/assets/img/joel-vardy-square.jpg" /></a>
			<hgroup>
				<h1><a href="/" title="About Joel Vardy">Joel Vardy</a></h1>
				<h4>Contract Web Developer</h4>
			</hgroup>
			<nav>
				<a href="/" title="About Joel Vardy">About</a>
				<a href="/projects" title="Projects I've been involved in">Projects</a>
				<a class="active" href="/writing" title="TODO">Writing</a>
			</nav>
		</header>

		<?php echo $post; ?>

		<script src="//cdnjs.cloudflare.com/ajax/libs/zepto/1.0/zepto.min.js"></script>
		<script src="/assets/js/main.js"></script>
	</body>
</html>