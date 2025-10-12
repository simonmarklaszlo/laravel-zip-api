<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{
    use HasFactory;

    protected $table = 'zipcode';
    protected $fillable = ['zipcode', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
