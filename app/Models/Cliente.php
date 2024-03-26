<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Cliente extends Model
{
    protected $table='cliente';
    protected $fillable = [
        'id',
        'contacto_empresa',
        'nombre',
        'apellido_maaterno',
        'apellido_paterno',
        'direccion',
        'cp',
        'tel',
        'enabled',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;

    public function presupuesto(): HasMany{
        return $this->hasMany(Presupuesto::class,'id_presupuesto');
    }

    public function pozo(): HasMany{
        return $this->hasMany(Pozo::class,'id_cliente');
    }

}
