<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}



    public function __construct() {

        $this->beforeFilter('@setSkrollrVars');
        
    }

    public function setSkrollrVars($route, $request)   {
        
        View::share(array('skVars' => new SkrollrVars()));
    }


}


// Skrollr vars
class SkrollrVars {

	public static $section = 0;   // skrollr section
	public static $pos = 0;       // skrollr position
	public static $over = -500;   // default skrollr size for overlapping sections
	public static $trans = 400;   // default skrollr transitions size
	public static $cont = 900;    // default skrollr contents size

	public static function addPos($qt) {
		self::$pos += $qt;
		return self::$pos;
	}

	public static function overlap() {
		return self::addPos(self::$over);
	}

	public static function addCont() {
		return self::addPos(self::$cont);
	}
	public static function addTrans() {
		return self::addPos(self::$trans);
	}

	public static function nextSection() {
		self::$section++;
	}

	public static function build() {

		if (self::$section > 0) self::overlap();

		$skData  = '';
		if (self::$section > 0) $skData  = ' data-'. self::$pos .'="top[outCubic]:100%"';
		$skData .= ' data-'.(self::addTrans()).'="top:0%"';
		$skData .= ' data-'.(self::addCont()).'="top:0%"';
		$skData .= ' data-'.(self::addTrans()).'="top:-100%"';

		self::nextSection();
		
		return $skData;

	}

}


