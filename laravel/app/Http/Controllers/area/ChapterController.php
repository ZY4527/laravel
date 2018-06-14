<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 5:20
 */

namespace App\Http\Controllers\area;


use App\Http\Controllers\Controller;
use App\Http\Model\Chapter;
use App\Http\Model\Novel;

class ChapterController extends Controller
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
    public function index(){
        $model = Chapter::all()->sortBy('id');
        return view('chapter/index',['model'=>$model]);
    }
    public function add(){
        $novel = Novel::get();
        return view('chapter/add',[
            'novel'=>$novel
        ]);
    }
    public function addSave(){
        unset($_POST['_token']);
        Chapter::create($_POST);
        return redirect('novel_chapter/index');
    }
    public function delete(){
        $data = Chapter::find($_GET['id']);
        if($data){
            $data->delete($_GET['id']);
            return redirect('novel_chapter/index');
        }else{
            return 'error';
        }
    }
    public function edit(){
        $novel = Novel::get();
        $data = Chapter::find($_GET['id']);
        if($data){
            return view('chapter/edit',['data'=>$data,'novel'=>$novel]);
        }else{
            return 'error';
        }
    }
    public function editSave(){
        unset($_POST['_token']);
        $model = new Chapter();
        $model->where(['id'=>$_POST['id']])->update($_POST);
        return redirect('novel_chapter/index');
    }
}