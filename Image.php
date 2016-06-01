<?php

class Image extends HTML{
	public function __construct($src, $attributes = array()){
		parent::__construct("img", "", $attributes, false);
		parent::setAttr("src", $src);	
	}
}

?>