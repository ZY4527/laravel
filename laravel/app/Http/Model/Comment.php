<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 8:38
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('prc');

class Comment extends Model
{
    /**
     * @var string
     * @desc 指定表
     */
    protected $table = 'comment';
    /**
     * @var array
     * @desc 批量注入
     */
    protected $fillable = [
        'user_id','comment_id','comment_type',
        'repay_id','score','content'
    ];

    /**
     * @return mixed|static
     * @desc 用户处理
     */
    public function getUsersAttribute()
    {
        return Users::find($this->user_id);
    }
    public function getCommentAttribute()
    {
        $arr = [1=>'电影',2=>'电视',3=>'小说'];
        return $arr[$this->comment_type];
    }
}