<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    //using hasmany verb one to many
  public function info(){
    return $this->hasMany(Info::class,'user_id');
}

//using eloquent
public function assignedinfo(){
    $info=Info::where('user_id', $this->id)->first();
    return $info;
}
}
