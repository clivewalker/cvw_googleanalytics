<?php
	$Lang  = $API->get('Lang');
	$Settings = $API->get('Settings');
?>
<div class="widget">
	<h2>
    <?php echo $Lang->get('Google Analytics'); ?>
	</h2>

	<div class="bd">
	<script src="<?php echo PERCH_LOGINPATH.'/addons/apps/cvw_googleanalytics/js/oocharts.js';?>" type="text/javascript"></script>	
	<script type="text/javascript">
		
			//Set your ooid
			oo.setOOId("<?php echo $Settings->get('cvw_googleanalytics_ooid')->settingValue(); ?>");
			
			//set the date range 
				var end_date = new Date();
			    var start_date = new Date();
        		start_date.setDate(end_date.getDate() - <?php echo $Settings->get('cvw_googleanalytics_duration')->settingValue(); ?>);
			
			//load function
			oo.load(function()
			{		
				//Create a new metric (aid, startDate, endDate)
				var metric = new oo.Metric("<?php echo $Settings->get('cvw_googleanalytics_gaid')->settingValue(); ?>", new Date(start_date), new Date());
				
				//Set the metric to pull from the visitor count
				metric.setMetric('ga:visitors');
				//draw in the h1 element with id 'met'
				metric.draw('visitors');
			});
			
      		//another function
			oo.load(function()
			{		
				//Create a new metric (aid, startDate, endDate)
				var metric2 = new oo.Metric("<?php echo $Settings->get('cvw_googleanalytics_gaid')->settingValue(); ?>", new Date(start_date), new Date());
				
				//Set the metric to pageviews
				metric2.setMetric('ga:pageviews');
				//draw in the h1 element with id pageviews
				metric2.draw('pageviews');
			});
			
			//timeline
			
			oo.load(function()
			{
				//Create a new timeline (aid, startDate, endDate)
				var tl = new oo.Timeline("<?php echo $Settings->get('cvw_googleanalytics_gaid')->settingValue(); ?>", new Date(start_date), new Date());
				
				//Add the metric visitor count
				tl.addMetric('ga:visitors', 'Visits');
				
				//Add metric for pageviews
				tl.addMetric('ga:pageviews', 'Page Views');
				
				//Set Google visualization options for line colors
				tl.setOption('colors', ['red', 'orange', 'yellow', 'green']);
				
				//Set Google visualization option for chart title
				tl.setOption('title', 'My Timeline');
				
				//draw in the div element with id 'timeline'
				tl.draw('timeline');
			});
			
		</script>
        <ul class="ga">
			<li><h2 id="visitors"></h2>
        		<h3>Unique Visitors</h3></li>
        	<li><h2 id="pageviews"></h2>
        		<h3>Page Views</h3></li>
		</ul>
        <div id="timeline"></div>
  </div>
  
  </div>