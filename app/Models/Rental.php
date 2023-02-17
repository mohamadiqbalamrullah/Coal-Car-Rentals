<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $table = "rental";
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
    protected $fillable = [
        'id',
        'driver',
        'nip',
        'keperluan',
        'jenis_kendaraan',
        'identitas_kendaraan',
        'penanggung_jawab',
        'status',
        'created_by',
        'created_at',
        'updated_at',
        'is_active'
    ];

    protected $casts = [
        'id' => 'string'
      ];
}
