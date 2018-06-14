<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/13 0013
 * Time: 上午 10:47
 */

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
date_default_timezone_set('PRC');
class Years extends Model
{
    protected $table = 'years';

    protected $fillable = ['years'];


}