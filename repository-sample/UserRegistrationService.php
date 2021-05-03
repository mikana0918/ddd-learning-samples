<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Repositories\UserRepositoryInterface;
use App\Models\User;

class UserRegistrationService 
{

  /**
   * @var UserRepositoryInterface
   */
  private $userRepository;

  /**
   * @param  UserRepositoryInterface $userRepository
   */
  public function __construct(UserRepositoryInterface $userRepository)
  {
    $this->userRepository = $userRepository;
  }


  /**
   * Create
   *
   * @param String $username
   * @return JsonResponse
   * @throws UsernameNotGivenExceotion
   */
  public function create(Request $req) { 
    $vReq = $req->validated(); // validated data
    $username = $vReq['username'];

    if (! $username) {
      throw new UsernameNotGivenExceotion('The given response does not include username.');
    }
    

    return response()->json([
      'user' => $this->userRepository->create($username)
    ]);
  }

  /**
   * Find user by his/her username
   *
   * @param array $params
   * @return JsonResponse
   * @throws UsernameNotGivenExceotion
   */
  public function findByUserName(Request $req) {
    $vReq = $req->validated(); // validated data
    $username = $vReq['username'];

    if(! $username)  {
      throw new UsernameNotGivenExceotion('The given response does not include username.');
    }

    return response()->json([
      'user' => $this->userRepository->findByUserName($username)
    ]);
  }
}

class UsernameNotGivenException extends Exception {}