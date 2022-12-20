<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanLaptop extends Model
{
    use HasFactory;
    protected $table = 'data';
    protected $fillable = [
        'name',
        'purpose',
        'ket',
        'nis',
        'rayon',
        'date',
        'teacher_name',
        'return_date',
    ];
}
