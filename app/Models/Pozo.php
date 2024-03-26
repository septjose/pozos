<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Pozo extends Model
{
    use HasFactory;
    protected $table = 'pozo';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'id_cliente',
        'localizacion_pozo',
        'municipio',
        'ciudad',
        'direccion',
        'motor',
        'diametro_bomba',
        'longitud_columna',
        'profundidad_pozo',
        'tipo_bomba',
        'no_pasos',
        'diametro_ademe',
        'nivel_estatico',
        'temperatura_agua',
        'orificio_utilizado',
        'enabled',
        'created',
        'updated'
    ];
    public $timestamps = true;
    public $incrementing = false;

    public function cliente(): BelongsTo
    {
        // Muchos pozos tienen un cliente
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
    public function bitacora(): HasMany
    {
        // Un pozo tiene muchas bitacoras
        return $this->hasMany(Bitacora::class, 'id_bitacora');
    }

    public function reporte(): HasMany
    {
        // Un pozo tiene muchas bitacoras
        return $this->hasMany(Reporte::class, 'id_reporte');
    }
}
