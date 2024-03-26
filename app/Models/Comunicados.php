<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Comunicados extends Model
{
    use HasFactory;


    protected $table='comunicados';
    protected $fillable = [
        'id',
        'comunicado',
        'fecha',
        'enabled',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = false;
}
