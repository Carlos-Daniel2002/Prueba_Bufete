<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    protected $fillable = ['name', 'first_name','DUI','NIT','address','telephone','cell_phone','note'];
}




//  use HasFactory;
// public function state(){
//     return $this->belongsTo(State::class,'id_state');
// }
// public function cases()
// {
//     return $this->hasMany(A_case::class,'id_client');
// }

