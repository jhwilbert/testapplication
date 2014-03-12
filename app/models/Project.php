<?php

class Project extends Eloquent {

    public function images() {
        return $this->hasMany('ProjectImage');
    }

}