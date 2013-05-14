<?php
   	if ($CurrentUser->logged_in()) {
   		$this->register_app('cvw_googleanalytics', 'Google Analytics', 5, 'Displaying Google Analytics data', '1.0.2', true);
    	$this->require_version('cvw_googleanalytics', '2.0.8');
    	$this->add_setting('cvw_googleanalytics_ooid', 'OOcharts ID', 'text', '');
        $this->add_setting('cvw_googleanalytics_gaid', 'Google Analytics Profile ID', 'text', '');
        $this->add_setting('cvw_googleanalytics_duration', 'Number of days', 'text', '');
	}
?>