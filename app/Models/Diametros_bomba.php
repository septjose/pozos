<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Diametros_bomba extends Model
{
    use HasFactory;


    protected $table='diametros_bomba';
    protected $fillable = [
        'id_diametro_bomba',
        'valor',
        'enabled',
        'created_at',
        'updated_at'
    ];
    protected $primaryKey = 'id_diametro_bomba';
    public $timestamps = true;
    public $incrementing = false;


    public function gastos_pozos(): HasMany
    {
        return $this->hasMany(Gastos_pozos::class, 'id_diametro_bomba');
    }
}
