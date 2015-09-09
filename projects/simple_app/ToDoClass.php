<?php
require "../conn.php";

class ToDo {
  static function init() {
    global $conn;
  }

  static function addItem($item) {
    $sql = "INSERT INTO todo (item) VALUES ('" .
  							$item . "')";
    global $conn;
  	$conn->query($sql);
    return true;
  }

  static function getItems() {
    $sql = "SELECT * ,
            DATE_FORMAT(date_time, '%b %d, %Y') as date_time
            FROM todo";
    global $conn;
    $result = $conn->query($sql);
    return $result;
  }

  static function updateItem($id) {

  }

  static function deleteItem($id) {

  }
}

ToDo::init();
