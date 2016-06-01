<?php
require_once dirname(__FILE__)."/HTML.php";

class Button extends HTML
{
	
	public function __construct($content = "", $attributes = array()){
		parent::__construct("button", $content, $attributes);	
		parent::setAttr("type", "button");
	}
}
?>