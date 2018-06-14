<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 2:58
 */

namespace App\Http\Controllers\area;


use App\Http\Controllers\Controller;
use App\Http\Model\Actor;
use App\Http\Model\Area;
use App\Http\Model\Director;
use App\Http\Model\Film;
use App\Http\Model\Type;
use App\Http\Model\Years;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * @desc 登录
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @desc 显示页面
     */
    public function index(){
        $model = Film::all()->sortBy('id');
        return view('film/index',['model'=>$model]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @desc 跳转添加页面
     */
    public function add(){
        $actor = Actor::get();
        $director = Director::get();
        $home = Years::get();
        $type = Type::get()->where('type',1);
        $area = Area::get();
        return view('film/add',[
            'actor'=>$actor,
            'director'=>$director,
            'home'=>$home,
            'type'=>$type,
            'area'=>$area
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @desc 添加图片，保存
     */
    public function addSave(Request $request) {

        $file = $request->file('img_url');

        if ($file->isValid()) {
            $originalName = $file->getClientOriginalName();
            $realPath = $file->getRealPath();
            Storage::disk('uploads')->put($originalName,file_get_contents($realPath));
            $data = $request->input();
            $data['img_url'] ='/uploads/'.$originalName;
        }
        unset($data['_token']);
        Film::create($data);
        return redirect('film/index');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|string
     * @desc 删除
     */
    public function delete(){
        $data=Film::find($_GET['id']);
        if($data){
            $data->delete($_GET['id']);
            return redirect('film/index');
        }else{
            return 'error';
        }
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     * @desc 跳转修改页面
     */
    public function edit(){

        $actor = Actor::get();
        $director = Director::get();
        $home = Years::get();
        $type = Type::get();
        $area = Area::get();
        $data=Film::find($_GET['id']);
        if($data){
            return view('film/edit',[
                'actor'=>$actor,
                'director'=>$director,
                'home'=>$home,
                'type'=>$type,
                'area'=>$area,
                'data'=>$data
            ]);
        }else{
            return 'error';
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @desc 修改保存，处理图片
     */
    public function editSave(Request $request){
        $file = $request->file('img_url');

        if ($file->isValid()) {
            $originalName = $file->getClientOriginalName();
            $realPath = $file->getRealPath();
            Storage::disk('uploads')->put($originalName,file_get_contents($realPath));
            $data = $request->input();
            $data['img_url'] ='/uploads/'.$originalName;
        }
        unset($data['_token']);
//        Film::create($data);
        $model = new Film();
        $model->where(['id'=>$data['id']])->update($data);
        return redirect('film/index');
    }
}