<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class VNDistrict extends Model

{

    use HasFactory;

    protected $table = 'vn_district';
    protected $fillable = [
        'name',
        'ProvinceID',
        '_prefix',
        'slug'
    ];
    public function city()
    {
        return $this->hasOne(VNCity::class, 'id', 'ProvinceID');
    }
}
