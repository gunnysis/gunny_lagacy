<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'videos';
    protected $fillable = ['id', 'kind', 'title', 'url', 'explain'];
}
