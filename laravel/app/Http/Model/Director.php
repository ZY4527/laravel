<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 下午 8:50
 */

namespace App\Http\Model;


use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('prc');

class Director extends Model
{
protected $table = 'director';
protected $fillable = [
    'name'
];

}