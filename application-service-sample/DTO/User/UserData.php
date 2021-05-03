<?php

class UserData {
  /** @var String $id */
  private $id;
  /** @var String $name */
  private $name;

  public function __construct(String $id, String $name) {
    $this->id = $id;
    $this->name = $name;
  }

  public function id() {
    return $this->id;
  }

  public function name() {
    return $this->name;
  }
}