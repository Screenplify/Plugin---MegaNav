<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<script src="assets/jquery-2.2.4.min.js"></script>

	<style>
		body {
			padding: 0;
			margin: 0;
			height: 100%;
		}
	</style>

	<script>

		function inIframe () {
		    try {
		        return window.self !== window.top;
		    } catch (e) {
		        return true;
		    }
		}

		var parentBody = window.parent.document.body;

		$(document).ready(function(){
			
			if(inIframe()){
				$(parentBody).append('<link rel="stylesheet" href="assets/nav-styles.css">'); 

				$(parentBody).append($('.nav-menu'));
				
				$(parentBody).append('\<script src="assets/nav-scripts.js"><\/script>'); 

			} else {
				$('body').append('<link rel="stylesheet" href="assets/nav-styles.css">');
				$('body').append('\<script src="assets/nav-scripts.js"><\/script>');
			}
		});
	</script>

</head>
<body>

<nav class="nav-menu">
	<ul class="cd-primary-nav">
		<li class="cd-label">About us</li>
		<li><a href="#0">The team</a></li>
		<li><a href="#0">Our services</a></li>
		<li><a href="#0">Our projects</a></li>
		<li class="cd-label">Work with us</li>
		<li><a href="#0">Start a project</a></li>
		<li><a href="#0">Join In</a></li>
		<li><a href="#0">Create an account</a></li>
		<li class="cd-label">Follow us</li>
		<li class="cd-social cd-facebook"><a href="#0">Facebook</a></li>
		<li class="cd-social cd-instagram"><a href="#0">Instagram</a></li>
		<li class="cd-social cd-dribbble"><a href="#0">Dribbble</a></li>
		<li class="cd-social cd-twitter"><a href="#0">Twitter</a></li>
	</ul>
	<div class="close">Close</div>
</nav>

	<h1>Menu</h1>
	
</body>
</html>