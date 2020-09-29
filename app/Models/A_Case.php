<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class A_Case extends Model
{
    protected $fillable = ['number_case', 'folio','name','requirement','comment'];
}

// use HasFactory;

//   public function state(){
//   return $this->belongsTo(State::class,'id_state');
// }
    
//   public function customer(){
//   return $this->belongsTo(Customer::class,'id_client');
// }
