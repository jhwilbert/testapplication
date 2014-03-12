<?php

class ProjectImage extends Eloquent {

    public function project() {
        return $this->belongsTo('Project');
    }

}