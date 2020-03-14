<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Api\Interfaces\AuthRepositoryInterface;

class AuthController extends Controller
{
   public function __construct(AuthRepositoryInterface $auth)
    {
        $this->auth = $auth;
    }
    public function login(Request $request)
    {
        return $this->auth->login($request);
    }
    public function register(Request $request)
    {
      return $this->auth->register($request);

    }

}
