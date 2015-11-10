<!DOCTYPE html>

<html xmlns="https://www.w3.org/1999/xhtml">

<head runat="server">
	<meta charset="utf-8" />
	<title>VATSIM Buttons</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!-- MAIN STYLE SECTION-->
	<link href="/Buttons/plugins/isotope/isotope.css" rel="stylesheet" media="screen" />
	<link href="/Buttons/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" />
	<link href="/Buttons/plugins/IconHoverEffects-master/css/component.css" rel="stylesheet" />
	<link href="/Buttons/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
	<link href="/Buttons/css/about-achivements.css" rel="stylesheet" />
	<link href="/Buttons/css/style.css" rel="stylesheet" />
	<link href="/Buttons/css/hover.css" rel="stylesheet" />
	<link rel="shortcut icon" href="https://www.theobearman.com/cv/img/favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300' rel='stylesheet' type='text/css'>
	<!-- END MAIN STYLE SECTION-->
	<style>
		h1 {
			text-align: left;
		}
	</style>
	<style>
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: 'Raleway', sans-serif;		
		}
		p,
		button,
		span {
			font-family: 'Raleway', sans-serif;
		}
		a:focus {
  color: #000000;
  text-decoration: underline;
}
	</style>
</head>
	

<body>

	<!-- HOMEPAGE SECTION-->

	<section id="Homepage">
		<div class="container">
			<div class="row">
				<script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
				<a href="https://github.com/TheoBearman/VATSIM-Buttons" class="github-corner">
					<svg width="80px" height="80px" viewBox="0 0 250 250" style="position: absolute; top: 0px; right: 0px; border: 0px;">
						<path d="M0.592022922,0.00715558039 L112.431614,111.846747 C158.285357,157.70049 249.992844,249.407977 249.992844,249.407977 L249.993552,0.00715558039 L0.592022922,0.00715558039 Z" fill="#ffffff"></path>
						<path class="octo-arm" d="M128.31088,109.021433 C113.848425,99.7251004 118.962929,89.5972099 118.962929,89.5972099 C121.956112,82.7191823 120.469773,78.6080634 120.469773,78.6080634 C119.245772,72.0835892 123.357597,76.3043095 123.357597,76.3043095 C127.344265,80.8934326 125.502959,87.2503225 125.502959,87.2503225 C122.783427,97.5868094 130.851515,101.880362 134.379271,103.225986"
						fill="#151513" style="transform-origin: 130px 106px;"></path>
						<path class="octo-body" d="M114.879684,115.112005 C114.879684,115.112005 118.658285,116.503089 119.786121,115.375254 C120.804354,114.35702 124.128463,110.953715 127.678139,107.36727 C131.950856,102.998386 130.784544,104.164698 133.74653,101.571823 C136.889619,99.1952367 139.879974,98.4181264 142.167465,98.5729828 C133.762793,88.0088075 127.453987,74.3772029 143.81573,58.0154591 C148.477685,53.3535041 153.954935,51.2123848 159.676843,50.9535837 C160.308996,49.4347183 163.190456,43.6300788 171.390774,40.0669677 C171.390774,40.0669677 176.124146,42.5050719 178.759533,56.1897094 C183.111776,58.6497339 187.239158,61.8281789 190.884293,65.4407874 C194.496902,69.0859229 197.678175,73.2161336 200.144564,77.5747398 C213.819302,80.2002273 216.252456,84.9286503 216.252456,84.9286503 C212.695002,93.1346245 206.889655,96.0153775 205.37079,96.647531 C205.118353,102.375803 202.96592,107.841738 198.303965,112.503693 C181.90333,128.904328 168.302838,122.526225 157.737249,114.074885 C157.943724,116.931596 156.709823,120.89493 152.725983,124.878769 C147.01256,130.592192 142.364747,135.14101 140.958312,136.547445 C139.821991,137.683766 141.627028,141.859349 141.627028,141.859349"
						fill="#151513"></path>
					</svg>
				</a>
				<style>
					.github-corner:hover .octo-arm {
						animation: octocat-wave 560ms ease-in-out
					}
					
					@keyframes octocat-wave {
						0%,
						100% {
							transform: rotate(0)
						}
						20%,
						60% {
							transform: rotate(-25deg)
						}
						40%,
						80% {
							transform: rotate(10deg)
						}
					}
					
					@media (max-width:500px) {
						.github-corner:hover .octo-arm {
							animation: none
						}
						.github-corner .octo-arm {
							animation: octocat-wave 560ms ease-in-out
						}
					}
				</style>
				<script type="text/javascript">
					$(document).ready(function() {

						var metarButtons = $('.getMetarButtons');
						var userButtons = $('.getUserButtons');

						metarButtons.click(function() {
							var clickedButton = $(this);
							$.ajax({
								type: "POST",
								url: "metarData.php",
								data: {
									location: clickedButton.attr('data-location')
								},
								dataType: 'json',
								success: function(data) {

									$('.metarOutput').hide('slow', function() {
										$(this).remove();
									});

									$('#outputDiv').hide('slow', function() {
										$(this).remove();
									});

									metarButtons.show('slow');
									userButtons.show('slow');

									var outputElement = $('<div id="outputDiv"' + data['location'] + ' style="color: white;" class="metarOutput">' + data['metar'] + '</div>');
									outputElement.hide();
									outputElement.insertAfter(clickedButton);

									clickedButton.hide('slow', function() {
										outputElement.show('slow');
									});
								},
								error: function(jqXHR) {
									alert(jqXHR.responseText);
								}
							});
						});
					});
				</script>
				<script type="text/javascript">
					$(document).ready(function() {

						var metarButtons = $('.getMetarButtons');
						var userButtons = $('.getUserButtons');

						userButtons.click(function() {
							var clickedButton = $(this);
							$.ajax({
								type: "POST",
								url: "online.php",
								dataType: 'html',
								success: function(data) {

									$('.metarOutput').hide('slow', function() {
										$(this).remove();
									});

									$('#outputDiv').hide('slow', function() {
										$(this).remove();
									});

									metarButtons.show('slow');
									userButtons.show('slow');

									var outputElement = $('<div id="outputDiv" style="color: white;">' + data + '</div>');
									outputElement.hide();
									outputElement.insertAfter(clickedButton);

									clickedButton.hide('slow', function() {
										outputElement.show('slow');
									});
								},
								error: function(jqXHR) {
									alert(jqXHR.responseText);
								}
							});
						});
					});
				</script>

				<div class="row">
					<nav id="filter" class="col-md-12 text-center">
						<ul>
							<li>
								<li>
									<button style="height: 40px;" class="btn btn-primary getMetarButtons hvr-float-shadow" data-location="LLBG">METAR At Tel Aviv Ben Gurion</button>
								</li>
								<li>
									<button style="height: 40px;" class="btn btn-primary getMetarButtons hvr-float-shadow" data-location="EGLL">METAR At London Heathrow</button>
								</li>
								<li>
									<button style="height: 40px;" class="btn btn-primary getMetarButtons hvr-float-shadow" data-location="EGGW">METAR At London Luton</button>
								</li>
								<li>
									<button style="height: 40px;" class="btn btn-primary getMetarButtons hvr-float-shadow" data-location="KJFK">METAR At New York John F. Kennedy</button>
								</li>
								<li>
									<button style="height: 40px;" class="btn btn-primary getMetarButtons hvr-float-shadow" data-location="FIMP">METAR At Plaisance Sir Seewoosagur Ramgoolam</button>
								</li>
								<li>
									<button style="height: 40px;" class="btn btn-primary getMetarButtons hvr-float-shadow" data-location="LIPZ">METAR At Venice Marco Polo Airport</button>
								</li>
								<li>
									<button style="height: 40px;" class="btn btn-primary getUserButtons hvr-float-shadow">Total Users Online on VATSIM</button>
								</li>

						</ul>
					</nav>
			
				<center><p style="color:white">Made With Love By <a href="https://theobearman.com/" target="_blank">Theo Bearman</a>.</p></center>
				</div>
				<div>
					<div>
						<div>
	</section>

	<!-- MAIN SCRIPTS SECTION-->
	<script src="/Buttons/scripts/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="/Buttons/scripts/jquery.js"></script>
	<script src="/Buttons/scripts/scrollReveal.js"></script>
	<script>
		window.scrollReveal = new scrollReveal(); //please put this script here to show animation at the time of scroll
	</script>
	<script src="/Buttons/scripts/jquery.easing.1.3.js"></script>
	<script src="/Buttons/plugins/bootstrap/bootstrap.min.js"></script>
	<script src="/Buttons/plugins/isotope/jquery.isotope.min.js"></script>
	<script src="/Buttons/plugins/fancybox/jquery.fancybox.pack.js"></script>
	<script src="/Buttons/scripts/jquery.localscroll-1.2.7-min.js"></script>
	<script src="/Buttons/scripts/jquery.appear.js"></script>
	<script src="/Buttons/scripts/scripts/main.js"></script>
	<script src="/Buttons/scripts/master.min.js"></script>
	<style type="text/css"></style>


</body>

</html>
