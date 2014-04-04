<?php

class Project extends Eloquent {

    public function projectImages() {
        return $this->hasMany('ProjectImage');
    }


    public function image() {
    	return $this->projectImages()->orderby('position')->first();
    }


}