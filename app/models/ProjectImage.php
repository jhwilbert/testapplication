<?php

class ProjectImage extends Eloquent {


	public static $dimensions = array(
		'thumb'  => array(260, 160, true,  90),
		'medium' => array(780, 480, false, 90),
	);

    public function project() {
        return $this->belongsTo('Project');
    }

    public function getImagePath($size = 'thumb') {
        $dim = $this::$dimensions[$size];
    	$dir = $dim[0] . 'x' . $dim[1];
        if ($dim[2] == true) $dir .= '_crop';
    	return 'public/uploads/project/'.$this->project->id.'/project_images/'.$this->id.'/'.$dir.'/'.$this->file_name;
    }
}