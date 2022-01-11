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

    public function saveUser(Request $request){
        $validator = $this->validator($request->all());
        if ($validator->fails()):
            return redirect('admin/users/register')->withErrors($validator, 'User');
        endif;
        $status = true;
        if(!isset($request->status)){
            $status = false;
        }
        //$pass = generateRandomString();
        $pass = '123456';

        die;
        $data = array('name' => $request->get("name"),'business_id'=>business(auth()->user()->id),
            'email' => $request->get("email"),'password' => Hash::make($pass),
            'phone' => $request->get("phone"),'role_id' => $request->get("role_id"),
            'active' => $status,'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        );
        $result = $this->userService->saveUser($data);
    }

    public function update(Request $request){
        $roles = $this->userService->getRolesList();
        $user = $this->userService->getUserDetails($request->id);

        return view('admin.users.edit', compact('roles'));
    }
}
