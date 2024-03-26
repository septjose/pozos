<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PruebaModel extends Model
{
    use HasFactory;
    protected $table = 'prueba';
    protected $primaryKey = 'id_prueba';
    protected $fillable = [
        'id_prueba',
        'input1',
        'input2',
        'input3',
];
    public $timestamps = false;
    public $incrementing = true;

   }

