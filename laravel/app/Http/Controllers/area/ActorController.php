<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 上午 11:23
 */

namespace App\Http\Controllers\area;

use App\Http\Controllers\Controller;
use App\Http\Model\Actor;

class ActorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @desc 查询数据
     */
    public function index()
    {
        $model = Actor::all()->sortBy('id');
        return view('actor/index',['model'=>$model]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @desc 跳转添加页面
     */
    public function add(){
        return view('actor/add');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @desc 添加保存
     */
    public function addSave(){
        unset($_POST['_token']);
        Actor::create($_POST);
        return redirect('actor/index');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|string
     * @desc 删除
     */
    public function delete(){
        $data = Actor::find($_GET['id']);
        if($data){
            $data->delete($_GET['id']);
            return redirect('actor/index');
        }else{
            return 'error';
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     * @desc 跳转修改列表
     */
    public function edit(){
        $data = Actor::find($_GET['id']);
        if($data){
            return view('actor/edit',['data'=>$data]);
        }else{
            return 'error';
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @desc 修改保存
     */
    public function editSave(){
        unset($_POST['_token']);
        $model = new Actor();
        $model->where(['id'=>$_POST['id']])->update($_POST);
        return redirect('actor/index');
    }
}