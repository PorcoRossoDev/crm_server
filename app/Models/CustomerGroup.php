<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerGroup extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'created_by',
    ];
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
