<?php
class Str{
	public $str;
	public $len;

	function __construct($str){
	$this->str = $str;
	$this->len = strlen($str);
	}
}