<?php
require_once dirname(__FILE__)."/HTML.php";

class Strong extends HTML{
	
	public function __construct($content = "", $attributes = array()){
		parent::__construct("strong", $content, $attributes);
	}
}
?>