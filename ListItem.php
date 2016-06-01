<?php
require_once dirname(__FILE__)."/HTML.php";

class ListItem extends HTML{
	
	public function __construct($content = "", $attributes = array()){
		parent::__construct("li", $content, $attributes);
	}
}
?>