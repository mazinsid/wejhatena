<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsFiles extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'ads_details_id',
        'name',
        'display_name',
        'file_type',
    ];

    public function adsDetails()
    {
        return $this->belongsTo(AdsDetails::class, 'ads_details_id');
    }
}
