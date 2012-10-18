<!DOCTYPE html> 
<html> 
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>PHQ - 2 Assessment Results</title> 
	<link rel="stylesheet"  href="../jquery.mobile/jquery.mobile.css" />  
	<script src="../../../../jquery.mobile/jquery.js"></script>
	<script src="../../../../jquery.mobile/jquery.mobile.js"></script>
</head> 
<body> 

	<div data-role="page" class="type-interior">
		<div data-role="header" data-theme="b">
		<h1>PHQ - 2 Results</h1>
        <a href="#" data-rel="back" data-icon="arrow-l" data-direction="reverse" class="ui-btn-left">Back</a>
	</div><!-- /header -->
	<div data-role="content" data-theme="c">
		<form action="index.html" method="get">
			<h2>Results:</h2>
			<script>
				jQuery(document).ready(function phq2Calc(){
						var phq2_numA = [];
						jQuery('#phq2A :radio:checked').each(function() {
							 phq2_numA.push(jQuery(this).val());
						 });
						var phq2_numB = [];
						 jQuery('#phq2B :radio:checked').each(function() {
							 phq2_numB.push(jQuery(this).val());
						 }); 
						 //alert('A:'+phq2_numA +' B:'+phq2_numB);
						 var o = parseFloat(phq2_numA) + parseFloat(phq2_numB);
						 // var dataString = 'A'+ phq2_numA + 'B' + phq2_numB;
						 // alert (o);return false;
						 //console.log('answer:'+o);
						 var mdd = "Probability of MDD:";
						 var dd = "<br /><br />Probability of Any Depressive Disorder:";
						 var score = "Score: " + o + "<br /><br />";
						 var caution = "Patients with a score of 3 or greater should be followed up with PHQ-9.";
						 
						   switch (o)
							 {
							 case 0:
								 jQuery('#phqresult').empty().append(score + "MDD is unlikely.");
								 break;
							 case 1:
								 jQuery('#phqresult').empty().append(score + mdd + " <b>15.4%</b>" + dd + " <b>36.9%</b>");
							   break;
							 case 2:
								 jQuery('#phqresult').empty().append(score + mdd + " <b>21.1%</b>" + dd + " <b>48.3%</b>");
							   break;
							 case 3:
								 jQuery('#phqresult').empty().append(caution + score + mdd + " <b>38.4%</b>" + dd + " <b>75.0%</b>");
							   break;
							 case 4:
								 jQuery('#phqresult').empty().append(caution + score + mdd + " <b>45.5%</b>" + dd + " <b>81.2%</b>");
								 break;
							 case 5:
								 jQuery('#phqresult').empty().append(caution + score + mdd + " <b>56.4%</b>" + dd + " <b>84.6%</b>");
								 break;
							 case 6:
								 jQuery('#phqresult').empty().append(caution + score + mdd + " <b>78.6%</b>" + dd + " <b>92.9%</b>");
								 break;
							 default:
								 jQuery('#phqresult').empty().append("Please try again");
							 } 
						   return false;
				});
			</script>
	<output name="phqresult" id="phqresult" for="phq2_numA phq2_numB"></output>
	</form>
    <fieldset class="ui-grid-a">
		<a href="#" data-rel="back" data-icon="arrow-l" data-role="button" data-transition="pop" data-direction="reverse">Close</a>
    </fieldset>
	</div><!--/content-primary -->		
</div><!-- /page -->

</body>
</html>
