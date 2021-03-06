<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 上午 11:16
 */

namespace App\Http\Controllers\Area;


use App\Http\Controllers\Controller;
use App\Http\Model\Area;

class AreaController extends Controller
{

    public function __construct()
        {
            $this->middleware('auth');
        }
    public function index(){
        $model = Area::all()->sortBy('id');

        return view('area/index',['model'=>$model]);
    }
    public function add(){
        return view('area/add');
    }
    public function addSave(){
        unset($_POST['_token']);
        Area::create($_POST);
        return redirect('area/index');
    }
    public function delete(){
        $data = Area::find($_GET['id']);
        if($data){
            $data->delete($_GET['id']);
            return redirect('area/index');
        }else{
            return 'error';
        }
    }
    public function edit(){
        $data = Area::find($_GET['id']);
        if($data){
            return view('area/edit',['data'=>$data]);
        }else{
            return 'error';
        }
    }
    public function editSave(){
        unset($_POST['_token']);
        $model = new Area();
        $model->where(['id'=>$_POST['id']])->update($_POST);
        return redirect('area/index');
    }


}