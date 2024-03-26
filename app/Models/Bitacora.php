<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bitacora extends Model
{
    use HasFactory;

    protected $table='bitacora';
    protected $fillable = [
        'id',
        'fecha',
        'hora',
        'rpm_bomba',
        'piezometro_pulgada',
        'gasto_lps',
        'nivel_dinamico',
        'observaciones',
        'id_pozo',
        'id_usuario',
        'enabled',
        'created_at',
        'updated_at'

    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = false;
    protected $keyType = 'string';

    public function pozo(): BelongsTo{
        return $this->belongsTo(Pozo::class,'id_pozo');
    }

    /*public function user(): BelongsTo{
        return $this->belongsTo(User::class,'id');
    }*/
}
