<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubication extends Model
{
    use HasFactory;
    //FG UBICATION
    public function users(){
        return $this->hasOne(User::class);
    }
}
 