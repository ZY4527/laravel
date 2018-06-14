<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 2:22
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('PRC');
class Type extends Model
{
    /**
     * @var string
     * @desc 指定表
     */
    protected $table = 'type';
    /**
     * @var array
     * @desc 批量添加数据
     */
    protected $fillable = [
        'type',
        'name'
    ];
    public function getTypeTextAttribute()
    {
        $arr = [1=>'电影',2=>'电视',3=>'小说'];
        return $arr[$this->type];
    }
}