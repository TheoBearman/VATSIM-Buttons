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

    <!-- END MAIN STYLE SECTION-->
    <style>
h1 {text-align:left;}
</style>
</head>
    <body bgcolor="#65b4d1">
    <!-- HOMEPAGE SECTION-->  

    <section id="Homepage">
        <div class="container">
            <div class="row">

<script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {

    var metarButtons = $('.getMetarButtons');
    var userButtons = $('.getUserButtons');

    metarButtons.click(function(){
        var clickedButton = $(this);
        $.ajax({
            type: "POST",
            url: "metarData.php",
            data: { location: clickedButton.attr('data-location') },
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

    userButtons.click(function(){
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
<li><button style="height: 40px;" class="btn btn-primary getMetarButtons hvr-float-shadow" data-location = "LLBG">METAR At Tel Aviv Ben Gurion</button></li>
<li><button style="height: 40px;" class="btn btn-primary getMetarButtons hvr-float-shadow" data-location = "EGLL">METAR At London Heathrow</button></li>
<li><button style="height: 40px;" class="btn btn-primary getMetarButtons hvr-float-shadow" data-location = "EGGW">METAR At London Luton</button></li>
<li><button style="height: 40px;" class="btn btn-primary getMetarButtons hvr-float-shadow" data-location = "KJFK">METAR At New York John F. Kennedy</button></li>
<li><button style="height: 40px;" class="btn btn-primary getMetarButtons hvr-float-shadow" data-location = "FIMP">METAR At Plaisance Sir Seewoosagur Ramgoolam</button></li>
<li><button style="height: 40px;" class="btn btn-primary getMetarButtons hvr-float-shadow" data-location = "LIPZ">METAR At Venice Marco Polo Airport</button></li>
<li><button style="height: 40px;" class="btn btn-primary getUserButtons hvr-float-shadow">Total Users Online on VATSIM</button></li>
  
  </ul>
                </nav>             
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
    <script src="/Buttons/scripts/master.min.js"></script><style type="text/css"></style>
    

</body>
</html>
