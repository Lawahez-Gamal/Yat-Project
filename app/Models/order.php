<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{

    public function meal()
    {
        return $this->belongsTo("App\Models\Mymeal");
    }

    protected $table ="orders";

    protected $fillable=['time','status','meal_id'] ;
    
    public $timestamps=false;

    use HasFactory;
}
