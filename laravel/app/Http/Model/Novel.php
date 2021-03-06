<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 4:27
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('prc');

class Novel extends Model
{
    /**
     * @var string
     * @desc 指定表
     */
    protected $table = 'novel';
    /**
     * @var array
     * @desc 批量添加
     */
    protected $fillable = [
      'title','score','img_url','download_url',
      'author_id','status','type_id','desc'
    ];

    /**
     * @return mixed|static
     * @desc 作者处理
     */
    public function getAuthorAttribute()
    {
        return Authors::find($this->author_id);
    }
    /**
     * @return mixed|static
     * @desc 类型处理
     */
    public function getTypeAttribute()
    {
        return Type::find($this->type_id);
    }
    public function getStatusTextAttribute()
    {
        $arr = [1=>'连载',2=>'完结'];
        return $arr[$this->status];
    }
}