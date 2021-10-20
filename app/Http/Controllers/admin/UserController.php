<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\User\UserService;

class UserController extends Controller
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
        $this->middleware('auth');
    }

    public function list(){
        $users = $this->userService->getUsersList();
        return view('admin.users.userlist',compact('users'));
    }
    public function register(){
        $roles = $this->userService->getRolesList();

        return view('admin.users.register', compact('roles'));
    }

    public function update(Request $request){
        $roles = $this->userService->getRolesList();
        $user = $this->userService->getUserDetails($request->id);

        return view('admin.users.edit', compact('roles'));
    }
}
