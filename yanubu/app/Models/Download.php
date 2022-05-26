<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $table = 'download';
    protected $primaryKey = 'id';
    protected $fillable = ['file', 'nama', 'kategori'];
}
