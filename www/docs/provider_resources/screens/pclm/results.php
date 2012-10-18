<!DOCTYPE html> 
<html> 
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>PTSD PCL-M Assessment Results</title> 
	<link rel="stylesheet"  href="../jquery.mobile/jquery.mobile.css" />  
	<script src="../../../../jquery.mobile/jquery.js"></script>
	<script src="../../../../jquery.mobile/jquery.mobile.js"></script>
</head> 
<body> 

	<div data-role="page" class="type-interior">
		<div data-role="header" data-theme="b">
		<h1>PTSD PCL-M Results</h1>
        <a href="#" data-rel="back" data-icon="arrow-l" data-direction="reverse" class="ui-btn-left">Back</a>
	</div><!-- /header -->
	<div data-role="content" data-theme="c">
		<form action="index.html" method="get">
			<h2>Results:</h2>
			<script>
				jQuery(document).ready(function pcml(){
						var setting = jQuery('#setting :radio:checked').val();
						var pclmQ1 = jQuery('#pclmQ1 :radio:checked').val();
						var pclmQ2 = jQuery('#pclmQ2 :radio:checked').val();
						var pclmQ3 = jQuery('#pclmQ3 :radio:checked').val();
						var pclmQ4 = jQuery('#pclmQ4 :radio:checked').val();
						var pclmQ5 = jQuery('#pclmQ5 :radio:checked').val();
						var pclmQ6 = jQuery('#pclmQ6 :radio:checked').val();
						var pclmQ7 = jQuery('#pclmQ7 :radio:checked').val();
						var pclmQ8 = jQuery('#pclmQ8 :radio:checked').val();
						var pclmQ9 = jQuery('#pclmQ9 :radio:checked').val();
						var pclmQ10 = jQuery('#pclmQ10 :radio:checked').val();
						var pclmQ11 = jQuery('#pclmQ11 :radio:checked').val();
						var pclmQ12 = jQuery('#pclmQ12 :radio:checked').val();
						var pclmQ13 = jQuery('#pclmQ13 :radio:checked').val();
						var pclmQ14 = jQuery('#pclmQ14 :radio:checked').val();
						var pclmQ15 = jQuery('#pclmQ15 :radio:checked').val();
						var pclmQ16 = jQuery('#pclmQ16 :radio:checked').val();
						var pclmQ17 = jQuery('#pclmQ17 :radio:checked').val();
					 
						 //alert('A:'+phq2_numA +' B:'+phq2_numB);
						 var o = parseFloat(pclmQ1) + parseFloat(pclmQ2) + parseFloat(pclmQ3) + parseFloat(pclmQ4) + parseFloat(pclmQ5) + parseFloat(pclmQ6) + parseFloat(pclmQ7) + parseFloat(pclmQ8) + parseFloat(pclmQ9) + parseFloat(pclmQ10) + parseFloat(pclmQ11) + parseFloat(pclmQ12) + parseFloat(pclmQ13) + parseFloat(pclmQ14) + parseFloat(pclmQ15) + parseFloat(pclmQ16) + parseFloat(pclmQ17);
						 var setting = parseFloat(setting);

						 // var dataString = 'A'+ phq2_numA + 'B' + phq2_numB;
						 // alert (o);return false;
						 //console.log('answer:'+ pclmQ17);
						 var va_ptsd = "VA PTSD specialty mental health clinic1";
						 var va_primary_care_clinic = "VA Primary Care clinic1";
						 var active_duty_iraq = "Active duty Iraq/Afghanistan (OEF/OIF)2";
						 var civilian_substance_abuse = "Civilian substance abuse residential3";
						 var civilian_primary_care = "Civilian primary care 4-5";
						 var civilian_vehicle_accidents = "Civilian motor vehicle accidents 6";
						 var user_score = ("<br /><br /><center>Score " + o + "</center>");
						 var screening = "<br /><br />Eligible for screening";
						 var diagnosis = "<br /><br />Eligible for diagnosis";
						 var na = "<br /><br />Not within range";
						 
						 
						 	switch (setting) {
							case 1:
								if(o >=48 && o < 56 ) {
									jQuery('#ptsd_results').empty().append(va_ptsd + screening + user_score);
								} else if (o >= 56) {
									jQuery('#ptsd_results').empty().append(va_ptsd + diagnosis + user_score);
								} else { jQuery('#ptsd_results').empty().append(va_ptsd + na + user_score); 
								}
							break;
							case 2: 
								if(o >=25 && o < 33 ) {
									jQuery('#ptsd_results').empty().append(va_primary_care_clinic + screening + user_score);
								} else if (o >= 33) {
									jQuery('#ptsd_results').empty().append(va_primary_care_clinic + diagnosis + user_score);
								} else { jQuery('#ptsd_results').empty().append(va_primary_care_clinic + na + user_score); 
								}
							break;
							case 3: 
								if(o >=25 && o < 28 ) {
									jQuery('#ptsd_results').empty().append(active_duty_iraq + screening + user_score);
								} else if (o >= 28) {
									jQuery('#ptsd_results').empty().append(active_duty_iraq + diagnosis + user_score);
								} else { jQuery('#ptsd_results').empty().append(active_duty_iraq + na + user_score); 
								}
							break;
							case 4:
								if(o >=36 && o < 44 ) {
									jQuery('#ptsd_results').empty().append(civilian_substance_abuse + screening + user_score);
								} else if (o >= 44) {
									jQuery('#ptsd_results').empty().append(civilian_substance_abuse + diagnosis + user_score);
								} else { jQuery('#ptsd_results').empty().append(civilian_substance_abuse + na + user_score); 
								}
							break;
							case 5: 
								if(o >=25 && o < 30 ) {
									jQuery('#ptsd_results').empty().append(civilian_primary_care + screening + user_score);
								} else if (o >= 30) {
									jQuery('#ptsd_results').empty().append(civilian_primary_care + diagnosis + user_score);
								} else { jQuery('#ptsd_results').empty().append(civilian_primary_care + na + user_score); 
								}
							break;
							case 6:
								if(o >=44 && o < 50 ) {
									jQuery('#ptsd_results').empty().append(civilian_vehicle_accidents + screening + user_score);
								} else if (o >= 50) {
									jQuery('#ptsd_results').empty().append(civilian_vehicle_accidents + diagnosis + user_score);
								} else { jQuery('#ptsd_results').empty().append(civilian_vehicle_accidents + na + user_score); 
								}
							break;
							}
						  return false;
				});
			</script>
	<output name="ptsd_results" id="ptsd_results"></output>
	</form>
    <fieldset class="ui-grid-a">
		<a href="#" data-rel="back" data-icon="arrow-l" data-role="button" data-transition="pop" data-direction="reverse">Close</a>   
    </fieldset>
	</div><!--/content-primary -->		
</div><!-- /page -->

</body>
</html>
