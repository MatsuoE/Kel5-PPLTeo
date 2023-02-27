<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cplsn extends Model
{
    use HasFactory;
    public $table = 'cplsn';
    protected $fillable = ['kode', 'deskripsi', 'cplp'];
}
