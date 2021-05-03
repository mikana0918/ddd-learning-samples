<?php

namespace App\ValueObjects\User;

use Exception;

class UserName {
  /**
   * @var String
   */
  private $userName;

  public function __construct(String $userName) {
    if (! $userName) {
      throw new UserNameValueObjectArgsException('idがセットされていません');
    }
    if (strlen($userName) < 3) {
      throw new UserNameValueObjectArgsException('ユーザー名は3文字以上です');
    }
    if (strlen($userName) > 20) {
      throw new UserNameValueObjectArgsException('ユーザー名は20文字以下です');
    }
    $this->userName = $userName;
  }
}

class UserNameValueObjectArgsException extends Exception {}