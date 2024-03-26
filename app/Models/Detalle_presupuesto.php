<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Detalle_presupuesto extends Model
{
    use HasFactory;
    protected $table='detalle_presupuesto';
    protected $fillable = [
        'id',
        'id_presupuesto',
        'cantidad',
        'unidad',
        'descripcion',
        'precio_unitario',
        'importe',
        'observacion',
        'enabled',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = false;

    public function presupuesto(): BelongsTo{
        return $this->belongsTo(Presupuesto::class,'id_presupuesto');
    }
}
