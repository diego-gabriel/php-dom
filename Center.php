<?php
require_once dirname(__FILE__)."/HTML.php";

class Center extends HTML{
	
	public function __construct($content = "", $attributes = array()){
		parent::__construct("center", $content, $attributes);
	}
}
?>