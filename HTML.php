<?php
abstract class HTML{

	private $tag;
	private $closable;
	private $attributes;
	private $children;
	public function __construct($tag, $content="", $attributes = array(), $closable = true){

		if (is_null($attributes))
			$attributes = array();

		$this->tag = $tag;
		$this->children = array();
		$this->add($content);
		$this->attributes = $attributes;
		$this->closable = $closable;
	}

	private function processAttributes(){
		$res = "";

		foreach ($this->attributes as $name => $value) {
			$res .= "$name=\"$value\" ";
		}

		return $res;
	}

	public function __toString(){
		$tag = $this->tag;
		$attr = $this->processAttributes();
		$res = "<$tag $attr>";
		if ($this->closable){
			foreach ($this->children as $node) {
				$res .= $node;
			}

			$res .= "</$tag>";
		}
		return $res;
	}

	public function add($item){
		if (is_array($item)){
			foreach ($item as $i) {
				$this->addChild($i);
			}
		} else {
			$this->addChild($item);
		}
	}

	public function addChild($child){

		if ($child instanceof HTML)
			$this->children[] = $child;
		else 
			$this->children[] = $child;
	}

	public function setAttr($name, $value){
		$this->attributes[$name] = $value;
	}

	public function addClass($class){
		if (!isset($this->attributes["class"])){
			$this->attributes["class"] = "";
		}
		$this->attributes["class"].= " $class";
	}

}
?>