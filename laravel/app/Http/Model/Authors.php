<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 8:24
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('prc');

class Authors extends Model
{
    protected $table = 'authors';
    protected $fillable = [
        'author_name'
    ];
}