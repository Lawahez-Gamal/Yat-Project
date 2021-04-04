<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mymeal extends Model
{
    public function reciepe()
    {
        return $this->hasOne("App\Models\\reciepe");
    }

    public function order()
    {
        return $this->hasMany("App\Models\\order");
    }

    use HasFactory;
}
