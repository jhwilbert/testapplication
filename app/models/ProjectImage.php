<?php

class ProjectImage extends Eloquent {

    public function project() {
        return $this->belongsTo('Project');
    }

    public function getImagePath($size = 'thumb') {
    	$dir = ($size == 'medium') ? '600x400' : '100x100_crop' ;
    	return 'public/uploads/project/'.$this->project->id.'/project_images/'.$this->id.'/'.$dir.'/'.$this->file_name;
    }
}