<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reporte extends Model
{
    use HasFactory;
    protected $table = 'reporte';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'id_pozo',
        'nota',
        'conclusion',
        'fecha_fin',
         'enabled',
         'created',
         'updated'];
    public $timestamps = true;
    public $incrementing = false;

    public function pozo(): BelongsTo{
        return $this->belongsTo(Pozo::class,'id_pozo');
    }
    // muchos reportes tienen un pozo

   }

