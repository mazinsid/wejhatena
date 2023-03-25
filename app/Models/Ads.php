<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'category_id',
        'subcategory_id',
        'type_id',
        'user_id',
        'folder_name',
        'approved_by',
        'view_count',
        'status',
        'country_id',
        'city_id',
    ];

    public function type()
    {
        return $this->belongsTo(AdsTypes::class, 'type_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
    public function approved()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
    public function adsDetails()
    {
        return $this->hasOne(AdsDetails::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function room()
    {
        return $this->hasMany(Room::class);
    }

    public function advertiser($id)
    {
        $ads = Ads::where('id', $id)->get();
        foreach ($ads as $ad) {
            $user_id = $ad->user_id;
        }
        return $user_id;
    }
}
