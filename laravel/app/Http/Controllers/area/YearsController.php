<?php


namespace App\Http\Controllers\area;
use App\Http\Controllers\Controller;
use App\Http\Model\Years;


use Illuminate\Support\Facades\DB;

class YearsController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Years::all()->sortBy('id');
        return view('years/index',['list'=>$data]);
    }

    public function add()
    {
        return view('years/add');
    }

    public function addSave(){

        unset($_POST['_token']);
        Years::create($_POST);
        return redirect('years/index');
    }

    public function edit()
    {
        $data = Years::find($_GET['id']);

        return view('years/edit',['list'=>$data]);
    }

    public function editSave()
    {

        unset($_POST['_token']);
        $data = Years::find($_POST['id']);
        $data->update($_POST);
        return redirect('years/index');
    }

    public function delete()
    {
        $data = Years::find($_GET['id']);
        $data->delete($_GET['id']);
        return redirect('years/index');
    }
}
