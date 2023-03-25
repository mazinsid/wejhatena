<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function ads()
    {
        return $this->hasMany(Ads::class);
    }
}
