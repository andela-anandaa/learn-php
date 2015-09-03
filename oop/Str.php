<?php
class Str {
  public $str = "test";
  public $len;

  public function __contruct($str) {
    $this->str = $str;
    $this->len = strlen($str);
    echo "dobe";
  }

  public function __toString() {
    return $this->str;
  }

}
