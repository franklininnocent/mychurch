<?php
/**
 * Created by : Franklin Innocent F.
 * Email : franklininnocent.fs@gmail.com
 * Date: 1/10/2022
 */

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FamilyController extends Controller {
    private $parishService;

    /*public function __construct(ParishService $parishService) {
        $this->middleware('auth');
        $this->parishService = $parishService;

    }

    public function getParishList() {
        // echo "hiiii";die;
        // return view('admin.layouts.dashboard');
        $parish_list = $this->parishService->getParishList();
        //dd($parish_list);
        return view('admin.parish.list', compact('parish_list'));
    }*/
}