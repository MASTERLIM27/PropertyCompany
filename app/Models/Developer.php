<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    protected $primaryKey = "code";
    protected $keyType = 'string';

    protected $fillable = [
        'code', 
        'name',
        'videolink',
        'description'
    ];

    public function projects(){
        return $this->hasMany(Project::class, 'developer', 'code');
    }
}
