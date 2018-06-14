<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 4:04
 */

namespace App\Http\Controllers\area;


use App\Http\Controllers\Controller;
use App\Http\Model\Actor;
use App\Http\Model\Area;
use App\Http\Model\Director;
use App\Http\Model\Tv;
use App\Http\Model\Type;
use App\Http\Model\Years;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TvController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){

        $data = Tv::all()->sortBy('id');
        return view('tv/index',['list'=>$data]);
    }

    public function add() {
        $actor = Actor::get();
        $director = Director::get();
        $home = Years::get();
        $type = Type::get()->where('type',2);
        $area = Area::get();
        return view('tv/add',[
            'actor'=>$actor,
            'director'=>$director,
            'home'=>$home,
            'type'=>$type,
            'area'=>$area
        ]);
    }

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
        Tv::create($data);
        return redirect('tv/index');
    }

    public function edit() {
        $actor = Actor::get();
        $director = Director::get();
        $home = Years::get();
        $type = Type::get();
        $area = Area::get();
        $data = Tv::find($_GET['id']);
        return view('tv/edit',[
            'list'=>$data,
            'actor'=>$actor,
            'director'=>$director,
            'home'=>$home,
            'type'=>$type,
            'area'=>$area
        ]);
    }

    public function editSave(Request $request) {
        $file = $request->file('img_url');
        if ($file->isValid()) {
            $originalName = $file->getClientOriginalName();
            $realPath = $file->getRealPath();
            Storage::disk('uploads')->put($originalName,file_get_contents($realPath));
            $data = $request->input();
            $data['img_url'] ='/uploads/'.$originalName;
        }
        unset($data['_token']);
//        Tv::create($data);
        $model = Tv::find($data['id']);
        $model->update($data);
        return redirect('tv/index');
    }

    public function delete() {
        $data = Tv::find($_GET['id']);
        $data->delete($_GET['id']);
        return redirect('tv/index');
    }
}