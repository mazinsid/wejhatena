<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsDetails extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'ads_id',
        'name_en',
        'name_ar',
        'phone_no',
        'description_en',
        'description_ar',

    ];
    protected $appends = [
        'ads_files'
    ];
    public function ads()
    {
        return $this->belongsTo(Ads::class);
    }
    public function cover_image()
    {
        return $this->hasOne(AdsFiles::class)->orderBy('id');
    }
    public function adsFiles()
    {
        return $this->hasMany(AdsFiles::class);
    }
}
