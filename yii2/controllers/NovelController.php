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
use app\models\Novel_chapter;
use app\models\Type;
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
        //作者
        $authors=Authors::find()->where(['id'=>$novel[0]->author_id])->one();
        //类型
        $type=Type::find()->where(['id'=>$novel[0]->type_id])->one();
        //小说章节
        $novel_chapter = Novel_chapter::find()->where(['novel_id'=>1])->all();
        return $this->render('index',
            [
                'novel'=>$novel,
                'authors'=>$authors,
                'type'=>$type,
                'novel_chapter'=>$novel_chapter
            ]);
    }

}