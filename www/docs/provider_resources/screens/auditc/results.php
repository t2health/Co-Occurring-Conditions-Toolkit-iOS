<!DOCTYPE html> 
<html> 
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>AUDIT-C Assessment Results</title> 
	<link rel="stylesheet"  href="../../../../jquery.mobile/jquery.mobile.css" />  
	<script src="../../../../jquery.mobile/jquery.js"></script>
	<script src="../../../../jquery.mobile/jquery.mobile.js"></script>
</head> 
<body> 

	<div data-role="page" class="type-interior">
		<div data-role="header" data-theme="b">
			<h1>AUDIT-C Results</h1>
			<a href="#" data-rel="back" data-icon="arrow-l"  data-direction="reverse" class="ui-btn-left">Back</a>
		</div><!-- /header -->
	<div data-role="content" data-theme="c">
		<form action="index.html" method="get">
			<h2>Results:</h2>
			<script>
				jQuery(document).ready(
					function auditc(){
						var gender = jQuery('#gender :radio:checked').val();
						var abuser = jQuery('#abuser :radio:checked').val();
						var auditcA = jQuery('#auditcA :radio:checked').val();
						var auditcB = jQuery('#auditcB :radio:checked').val();
						var auditcC = jQuery('#auditcC :radio:checked').val();
					 
						 var nsf = "No suggestions found";
						 var o = parseFloat(auditcA) + parseFloat(auditcB) + parseFloat(auditcC);
						 // var dataString = 'A'+ phq2_numA + 'B' + phq2_numB;
						 // alert (o);return false;
						 //console.log('abuser:' + abuser);
						 var sens = "Sens:";
						 var spec = "<br /><br />Spec.";
						 var men4 = "<br /><br />In men, a score of 4 or more is considered positive, optimal for identifying hazardous drinking or active alcohol use disorders.";
						 var women3 = "<br /><br />In women, a score of 3 or more is considered positive, optimal for identifying hazardous drinking or active alcohol use disorders."
						 var question1is4 = "However, when the points are all from Question #1 alone (#2 & #3 are zero), it can be assumed that the patient is drinking below recommended limits and it is suggested that the provider review the patient’s alcohol intake over the past few months to confirm accuracy.";
						if(gender == 1 && abuser == 0) {
							if(o >=3) {
								jQuery('#results').empty().append(sens + " <b>0.95</b>" + spec + " <b>0.60</b>");
							} else if (o >=4) {
									jQuery('#results').empty().append(sens + " <b>0.86</b>" + spec + " <b>0.72</b>" + men4);
							} else { jQuery('#results').empty().append(nsf);
								}
						} else if(gender == 0 && abuser == 0) {
							if(o >=3) {
								jQuery('#results').empty().append(sens + " <b>0.66</b>" + spec + " <b>0.94</b>" + women3);
							} else if (o >=4) {
								jQuery('#results').empty().append(sens + " <b>0.48</b>" + spec + " <b>0.99</b>" + women3);
							} else { jQuery('#results').empty().append(nsf);
								}
						} else if(gender == 1 && abuser == 1) {
							if(o >=3) {
								jQuery('#results').empty().append(sens + " <b>0.90</b>" + spec + " <b>0.45</b>");
							} else if (o >=4) {
								jQuery('#results').empty().append(sens + " <b>0.79</b>" + spec + " <b>0.56</b>" + men4);
							} else { jQuery('#results').empty().append(nsf);
								}
						} else if(gender == 0 && abuser == 0) {
							if(o >=3) {
								jQuery('#results').empty().append(sens + " <b>0.80</b>" + spec + " <b>0.87</b>" + women3);
							} else if (o >=4) {
								jQuery('#results').empty().append(sens + " <b>0.67</b>" + spec + " <b>0.94</b>" + women3);
							} else { jQuery('#results').empty().append(nsf);
								}
						} else {
								jQuery('#results').empty().append(nsf);
						}
							 
						   return false;
				});
			</script>
	<output name="results" id="results"></output>
	</form>
    <fieldset class="ui-grid-a">
		<a href="#" data-rel="back" data-icon="arrow-l" data-role="button" data-transition="pop" data-direction="reverse">Close</a>	   
    </fieldset>
	</div><!--/content-primary -->		
</div><!-- /page -->

</body>
</html>
