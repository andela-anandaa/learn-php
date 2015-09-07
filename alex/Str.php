<?php
class Str {
	public $str;
	function __construct($str){
		$this->str = $str;
		$this->len = strlen($str);
	}
}