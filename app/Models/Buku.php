<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Buku
 *
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $id
 * @property string $judul
 * @property string $penulis
 * @property int $harga
 * @property string $tgl_terbit
 * @method static \Illuminate\Database\Eloquent\Builder|Buku newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Buku newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Buku query()
 * @method static \Illuminate\Database\Eloquent\Builder|Buku whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku whereHarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku wherePenulis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku whereTglTerbit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Buku whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Buku extends Model
{
    use HasFactory;
    protected $table = "buku";
    protected $fillable = ["id","judul","penulis","harga","tgl_buku"];
}
