<?php
require_once dirname(__FILE__)."/HTML.php";

class Span extends HTML{
	
	public function __construct($content = "", $attributes = array()){
		parent::__construct("span", $content, $attributes);
	}
}
?>