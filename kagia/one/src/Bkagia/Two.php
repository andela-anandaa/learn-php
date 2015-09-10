<?php

namespace Bkagia;

class Two
{
  private $data;

  function __construct()
  {
    $this->data = [];
  }

  public function create($slang, $description, $sample)
  {
    $this->data[$slang] = [
      'description' => $description,
      'sample' => $sample
    ];
  }

  public function update($slang, $description, $sample)
  {
    $this->data[$slang] = [
      'description' => $description,
      'sample' => $sample
    ];
  }

  public function read($slang)
  {
    if (isset($this->data[$slang]))
    {
      return $this->data[$slang];
    } else {
      return null;
    }
    
  }

  public function delete($slang)
  {
    unset($this->data[$slang]);
  }
}
