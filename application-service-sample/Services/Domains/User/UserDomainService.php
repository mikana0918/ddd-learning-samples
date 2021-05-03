<?php

namespace App\Services\Domains\User;

use App\Entities\User as UserEntity;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserDomainService {
  /** @var  UserRepositoryInterface */
  private $userRepository;

  public function __construct(UserRepositoryInterface $userRepository) {
    $this->userRepository = $userRepository;
  }

  public function exists(UserEntity $user): bool {
    return $this->userRepository->find($user->id)->exists();
  }
}