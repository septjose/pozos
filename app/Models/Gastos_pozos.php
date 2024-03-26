<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gastos_pozos extends Model
{
    use HasFactory;


    protected $table='gastos_pozos';
    protected $fillable = [
        'id_gasto_pozo',
        'id_diametro_bomba',
        'piezometro_pulgada',
        'gasto_lps',
        'enabled',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id_gasto_pozo';
    public $timestamps = true;
    public $incrementing = false;

    public function diametros_bomba(): BelongsTo
    {
        // Muchos pozos tienen un cliente
        return $this->belongsTo(Diametros_bomba::class, 'id_diametro_bomba');
    }
}
