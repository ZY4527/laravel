<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 6:41
 */

namespace App\Http\Controllers\area;


use App\Http\Controllers\Controller;
use App\Http\Model\Collection;
use App\Http\Model\Tv;

class CollectionController extends Controller
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
    public function index() {
        $data = Collection::all()->sortBy('id');
        return view('collection/index',['list'=>$data]);
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @desc 跳转添加页面
     */
    public function add() {
        $tv = Tv::get();
        return view('collection/add',[
            'tv'=>$tv
        ]);
    }
    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @desc 添加保存
     */
    public function addSave() {
        unset($_POST['_token']);
        Collection::create($_POST);
        return redirect('tv_collection/index');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     * @desc 跳转修改列表
     */
    public function edit() {
        $tv = Tv::get();
        $data = Collection::find($_GET['id']);
        return view('collection/edit',['list'=>$data,'tv'=>$tv]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @desc 修改保存
     */
    public function editSave() {
        unset($_POST['_tolen']);
        $data = Collection::find($_POST['id']);
        $data->update($_POST);
        return redirect('tv_collection/index');
    }
    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|string
     * @desc 删除
     */
    public function delete() {
        $data = Collection::find($_GET['id']);
        $data->delete($_GET['id']);
        return redirect('tv_collection/index');
    }
}