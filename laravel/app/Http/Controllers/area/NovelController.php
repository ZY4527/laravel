<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 4:26
 */

namespace App\Http\Controllers\area;


use App\Http\Controllers\Controller;
use App\Http\Model\Authors;
use App\Http\Model\Novel;
use App\Http\Model\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NovelController extends Controller
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
        $model = Novel::all()->sortBy('id');
        return view('novel/index',['model'=>$model]);
    }
    public function add(){
        $authors = Authors::get();
        $type = Type::get()->where('type',3);
        return view('novel/add',[
            'authors'=>$authors ,
            'type'=>$type
        ]);
    }
    public function addSave(Request $request){
        $file = $request->file('img_url');
        if ($file->isValid()) {
            $originalName = $file->getClientOriginalName();
            $realPath = $file->getRealPath();
            Storage::disk('uploads')->put($originalName,file_get_contents($realPath));
            $data = $request->input();
            $data['img_url'] ='/uploads/'.$originalName;
        }
        unset($data['_token']);
        Novel::create($data);
        return redirect('novel/index');
    }
    public function delete(){
        $data =Novel::find($_GET['id']);
        if($data){
            $data->delete(['id'=>$_GET['id']]);
            return redirect('novel/index');
        }else{
            return 'error';
        }
    }
    public function edit(){
        $authors = Authors::get();
        $type = Type::get()->where('type',3);
        $data =Novel::find($_GET['id']);
        if($data){
            return view('novel/edit',[
                'data'=>$data,
                'authors'=>$authors ,
                'type'=>$type
                ]);
        }else{
            return 'error';
        }
    }
    public function editSave(){
        unset($_POST['_token']);
        $model = new Novel();
//        dd($_POST);die();
        $model->where(['id'=>$_POST['id']])->update($_POST);
        return redirect('novel/index');
    }
}