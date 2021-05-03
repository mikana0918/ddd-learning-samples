<?php

namespace App\Repositories\Interfaces;

Interface UserRepositoryInterface {
  public function findById(UserId $id): User;
  public function findByUserName(UserName $name): User;
  public function Save(User $user): bool;
  public function Delete(User $user): bool;
}