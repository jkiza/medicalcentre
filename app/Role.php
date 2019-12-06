<?php
# @Author: izzy
# @Date:   2019-11-22T10:27:34+00:00
# @Last modified by:   izzy
# @Last modified time: 2019-12-06T10:16:30+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public function users()
  {
    return $this->belongsToMany('App\User', 'user_role');
  }
}
