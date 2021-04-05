<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table ="contacts";

    protected $fillable=['name','email','subject','message'] ;
    
    public $timestamps=false;
    use HasFactory;
}
