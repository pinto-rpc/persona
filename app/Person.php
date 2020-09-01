<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Person extends Model
{
    protected $table = 'persons';
    protected $fillable = ['name', 'lastname'];

    public function user(){
       return $this->belongsTo(User::class);
    }

}
