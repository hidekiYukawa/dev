<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstateObjectImage extends Model
{
    use HasFactory;

    protected $table = 'realEstateObjectImages';

    // relationship to real__estate__object
    public function real_estate_object() {
        return $this->belongsTo(Real_Estate_Object::class, 'real__estate__object_id');
    }
}
