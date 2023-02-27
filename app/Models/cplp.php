<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cplp extends Model
{
    use HasFactory;
    public $table = 'cplp';
    protected $fillable = ['kode', 'deskripsi'];
}
