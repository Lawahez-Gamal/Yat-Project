<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mail extends Model
{
    protected $table ="mails";

    protected $fillable=['email'] ;

    public $timestamps=false;

    use HasFactory;
}
