<?php
/**
 * Created by: Franklin Innocent F
 * Email: franklininnocent.fs@gmail.com
 * Date: 10/11/2021
 * Time: 10:07 AM
 */

namespace App\Services\admin\global_settings;

use Illuminate\Auth\AuthManager;
use Illuminate\Database\DatabaseManager;

class ParishService {
    private $auth;
    private $database;

    public function __construct( AuthManager $auth, DatabaseManager $database) {
        $this->auth = $auth;
        $this->database = $database;
    }
}
