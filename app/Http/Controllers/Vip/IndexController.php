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
    //增
    public function add(){
        $data=[
            'name'=>str_random(5),
            'age'=>'20'
        ];
        $res=IndexModel::insert($data);
        var_dump($res);
    }
    //删
    public function delete($id)
    {
        $where = [
            'id' => $id
        ];
        $res = IndexModel::where($where)->delete();
        var_dump($res);
    }
    //改
    public function update($id){
        $data=[
            'name'=>str_random(4)
        ];
        $where=[
            'id'=>$id
        ];
        $res=IndexModel::where($where)->update($data);
        var_dump($res);
    }
    //查
    public function select(){
        $res=IndexModel::get()->toArray();
        var_dump($res);
    }
    //渲染模版
    public function list(){
        $list=IndexModel::all();
        $data=[
            'list'=>$list
        ];
        return view('index.index',$data);
    }
}
;