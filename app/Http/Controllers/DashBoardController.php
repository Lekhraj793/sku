<?php

namespace App\Http\Controllers;

use App\Libraries\DataTable;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function dashBoard()
    {
        return View('/frontends/dashboard');
    }

    public function dataTabel()
    {
        $obj= new DataTable();
        $data=$obj->all();
        //dd($data);die;
        return view('/frontends/datatable', compact('data'));
    }

}
