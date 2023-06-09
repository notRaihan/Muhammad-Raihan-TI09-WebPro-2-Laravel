<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table = 'kartu';
    protected $fillable = ['kode', 'nama', 'diskon', 'iuran'];
}
