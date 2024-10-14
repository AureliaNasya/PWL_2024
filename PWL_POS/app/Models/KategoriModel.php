<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KategoriModel extends Model
{
    use HasFactory;
    protected $table = 'm_kategori';
    protected $primaryKey = 'kategori_id';
        /**
         * @var array
        */
    protected $fillable = ['kategori_id', 'kategori_kode', 'kategori_nama'];

    public function level(): BelongsTo {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }
}