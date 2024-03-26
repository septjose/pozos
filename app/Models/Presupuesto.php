<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Presupuesto extends Model
{
    use HasFactory;
    protected $table = 'presupuesto';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'id_cliente',
        'fecha',
        'numero',
        'subtotal',
         'iva',
         'total',
         'enabled',
         'created',
         'updated'];
    public $timestamps = true;
    public $incrementing = false;

    public function cliente(): BelongsTo{
        return $this->belongsTo(Cliente::class,'id_cliente');
    }

    public function detalle_presupuesto(): HasMany{
        return $this->hasMany(Detalle_presupuesto::class,'id_detalle_presupuesto');
    }
    //Muchos presupuestos tienen un cliente

   }

