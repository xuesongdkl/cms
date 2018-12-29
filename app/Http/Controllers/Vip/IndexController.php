<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order\IndexModel;

class IndexController extends Controller
{
    public function index($id){
        echo "ID:".$id."<br>";
        echo __METHOD__;
        $user=IndexModel::where(['id'=>$id])->first()->toArray();
        echo "<pre>";print_r($user);
    }
}
