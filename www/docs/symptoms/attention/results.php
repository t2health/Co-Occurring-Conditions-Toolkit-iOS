<!DOCTYPE html> 
<html> 
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Attention Symptom Results</title> 
</head> 
<body> 
	<div data-role="page" class="type-interior">
		<div data-role="header" data-theme="b">
		<h1>Co-Occurring Disorders to Consider</h1>
        <a href="#" data-rel="back" data-direction="reverse" data-icon="arrow-l" data-transition="pop"class="ui-btn-left jqm-home" data-role="button">Back</a>
	</div><!-- /header -->
	<div data-role="content" data-theme="c">
		<form action="index.html" method="get">
                <ul data-role="listview" data-inset="true" class="results">        
					<li class="multitasking fatigue"><a href="concussion/index.html">Concussion</a></li>
                    <li class="pain fatigue"><a href="headache/index.html">Headache</a></li>
                    <li class="numbing intrusive multitasking distress dissociative"><a href="ptsd/index.html">PTSD</a></li>
                    <li class="numbing intrusive multitasking distress dissociative"><a href="acute_stress/index.html">Acute Stress Disorder</a></li>
                    <li class="numbing multitasking distress"><a href="depression/index.html">Depression</a></li>
                    <li class="pain fatigue"><a href="chronic_pain/index.html">Chronic Pain</a></li>
                    <li class="withdrawal dissociative fatigue distress"><a href="sud/index.html">Substance Use Disorder</a></li>
				</ul>
                <script>
				function showValues() {						
					jQuery('div.symptoms').delegate('input:checkbox', 'change', function()
					{
						 var jQuerylis = jQuery('.results > li').hide();
						 //For each one checked
						 jQuery('input:checked').each(function()
						 {
							  jQuerylis.filter('.' + jQuery(this).attr('rel')).show();
						 });

					}).find('input:checkbox').change();
 					}
					jQuery(":checkbox, :radio").click(showValues);
					jQuery("select").change(showValues);
					showValues();
				</script>
    </form>
	</div><!--/content-primary -->		
</div><!-- /page -->
</body>
</html>
