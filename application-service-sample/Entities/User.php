<?php

namespace App\Entities;

use App\ValueObjects\User\UserId;
use App\ValueObjects\User\UserName;

class User {
  /**
   * @var UserName
   */
  private $userName;
  /**
   * @var UserId
   */
  private $id;

  public function __construct(UserName $username, ?UserId $id) {
    $this->userName = $username;
    
    if(! $id) {
      $this->id = new UserId(uniqid());
    } else {
      $this->id = $id;
    }
  }
}