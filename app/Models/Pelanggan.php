<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kartu;

class Pelanggan extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table = 'pelanggan';
    public $timestamps = false;
    protected $fillable = [
        'kode', 
        'nama', 
        'jk',
        'tmp_lahir',
        'tgl_lahir',
        'email',
        'kartu_id',
    ];
    public function kartu()
    {
        return $this->belongsTo(Kartu::class);
    }
}
