<?php

class Header extends HTML{
	public function __construct($size = 1, $content = "", $attributes = array()){
		parent::__construct("h$size", $content, $attributes);
	}
}

?>