<?php

namespace App\Libraries;

use App\Models\Variant;
use Illuminate\Support\Facades\DB;

class DataTable
{
    public function all()
    {
         $sku= Variant::select('sku', 'inventory_quantity',  DB::raw('count(variant_id) as total'))->groupBy('sku','inventory_quantity')->get()->toArray();
            return $sku;
    }

//    public function sameSku()
//    {
//
//       // $sku= Variant::groupBy('sku')->get()->toArray();
//        //$sku= $data->count('variant_id');
//        //dd($sku);die;
//
//    }
}