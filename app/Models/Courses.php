<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $dateFormat = 'Y-m-d';

    protected $guarded  = [];
    public function User() 
    {
        return $this->belongsTo(Courses::class);
    }
}
