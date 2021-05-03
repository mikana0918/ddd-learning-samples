<?php

namespace App\ValueObjects\User;

use Exception;

class UserId {
  /**
   * @var String
   */
  private $id;

  public function __construct(String $id) {
    if(! $id) {
      throw new UserIdIsEmptyException('idがセットされていません');
    }
    $this->id = $id;
  }
} 

class UserIdIsEmptyException extends Exception {}