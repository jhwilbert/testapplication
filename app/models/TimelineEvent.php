<?php

class TimelineEvent extends Eloquent {


	public static $dimensions = array(
		'medium'  => array(373, 180, false,  90),
	);

	public function getImagePath($size = 'medium') {
		$dim = $this::$dimensions[$size];
		$dir = $dim[0] . 'x' . $dim[1];
		if ($dim[2] == true) $dir .= '_crop';
		return 'public/uploads/timeline_events/'.$this->id.'/'.$dir.'/'.$this->file_name;
	}

}