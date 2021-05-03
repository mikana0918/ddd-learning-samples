<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{  
  /**
   * @var User
   */
  private $user;
  
  /**
   * @param  User $User
   */
  public function __construct(User $user)
  {
    $this->user = $user;
  }

  /**
   * Create
   *
   * @param String $username
   * @return User
   */
  public function create(String $username): User {
    $user = $this->user->firstOrCreate([
      'username' => $username
    ]);

    return $user;
  }

  /**
   * Find user by his/her username
   *
   * @param array $params
   * @return User
   */
  public function findByUserName(String $username): User {
    $user = $this
            ->user
            ->where('username', $username)
            ->find();

    return $user;
  }
}