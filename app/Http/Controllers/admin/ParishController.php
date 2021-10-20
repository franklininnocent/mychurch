<?php
/**
 * Created by: Franklin Innocent F
 * Email: franklininnocent.fs@gmail.com
 * Date: 10/11/2021
 * Time: 9:53 AM
 */

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\admin\global_settings\ParishService;

class ParishController extends Controller{

    private $parishService;

    public function __construct(ParishService $parishService) {
        $this->middleware('auth');
        $this->parishService = $parishService;

    }

    public function getParishList() {
        echo "hiiii";die;
        return view('admin.layouts.dashboard');
    }
}
