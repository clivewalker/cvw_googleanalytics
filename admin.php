<?php
   	if ($CurrentUser->logged_in()) {
   		$this->register_app('cvw_googleanalytics', 'Google Analytics', 5, 'Displaying Google Analytics data', '1', true);
    	$this->require_version('cvw_googleanalytics', '2.0.8');
	}
?>