<!DOCTYPE html> 
<html> 
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Pain Scale Assessment Results</title> 
	<link rel="stylesheet"  href="../jquery.mobile/jquery.mobile.css" />  
	<script src="../../../../jquery.mobile/jquery.js"></script>
	<script src="../../../../jquery.mobile/jquery.mobile.js"></script>
</head> 
<body>
	<div data-role="page" class="type-interior">
		<div data-role="header" data-theme="b">
		<h1>Numeric Rating Pain Scale Results</h1>
        <a href="#" data-rel="back" data-icon="arrow-l" data-direction="reverse" class="ui-btn-left">Back</a>
	</div><!-- /header -->
	<div data-role="content" data-theme="c">
		<form action="index.html" method="get">
			<h2>Results:</h2>
			<script>
				jQuery(document).ready(function(){
						var sliderObject = jQuery("#current_pain");
						console.log(sliderObject);
						var current_pain_val = jQuery("#current_pain").val();
					    var current_pain_val1 = parseFloat(current_pain_val);
					    console.log(current_pain_val);
						var worst_pain_val = jQuery('#worst_pain').val();
						var best_pain_val = jQuery('#best_pain').val();
						var avg_pain_val = jQuery('#usual_pain').val();
						var acceptable_pain_val = jQuery('#acceptable_pain ').val();
						 //alert('A:'current_pain_val +' B:'+worst_pain_val);
						 //alert (o);return false;
					 	var current_pain = "<li>Current pain (right now): " + current_pain_val + "</li>";
					 	var worst_pain = "<li>When pain is the worst: " + worst_pain_val + "</li>";
						var best_pain = "<li>When pain is the best: " + best_pain_val + "</li>";
						var avg_pain = "<li>Usual or average pain in last week: " + avg_pain_val + "</li>";
						var acceptable_pain = "<li>Acceptable (or tolerable) amount of pain: " + acceptable_pain_val + "</li>";
						jQuery('#results').append(		  
												'<ul data-role="listview">' + current_pain + worst_pain + best_pain + avg_pain + acceptable_pain + '</ul>'
												  );
						return false;
				});
			</script>
	<output name="results" id="results"></output>
	</form>
    	<br /><br /><a href="#" data-rel="back" data-icon="arrow-l" data-role="button" data-transition="pop" data-direction="reverse">Close</a>	   
	</div><!--/content-primary -->		
</div><!-- /page -->

</body>
</html>
