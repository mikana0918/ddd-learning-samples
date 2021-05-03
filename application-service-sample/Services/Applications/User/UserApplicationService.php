<?php

namespace App\Services\Applications\User;

use App\Entities\User as UserEntity;
use App\ValueObjects\User\UserName;
use App\ValueObjects\User\UserId;

class UserApplicationService {
  /** @var UserRepositoryInterface */
  private $userRepository;
  /** @var UserDomainService */
  private $userDomainService;

  public function __construct(
    UserRepositoryInterface $userRepository, 
    UserDomainService $userDomainService
  ) {
    $this->userRepository = $userRepository;
    $this->userDomainService = $userDomainService;
  }

  public function register(String $name) {
    $user = new UserEntity(
      new UserName($name)
    );

    if ($this->userDomainService->exists($user)) {
      throw new UserAlreadyRegisteredException("ユーザーは既に存在しています");
    }

    $this->userRepository->save($user);
  }

  public function get(String $userId): UserEntity {
    $targetId = new UserId($userId);
    $user = $this->userRepository->find($targetId);
    
    $userDTO = new UserData($user->id, $user->name);

    return $userDTO;
  }
}

class UserAlreadyRegisteredException extends Exception {}