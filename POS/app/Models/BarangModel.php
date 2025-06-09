<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    use HasFactory;

    protected $table = 'm_barang'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'barang_id'; // Primary key
    public $timestamps = false; // Jika tidak ada created_at & updated_at

    protected $fillable = ['kategori_id', 'barang_kode', 'barang_nama', 'harga_beli', 'harga_jual'];
    public function kategori()
{
    return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
}

}
