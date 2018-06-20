<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/19 0019
 * Time: 上午 11:30
 */

namespace app\controllers;


use app\models\Authors;
use app\models\Novel;
use yii\base\Controller;

class NovelController extends Controller
{
    public $layout = 'desc';
    public function actionIndex()
    {
        $novel = Novel::find()->all();
        if($novel[0]->status==2){
            $novel[0]->status = '完结';
        }else{
            $novel[0]->status = '连载';
        }
        $authors = Authors::find()->all();

//        var_dump($authors[$novel[0]->author_id-1]->author_name);die;
        return $this->render('index',
            [
                'novel'=>$novel,
                'authors'=>$authors
            ]);
    }

}