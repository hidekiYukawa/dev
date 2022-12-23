<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Real_Estate_Object extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters) {

        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('object_title', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%')
            ->orWhere('offer_type', 'like', '%' . request('search') . '%')
            ->orWhere('object_type', 'like', '%' . request('search') . '%')
            ->orWhere('object_details', 'like', '%' . request('search') . '%')
            ->orWhere('location', 'like', '%' . request('search') . '%')
            ->orWhere('maps_url', 'like', '%' . request('search') . '%')
            ->orWhere('area_size', 'like', '%' . request('search') . '%')
            ->orWhere('object_status', 'like', '%' . request('search') . '%')
            ->orWhere('object_price', 'like', '%' . request('search') . '%')
            ->orWhere('object_price_POA', 'like', '%' . request('search') . '%')
            ->orWhere('numBedrooms', 'like', '%' . request('search') . '%')
            ->orWhere('numBathrooms', 'like', '%' . request('search') . '%')
            ->orWhere('airco', 'like', '%' . request('search') . '%')
            ->orWhere('object_address_street', 'like', '%' . request('search') . '%')
            ->orWhere('object_address_no', 'like', '%' . request('search') . '%')
            ->orWhere('features', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%');
        }
    }

    // relationship to RealEstateObjectImage
    public function realEstateObjectImages() {
        return $this->hasMany(RealEstateObjectImage::class, 'real__estate__object_id');
    }

    // relationship to User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
