<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'memo1';
    protected $fillable = ['id', 'kind', 'jap_pron', 'jap_lang', 'jap_mean'];
}


