<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalAds extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en',
        'title_ar',
        'details_en',
        'details_ar',
        'image',
        'datatype',
        'status'
    ];
}
