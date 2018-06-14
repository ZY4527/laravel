<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 4:07
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('PRC');
class Tv extends Model
{
    /**
     * @var string
     * @desc 指定表
     */
    protected $table = 'tv';
    /**
     * @var array
     * @desc 批量添加
     */
    protected $fillable = [
        'tv_name',
        'img_url',
        'download_url',
        'score',
        'lanaguage_type',
        'area_id',
        'type_id',
        'year_id',
        'director_id',
        'actor_id',
        'desc',
    ];

    /**
     * @return mixed|static
     * @desc 地区处理
     */
    public function getAreaAttribute()
    {
        return Area::find($this->area_id);
    }
    /**
     * @return mixed|static
     * @desc 类型处理
     */
    public function getTypeAttribute()
    {
        return Type::find($this->type_id);
    }
    /**
     * @return mixed|static
     * @desc 年代处理
     */
    public function getYearAttribute()
    {
        return Years::find($this->year_id);
    }
    /**
     * @return mixed|static
     * @desc 导演处理
     */
    public function getDirectorAttribute()
    {
        return Director::find($this->director_id);
    }
    /**
     * @return mixed|static
     * @desc 演员处理
     */
    public function getActorAttribute()
    {
        return Actor::find($this->actor_id);
    }
}