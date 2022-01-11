<?php
/**
 * Created by PhpStorm.
 * User: arjun
 * Date: 11/12/17
 * Time: 3:21 PM
 */
namespace app\Services\User;
use App\Models\User;
use Illuminate\Auth\AuthManager;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

use Mockery\Exception;

class UserService {

    private $auth;
    private $database;

    public function __construct(
        AuthManager $auth, DatabaseManager $database
    ) {
        $this->auth = $auth;
        $this->database = $database;
    }

    public function getUsersList(){
        return DB::table('users')
            ->select('users.id','users.name', 'users.email', 'users.active',
                'users.role_id','roles.name as role_name')
            ->join('roles','roles.id','=','users.role_id')
            ->where('role_id','!=',1)
            ->get();
    }

    public function getUserDetails($id){

            return NonInventory::where('id', '=', $id)->delete();

    }
    public function getRolesList(){
        return DB::table('roles')->select('id', 'name', 'slug')
            ->where('level','>', 1)
            ->where('active','=',true
            )->get();
    }
}
