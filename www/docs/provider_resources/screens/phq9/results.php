<!DOCTYPE html> 
<html> 
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>PHQ - 9 Assessment Results</title> 
	<link rel="stylesheet"  href="../jquery.mobile/jquery.mobile.css" />  
	<script src="../../../../jquery.mobile/jquery.js"></script>
	<script src="../../../../jquery.mobile/jquery.mobile.js"></script>
</head> 
<body> 

	<div data-role="page" class="type-interior">
		<div data-role="header" data-theme="b">
		<h1>PHQ - 9 Results</h1>
        <a href="#" data-rel="back" data-icon="arrow-l" data-direction="reverse" class="ui-btn-left">Back</a>
	</div><!-- /header -->
	<div data-role="content" data-theme="c">
		<form action="index.html" method="get">
			<h2>Results:</h2>
			<script>
				jQuery(document).ready(function phq9Calc(){
						var phq91 = [];
						jQuery('#phq91 :radio:checked').each(function() {
							 phq91.push(jQuery(this).val());
						 });
						var phq92 = [];
						 jQuery('#phq92 :radio:checked').each(function() {
							 phq92.push(jQuery(this).val());
						 });
						var phq93 = [];
						 jQuery('#phq93 :radio:checked').each(function() {
							 phq93.push(jQuery(this).val());
						 }); 
						var phq94 = [];
						 jQuery('#phq94 :radio:checked').each(function() {
							 phq94.push(jQuery(this).val());
						 }); 
						var phq95 = [];
						 jQuery('#phq95 :radio:checked').each(function() {
							 phq95.push(jQuery(this).val());
						 }); 
						var phq96 = [];
						 jQuery('#phq96 :radio:checked').each(function() {
							 phq96.push(jQuery(this).val());
						 }); 
						var phq97 = [];
						 jQuery('#phq97 :radio:checked').each(function() {
							 phq97.push(jQuery(this).val());
						 }); 
						var phq98 = [];
						 jQuery('#phq98 :radio:checked').each(function() {
							 phq98.push(jQuery(this).val());
						 }); 
						var phq99 = [];
						 jQuery('#phq99 :radio:checked').each(function() {
							 phq99.push(jQuery(this).val());
						 }); 
						 var phq910 = jQuery('#problems :radio:checked').val();
					 
						 //alert('A:'+phq2_numA +' B:'+phq2_numB);
						 var o = parseFloat(phq91) + parseFloat(phq92) + parseFloat(phq93) + parseFloat(phq94) + parseFloat(phq95) + parseFloat(phq96) + parseFloat(phq97) + parseFloat(phq98) + parseFloat(phq99);
						 var q10 = ("<br /><br /><b>Difficulty these problems have affected work, home life, and relationships:</b><br />" + phq910);

						 // var dataString = 'A'+ phq2_numA + 'B' + phq2_numB;
						 // alert (o);return false;
						 //console.log('answer:'+ phq910);
						 var dsm = "<b>DSM-IV-TR Criterion Symptoms:</b> <br />";
						 var ds = "<br /><br /><b>Depression Severity:</b> <br />";
						 var pst = "<br /><br /><b>Proposed Treatment Action:</b> <br />";
						 	if(o < 4) {
										jQuery('#phqresult').empty().append(dsm + "Few" + ds + "None" + pst + "None" + q10);
							} else if (o >= 5 && o <= 9) {
										jQuery('#phqresult').empty().append(dsm + "< 5" + ds + "Mild Depression Symptoms" + pst + "Watchful waiting; Repeat PHQ-9 at follow-up" + q10);
							} else if (o >= 10 && o <= 14) {
										jQuery('#phqresult').empty().append(dsm + "5-6" + ds + "Mild Major Depression" + pst + "Treatment plan; Consider counseling, follow-up, and/or pharmacotherapy");
							} else if (o >= 15 && o <=19) {
										jQuery('#phqresult').empty().append(dsm + "6-7" + ds + "moderate Major Depression" + pst + "Immediate initiation of pharmacotherapy and/or psychotherapy");
							} else if (o >= 20 && o <= 27) {
										jQuery('#phqresult').empty().append(dsm + "> 7" + ds + "Severe Major Depression" + pst + "Immediate initiation of pharmacotherapy and, if severe impairment or poor response to therapy, expedited referral to a mental health specialist for psychotherapy and/or collaborative management"); 
							}
						   return false;
				});
			</script>
	<output name="phqresult" id="phqresult"></output>

    
    		

    
	</form>
    <fieldset class="ui-grid-a">
			<a href="#" data-rel="back" data-icon="arrow-l" data-transition="pop" data-role="button" data-direction="reverse">Close</a>
    </fieldset>
	</div><!--/content-primary -->		
</div><!-- /page -->

</body>
</html>
