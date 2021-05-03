<?php

namespace App\Repositories;

use App\Models\User;

Interface UserRepositoryInterface {
  /**
   * Create
   *
   * @param String $username
   * @return User
   */
  public function create(String $username): User;

  /**
   * find user by his/her username
   *
   * @param array $params
   * @return User
   */
  public function findByUserName(String $username): User;

}