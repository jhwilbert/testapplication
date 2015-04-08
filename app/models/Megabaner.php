<?php

class Megabanner extends Eloquent {


	public static $dimensions = array(
		'big'  => array(1280, 630, true,  100),
	);

	public static $areas = array('home', 'company', 'projects', 'solutions', 'clients', 'contact', 'newsfeed');

    public function getImagePath($size = 'big') {
        $dim = $this::$dimensions[$size];
        $dir = $dim[0] . 'x' . $dim[1];
        if ($dim[2] == true) $dir .= '_crop';
        return 'public/uploads/megabanners/'.$this->id.'/'.$dir.'/'.$this->file_name;
    }

}