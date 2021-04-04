<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reciepe extends Model
{

    public function meal()
    {
        return $this->belongsTo("App\Models\Mymeal");
    }

    use HasFactory;
}
