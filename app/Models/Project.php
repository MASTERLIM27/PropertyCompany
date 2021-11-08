<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 
        'name', 
        'type', 
        'developer',
        'videolink',
        'description'
    ];

    public function developers(){
        return $this->belongsTo(Developer::class, 'developer', 'code');
    }
}
