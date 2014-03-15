<?php

class Project extends Eloquent {

    public function projectImages() {
        return $this->hasMany('ProjectImage');
    }

}